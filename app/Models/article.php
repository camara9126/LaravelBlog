<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected  $fillable= [
        'title',
        'content',
        'image',
        'categorie',
        'auteur',
        'status',
    ];

    public function commentaire()
    {
        return $this->hasMany(commentaire::class);
    }

}
