
 @extends('layouts.app')   


 @section('contenu')
    <div style=" text-align: center;">

      <H1 >Ajouter un film</H1>

      <form method="post" action="{{ route('connexion.login') }}">
      @csrf
        
      <div style="margin-top: 4%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Nom d'utilisateur:</label>
                      <input type="text" class="form-control"  name="nom_util" style="height: 30; width: 400px; margin-left: 20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 120px;">Mot de passe:</label>
                      <input type="password" class="form-control" id="reaFilm" name="mdp" style="height: 30; width: 400px; margin-left: 0px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>

                    <div class="margin-top: 4%;" style="margin-top: 7%">
                          <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color: rgb(0, 255, 64);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Se connecter</button>
                      </div>
            </div>      
      </form>
    </div>

@endsection
 


