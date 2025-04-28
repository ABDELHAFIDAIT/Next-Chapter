<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_teacher',
        'bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_teacher', 'id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'id_teacher', 'id_teacher');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'id_city', 'id');
    }
}
