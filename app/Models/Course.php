<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'description',
        'overview',
        'objectifs',
        'id_teacher',
        'id_category',
        'level',
        'duration',
        'status'
    ];

    public function teacher(){
        return $this->belongsTo(User::class, 'id_teacher');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function prisonners(){
        return $this->belongsToMany(Prisonner::class, 'course_prisonner', 'id_course', 'id_prisonner');
    }

    public function chapters(){
        return $this->hasMany(Chapter::class, 'id_course');
    }
}
