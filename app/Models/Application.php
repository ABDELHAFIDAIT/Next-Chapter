<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_offer',
        'id_candidate',
        'motivation_letter',
        'cv',
        'status',
        'message',
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'id_offer');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_candidate');
    }
}
