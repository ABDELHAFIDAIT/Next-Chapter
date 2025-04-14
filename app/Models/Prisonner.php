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
}
