
 @extends('layouts.app')   


@section('contenu')
      <div style=" text-align: center;">
      <H1 >Ajouter un usager</H1>
                <form method="POST" action="{{ route('ajoutusagers.store') }}">
                @csrf
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Nom:</label>
                      <input type="text" class="form-control" id="nomUsagers" name="nom"  style="height: 30; width: 400px; margin-left: 20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Prenom:</label>
                      <input type="text" class="form-control" id="prenomUsagers" name="prenom" style="height: 30; width: 400px; "/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Courriel:</label>
                      <input type="text" class="form-control" id="mailUsagers" name="mail" style="height: 30; width: 400px; "/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Nom d'utilisateur:</label>
                      <input type="text" class="form-control" id="nom_utilUsagers" name="nom_util" style="height: 30; width: 400px; margin-left: -20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 2%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 90px;">Mot de passe:</label>
                      <input type="password" class="form-control" id="mdpUsagers" name="mdp" style="height: 30; width: 400px; margin-left: -60px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>

                    <div class="margin-top: 2%;" style="margin-top: 7%">
                          <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color: rgb(0, 255, 64);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Ajouter</button>
                      </div>      
                </form>
              </div>
            </div>
      


              
          </div>
      </div>

        
  </div>

  @endsection