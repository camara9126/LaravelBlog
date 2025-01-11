<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected static function boot()
    {
        parent::boot();
    
        static::saving(function ($article) {
            if (empty($article->slug)) {
                $slug = Str::slug($article->title);
                $originalSlug = $slug;
    
                // Vérifier l'unicité du slug
                $count = 1;
                while (Article::where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $count;
                    $count++;
                }
    
                $article->slug = $slug;
            }
        });
    }

}
