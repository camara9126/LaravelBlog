<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class commentaire extends Model
{
    protected $fillable = [
        'article_id',
        'name',
        'email',
        'content',
    ];

    public function article()
    {
        return $this->belongsTo(article::class);
    }
}
