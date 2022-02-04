<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Acteur;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;


class ActeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Controllers\View
     */
    public function index()
    {
        $acteurs = Acteur::all();
        return View('acteurs.index', compact('acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('ajoutacteurs.index');
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
                $acteurs = new Acteur($request->all());
                $acteurs -> save();
                return redirect()->route('acteurs.index')->with('message', "Ajout réussi");
            } catch (Throwable $e) {
                \Log::error([$e]);
            return redirect()->route('acteurs.index')->with('errors', "Ajout échoué");
            }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return @return IlluminateViewView
     */
    public function detailacteurs(int $id) : View
    {
        try {
            $acteurs = Acteur::find($id);
            $film = $acteurs -> film;
        } catch (ModelNotFoundException $e) {
        } catch (Throwable $e) {
            \Log::error('Erreur innattendue : ', [$e]);
        }
        
        return View('detailacteurs.index', compact('acteurs'), compact('film'));
        
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
            $acteurs = Acteur::find($id);
            $film = $acteurs -> film;
        } catch (ModelNotFoundException $e) {
        } catch (Throwable $e) {
            \Log::error('Erreur innattendue : ', [$e]);
        }
        
        return View('modifacteurs.index', compact('acteurs'), compact('film'));
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
                $acteurs = Acteur::findOrFail($id);
                $acteurs->nom_complet = $request ->nom_complet;
                $acteurs->naissance = $request ->naissance;
                $acteurs->photo = $request ->photo;
                $acteurs->description = $request ->description;
                $acteurs->save();
                return redirect()->route('detailacteurs.index',$id)->with('message', "Madification réussi");
        } catch (Throwable $e) {
                return redirect()->route('detailacteurs.index',$id)->with('message', "Madification echouée");
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
            $acteurs = Acteur::findOrFail($id);
            $acteurs ->film()->detach();
            $acteurs->delete();
            return redirect()->route('acteurs.index')->with('message', "Suppression réussi");
        } catch (Throwable $e) {
            return redirect()->route('acteurs.index')->with('errors', "Suppression échouée");
            \Log::debug($e);
        }
    }
}
