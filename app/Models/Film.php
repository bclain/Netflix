<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'rea', 'description', 'annee', 'duree', 'img' ];

                /**
     * Display the specified resource.
     *
     *
     */
    public function acteurs()
    {
       return $this->belongsToMany('App\Models\Acteur');
    }
}
