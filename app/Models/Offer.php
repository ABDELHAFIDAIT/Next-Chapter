<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_recruiter',
        'title',
        'description',
        'type',
        'closing_date',
        'status',
    ];


    public function recruiter()
    {
        return $this->belongsTo(User::class, 'id_recruiter');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'id_offer');
    }
}
