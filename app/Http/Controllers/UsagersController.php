<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Usager;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Film;

use Throwable;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Controllers\View
     */
    public function index()
    {
        $usagers = Usager::all();
        return View('usagers.index', compact('usagers'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return App\Http\Controllers\View
     */
    public function showlogin()
    {
        return View('connexion.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $reussi = Auth::attempt(['nom_util'=>$request->nom_util,'password'=>$request->mdp ]);
        
        if($reussi){
            $films=Film::all();
            return redirect()->route('accueil.index', compact('films'))->with('message', "Connexion réussie");
        }
        else{
            Log::debug("ici");
            return redirect()->route('connexion.index')->with('errors', "Connexion échouée");
        }

    }


        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        $films=Film::all();
        return View('accueils.index', compact('films'));

    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('ajoutusagers.index');
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
                $usagers = new Usager($request->all());
                $usagers->mdp=Hash::make($request->mdp);
                $usagers -> save();
                return redirect()->route('usagers.index')->with('message', "Ajout réussi");
            } catch (Throwable $e) {
                return redirect()->route('usagers.index')->with('message', "Ajout échoué");
                \Log::error([$e]);
            }

        
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
            $usagers = Usager::find($id);
        } catch (ModelNotFoundException $e) {
        } catch (Throwable $e) {
            \Log::error('Erreur innattendue : ', [$e]);
        }
        
        return View('modifusagers.index', compact('usagers'));
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
                $usagers = Usager::findOrFail($id);
                $usagers->nom = $request ->nom;
                $usagers->prenom = $request ->prenom;
                $usagers->mail = $request ->mail;
                $usagers->nom_util = $request ->nom_util;
                $usagers->mdp=Hash::make($request->mdp);
                $usagers->save();
                return redirect()->route('usagers.index',$id)->with('message', "Modification réussi");
        } catch (Throwable $e) {
                return redirect()->route('usagers.index',$id)->with('errors', "Modification échouée");
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
            $usagers = Usager::findOrFail($id);
            $usagers->delete();
            return redirect()->route('usagers.index',$id)->with('message', "Suppression réussi");
        } catch (Throwable $e) {
            return redirect()->route('usagers.index',$id)->with('errors', "Suppression échouée");
            \Log::debug($e);
        }
        
        return redirect()->route('usagers.index');
    }




}
