<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_prisonner',
        'id_course',
    ];

    public function prisonner(){
        return $this->belongsTo(User::class, 'id_prisonner');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'id_course');
    }
}
