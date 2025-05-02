<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'order',
        'id_course'
    ];


    public function parts(){
        return $this->hasMany(Part::class,'id_chapter');
    }

    public function course(){
        return $this->belongsTo(Course::class,'id_course');
    }
}
