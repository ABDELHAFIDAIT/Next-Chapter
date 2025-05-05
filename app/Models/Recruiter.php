<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_recruiter',
        'company_name',
        'logo',
        'sector',
        'about',
        'id_city',
        'established_at',
    ];


    public function city()
    {
        return $this->belongsTo(City::class, 'id_city');
    }

    public function user(){
        return $this->hasOne(User::class, 'id_recruiter');
    }
}
