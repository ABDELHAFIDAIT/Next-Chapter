<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'logo',
        'sector',
        'about',
        'id_city',
        'founded_at',
    ];
}
