<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = ['pseudo', 'text', 'ressources_id'];

    public function ressource ()
    {
        return $this->belongsTo(\App\Models\Ressource::class, 'ressources_id');
    }
}
