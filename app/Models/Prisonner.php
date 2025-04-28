<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisonner extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_prisonner',
        'cv',
        'about',
        'id_city',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_prisonner', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'id_city', 'id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'id_prisonner', 'id_prisonner');
    }
}
