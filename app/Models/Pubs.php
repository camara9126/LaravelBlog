<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pubs extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'image',
        'lien',
        'contact',
        'status',
    ];
}
