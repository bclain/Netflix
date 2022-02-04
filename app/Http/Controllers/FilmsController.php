<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Film;
use App\Models\Acteur;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;


class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Controllers\View
     */
    public function index()
    {
        $films = Film::all();
        return View('accueils.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('ajoutfilm.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            
            try {
                $film = new Film($request->all());
                $film -> save();
                return redirect()->route('accueil.index')->with('message', "Ajout réussi");
            } catch (Throwable $e) {
                \Log::error([$e]);
                return redirect()->route('accueil.index')->with('errors', "Ajout échoué");
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return @return IlluminateViewView
     */
    public function detailfilm(int $id) : View
    {
        try {
            $film = Film::find($id);
            $acteurs = $film -> acteurs;
        } catch (ModelNotFoundException $e) {
        } catch (Throwable $e) {
            \Log::error('Erreur innattendue : ', [$e]);
        }
        
        return View('detailfilm.index', compact('film'), compact('acteurs'));
        
    }


    /**
     * Show the form for editing the specified resource.
     *  
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $film = Film::find($id);
            $acteurs = $film -> acteurs;
        } catch (ModelNotFoundException $e) {
        } catch (Throwable $e) {
            \Log::error('Erreur innattendue : ', [$e]);
        }
        
        return View('modiffilm.index', compact('film'), compact('acteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
                $film = Film::findOrFail($id);
                $film->titre = $request ->titre;
                $film->rea = $request ->rea;
                $film->description = $request ->description;
                $film->annee = $request ->annee;
                $film->duree = $request ->duree;
                $film->img = $request ->img;
                $film->save();
                return redirect()->route('accueil.index')->with('message', "Modification réussi");
        } catch (Throwable $e) {
                return redirect()->route('accueil.index')->with('errors', "Modification echouée");
                \Log::error([$e]);
        } 
          
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $film = Film::findOrFail($id);
            $film ->acteurs()->detach();
            $film->delete();
        return redirect()->route('accueil.index')->with('message', "Suppression réussi");
        } catch (Throwable $e) {
            \Log::debug($e);
         return redirect()->route('accueil.index')->with('errors', "Suppression échouée");
        }
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return @return IlluminateViewView
     */
    public function ajoutrelation(int $id) : View
    {
        try {
            $film = Film::find($id);
            $acteurs = Acteur::all();
        } catch (Throwable $e) {
            \Log::debug($e);
        }
            
        
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

                if($film->acteurs->contains($acteur)){
                    return redirect()->route('accueil.index')->with('errors', 'Acteur déjà associé');
                }
                else{
                    $film->acteurs()->attach($acteur);
                }
                $film->save;
                return redirect()->route('accueil.index')->with('message', 'Relation reussie');

            } catch (Throwable $e) {
                \Log::debug([$e]);
                return redirect()->route('accueil.index')->with('errors', 'Relation échouée');
            }

            return redirect()->route('accueil.index');
    } 


    public function supprrelation(int $id) : View
    {
        try {
            $film = Film::find($id);
            $acteurs = $film -> acteurs;
        } catch (Throwable $e) {
            \Log::debug($e);
        }
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
            return redirect()->route('accueil.index')->with('message', 'suppression relation reussie');
        } catch (Throwable $e) {
            return redirect()->route('accueil.index')->with('message', 'suppression relation echouée');
            \Log::debug($e);
        }
        
        
    }
    
}