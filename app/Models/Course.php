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
    ];

    public function teacher(){
        return $this->belongsTo(User::class, 'id_teacher');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'id_category');
    }
}
