<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'text', 'img', 'storage', 'categories_id'];

    public function createur ()
    {
        return $this->belongsTo(\App\Models\Createur::class, 'createurs_id');
    }

    public function category ()
    {
        return $this->belongsTo(\App\Models\Category::class, 'categories_id');
    }

    public function comments ()
    {
        return $this->hasMany(\App\Models\Comments::class, 'ressources_id');
    }
}
