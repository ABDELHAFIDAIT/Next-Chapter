<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class AnnonceController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/annonces",
     *     summary="Créer une nouvelle annonce",
     *     tags={"Annonces"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"titre", "description", "contrat", "type", "ville"},
     *             @OA\Property(property="titre", type="string"),
     *             @OA\Property(property="description", type="string"),
     *             @OA\Property(property="contrat", type="string"),
     *             @OA\Property(property="type", type="string"),
     *             @OA\Property(property="ville", type="string"),
     *         )
     *     ),
     *     @OA\Response(response=201, description="Annonce créée avec succès"),
     *     @OA\Response(response=400, description="Erreur de validation"),
     * )
     */
    public function createAnnonce(Request $request)
    {
        try {
            $data = $request->validate([
                'titre' => 'required|string',
                'description' => 'required|string',
                'type' => 'required|string|in:Remote,Hybrid,Onsite',
                'contrat' => 'required|string|in:CDI,CDD,Freelance,Stage',
                'ville' => 'required|string',
            ]);

            $annonce = DB::table('annonces')->insert($data);
            return response()->json([
                "annonce" => $annonce,
                "message" => "Annonce créée avec succès"
            ], 201);
        } catch (Exception $e) {
            Log::error("Erreur lors de la création d'une annonce: " . $e->getMessage());
            return response()->json(["error" => "Erreur interne du serveur"], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/api/annonces/{id}",
     *     summary="Supprimer une annonce",
     *     tags={"Annonces"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Annonce supprimée avec succès"),
     *     @OA\Response(response=404, description="Annonce non trouvée"),
     * )
     */
    public function deleteAnnonce($id)
    {
        try {
            $deleted = DB::table('annonces')->where('id', $id)->delete();
            if (!$deleted) {
                return response()->json(["error" => "Annonce non trouvée"], 404);
            }
            return response()->json(["message" => "Annonce supprimée avec succès"], 200);
        } catch (Exception $e) {
            Log::error("Erreur lors de la suppression d'une annonce: " . $e->getMessage());
            return response()->json(["error" => "Erreur interne du serveur"], 500);
        }
    }


    /**
     * @OA\Get(
     *     path="/api/annonces/{id}",
     *     summary="Obtenir une annonce par ID",
     *     tags={"Annonces"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Détails de l'annonce"),
     *     @OA\Response(response=404, description="Annonce non trouvée")
     * )
     */
    public function getOneAnnonce($id)
    {
        try {
            $annonce = DB::table('annonces')->where('id', $id)->first();
            if ($annonce) {
                return response()->json($annonce, 200);
            }
            return response()->json(['error' => 'Annonce non trouvée'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/annonces",
     *     summary="Obtenir toutes les annonces",
     *     tags={"Annonces"},
     *     @OA\Response(response=200, description="Liste des annonces")
     * )
     */
    public function getAllAnnonces()
    {
        try {
            $annonces = DB::table('annonces')->get();
            return response()->json($annonces, 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/annonces/search",
     *     summary="Rechercher une annonce par titre ou description",
     *     tags={"Annonces"},
     *     @OA\Parameter(name="query", in="query", required=true, @OA\Schema(type="string")),
     *     @OA\Response(response=200, description="Résultats de la recherche")
     * )
     */
    public function searchAnnonce(Request $request)
    {
        try {
            $query = $request->query('query');
            $annonces = DB::table('annonces')
                ->where('titre', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->get();
            return response()->json($annonces, 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/annonces/filter",
     *     summary="Filtrer les annonces par contrat, type ou ville",
     *     tags={"Annonces"},
     *     @OA\Parameter(name="contrat", in="query", required=false, @OA\Schema(type="string")),
     *     @OA\Parameter(name="type", in="query", required=false, @OA\Schema(type="string")),
     *     @OA\Parameter(name="ville", in="query", required=false, @OA\Schema(type="string")),
     *     @OA\Response(response=200, description="Annonces filtrées")
     * )
     */
    public function filterAnnonce(Request $request)
    {
        try {
            $annonces = DB::table('annonces');

            if ($request->has('contrat')) {
                $annonces->where('contrat', $request->query('contrat'));
            }
            if ($request->has('type')) {
                $annonces->where('type', $request->query('type'));
            }
            if ($request->has('ville')) {
                $annonces->where('ville', $request->query('ville'));
            }

            return response()->json($annonces->get(), 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
