<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Recruteur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/auth/register",
     *     summary="Enregistrer un nouvel utilisateur",
     *     description="Cette route permet d'enregistrer un nouvel utilisateur en tant que candidat ou recruteur.",
     *     operationId="registerUser",
     *     tags={"Authentification"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"f_name", "l_name", "phone", "email", "password", "role"},
     *             @OA\Property(property="f_name", type="string", example="Hafid"),
     *             @OA\Property(property="l_name", type="string", example="Hafid"),
     *             @OA\Property(property="phone", type="string", example="+212 612345678"),
     *             @OA\Property(property="photo", type="string", format="binary", nullable=true, description="Image de profil"),
     *             @OA\Property(property="email", type="string", format="email", example="hafid@gmail.com"),
     *             @OA\Property(property="password", type="string", format="password", example="hafid@gmail.com"),
     *             @OA\Property(property="role", type="string", enum={"recruteur", "candidat"}, example="candidat"),
     *             
     *             @OA\Property(property="biographie", type="string", example="Développeur full-stack", nullable=true),
     *             @OA\Property(property="fonction", type="string", example="Ingénieur logiciel", nullable=true),
     *             @OA\Property(property="experience", type="string", example="2,4", nullable=true),
     *             @OA\Property(property="etudes", type="string", enum={"Bac", "Bac+1", "Bac+2", "Bac+3", "Bac+5", "PhD"}, example="Bac+5", nullable=true),
     *             
     *             @OA\Property(property="entreprise", type="string", example="TechCorp", nullable=true),
     *             @OA\Property(property="site_web", type="string", format="url", example="https://www.techcorp.com", nullable=true),
     *             @OA\Property(property="about", type="string", example="Entreprise spécialisée en IT", nullable=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Utilisateur créé avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="user", type="object"),
     *             @OA\Property(property="profile", type="object"),
     *             @OA\Property(property="token", type="string", example="eyJhbGciOiJIUzI1NiIsInR5cCI...")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Erreur de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Une erreur est survenue lors de l'inscription.")
     *         )
     *     )
     * )
     */
    public function register(Request $request)
    {
        $rules = [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string|in:recruteur,candidat',
        ];

        if ($request->role == 'candidat') {
            $rules = array_merge($rules, [
                'biographie' => 'required|string|max:255',
                'fonction' => 'required|string|max:255',
                'experience' => 'required|string',
                'etudes' => 'required|string|in:Bac,Bac+1,Bac+2,Bac+3,Bac+5,PhD',
            ]);
        } elseif ($request->role == 'recruteur') {
            $rules = array_merge($rules, [
                'entreprise' => 'required|string|max:255',
                'site_web' => 'required|url',
                'about' => 'required|string|max:255',
            ]);
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        DB::beginTransaction();
        try {
            $photoPath = null;
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photos', 'public');
            }

            $user = User::create([
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'phone' => $request->phone,
                'photo' => $photoPath,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]);

            if ($request->role == 'candidat') {
                $candidat = Candidat::create([
                    'id_candidat' => $user->id,
                    'biographie' => $request->biographie,
                    'fonction' => $request->fonction,
                    'experience' => $request->experience,
                    'etudes' => $request->etudes,
                ]);

                $profile = $candidat;
            } else {
                $recruteur = Recruteur::create([
                    'id_recruteur' => $user->id,
                    'entreprise' => $request->entreprise,
                    'site_web' => $request->site_web,
                    'about' => $request->about,
                ]);

                $profile = $recruteur;
            }

            $token = JWTAuth::fromUser($user);

            DB::commit();

            return response()->json(compact('user', 'profile', 'token'));

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Une erreur est survenue lors de l\'inscription.'], 500);
        }
    }



    /**
     * @OA\Post(
     *     path="/api/auth/login",
     *     summary="Connexion d'un utilisateur",
     *     description="Permet à un utilisateur de se connecter et de recevoir un token JWT.",
     *     operationId="loginUser",
     *     tags={"Authentification"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "password"},
     *             @OA\Property(property="email", type="string", format="email", example="hafid@gmail.com"),
     *             @OA\Property(property="password", type="string", format="password", example="hafid@1234")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Connexion réussie",
     *         @OA\JsonContent(
     *             @OA\Property(property="token", type="string", example="eyJhbGciOiJIUzI1NiIsInR5cCI..."),
     *             @OA\Property(property="type", type="string", example="Bearer"),
     *             @OA\Property(property="role", type="string", example="candidat")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Identifiants incorrects",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Identifiants incorrects")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Compte suspendu",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Votre compte est suspendu pour le moment !")
     *         )
     *     )
     * )
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'message' => 'Identifiants incorrects'
            ], 401);
        }

        if ($user->status == 'suspendu') {
            return response()->json([
                'message' => 'Votre compte est suspendu pour le moment !'
            ], 403);
        }

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'message' => 'Échec de la connexion'
            ], 401);
        }

        return response()->json([
            'token' => $token,
            'type' => 'Bearer',
            'role' => $user->role
        ]);
    }


    /**
     * @OA\Post(
     *     path="/api/auth/logout",
     *     summary="Déconnexion utilisateur",
     *     description="Cette route permet à un utilisateur de se déconnecter et d'invalider son token.",
     *     operationId="logoutUser",
     *     tags={"Authentification"},
     *     security={{ "bearerAuth": {} }},
     *     @OA\Response(
     *         response=200,
     *         description="Déconnexion réussie",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Déconnexion réussie.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Une erreur est survenue lors de la déconnexion.")
     *         )
     *     )
     * )
     */
    public function logout()
    {
        try {
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json(['message' => 'Déconnexion réussie.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur est survenue lors de la déconnexion.'], 500);
        }
    }

}
