
 @extends('layouts.app')   


@section('contenu')
        @if(isset($usagers))
      <div style=" text-align: center;">
      <H1 >Ajouter un film</H1>
                <form method="POST" action="{{ route('modifusagers.update', [$usagers->id]) }}">
                @csrf
                @method('PATCH')
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Nom:</label>
                      <input type="text" class="form-control" id="nomUsagers" name="nom"  value="{{$usagers->nom}}" style="height: 30; width: 400px; margin-left: 20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Prenom:</label>
                      <input type="text" class="form-control" id="prenomUsagers" name="prenom" value="{{$usagers->prenom}}" style="height: 30; width: 400px; "/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Courriel:</label>
                      <input type="text" class="form-control" id="mailUsagers" name="mail" value="{{$usagers->mail}}" style="height: 30; width: 400px; "/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Nom d'utilisateur:</label>
                      <input type="text" class="form-control" id="nom_utilUsagers" name="nom_util" value="{{$usagers->nom_util}}" style="height: 30; width: 400px; margin-left: -20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 90px;">Mot de passe:</label>
                      <input type="password" class="form-control" id="mdpUsagers" name="mdp" style="height: 30; width: 400px; margin-left: -60px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>

                    <div class="margin-top: 4%;" style="margin-top: 7%">
                          <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color: rgb(0, 255, 64);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Modifier</button>
                      </div>      
                </form>
       </div>
            
          @else <h1 style="font-size: 50px;margin-top: -20px; color: white;" >L'usager n'existe pas'</h1>
      @endif
        
  </div>

  @endsection