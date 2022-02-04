<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Film;
use App\Models\Acteur;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;


class Acteurs_Films extends Controller
{
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return @return IlluminateViewView
     */
    public function ajoutrelation(int $id) : View
    {
            $film = Film::find($id);
            $acteurs = Acteur::all();
        
        return View('ajoutrelation.index', compact('film'), compact('acteurs'), );
        
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ajoutrelationStore(Request $request)
    {
        
            
            try {
                $film = Film::findOrFail($request->film_id);
                $acteur = Acteur::findOrFail($request->acteur_id);

                /*if($film->acteurs()->contains($acteur)){
                    return redirect()->route('accueil.index')->withError(['Acteur déjà associé!']);
                }
                else{*/
                    $film->acteurs()->attach($acteur);
              /*  }*/
                $film->save;
                return redirect()->route('accueil.index')->with('message', 'Relation OK');

            } catch (Throwable $e) {
                \Log::debug([$e]);
                return redirect()->route('accueil.index')->withError(['Reloation bug!']);
            }

            return redirect()->route('accueil.index');
    } 


    public function supprrelation(int $id) : View
    {
            $film = Film::find($id);
            $acteurs = $film -> acteurs;
        
        return View('supprrelation.index', compact('film'), compact('acteurs'), );
        
    }


        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRelation(Request $request)
    {
        try {
            
            $film = Film::findOrFail($request->film_id);
            $acteur = Acteur::findOrFail($request->acteur_id);
            $film ->acteurs()->detach($acteur);
        } catch (Throwable $e) {
            \Log::debug($e);
        }
        
        return redirect()->route('accueil.index');
    }
    
}