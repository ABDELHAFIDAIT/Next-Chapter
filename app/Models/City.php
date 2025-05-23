<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'id_city', 'id');
    }

    public function prisonners()
    {
        return $this->hasMany(Prisonner::class, 'id_city', 'id');
    }

    
}
