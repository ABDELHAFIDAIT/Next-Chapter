<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'content',
        'order',
        'id_chapter'
    ];


    public function chapter(){
        return $this->belongsTo(Chapter::class,'id_chapter');
    }
}
