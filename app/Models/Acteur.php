<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;

    protected $fillable = ['nom_complet', 'naissance', 'photo', 'description' ];

    public function film()
    {
       return $this->belongsToMany('App\Models\Film');
    }
}
