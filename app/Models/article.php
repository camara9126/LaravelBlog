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
        'category_id',
        'auteur',
        'status',
    ];

    public function commentaire()
    {
        return $this->hasMany(commentaire::class);
    }

    public function categories()
    {
        return $this->belongsTo(categorie::class);
    }

}
