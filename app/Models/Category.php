<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function ressource () 
    {
        return $this->hasMany(\App\Models\Ressource::class, 'categories_id');
    }
}
