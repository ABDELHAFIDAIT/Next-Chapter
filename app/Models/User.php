<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'phone',
        'photo',
        'email',
        'password',
        'role',
        'first_login',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function prisonner()
    {
        return $this->hasOne(Prisonner::class, 'id_prisonner', 'id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'id_teacher', 'id');
    }

    public function links()
    {
        return $this->hasMany(Media::class, 'id_user');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'id_teacher');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'id_prisonner');
    }

    public function recruiter()
    {
        return $this->hasOne(Recruiter::class, 'id_recruiter');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'id_candidate');
    }
}
