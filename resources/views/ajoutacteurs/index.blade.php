
 @extends('layouts.app')   


 @section('contenu')
    <div style=" text-align: center;">

      <H1 >Ajouter un acteur</H1>

      <form method="POST" action="{{ route('ajoutacteurs.store') }}">
                @csrf
                    <div style="margin-top: 1%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Nom:</label>
                      <input type="text" class="form-control" id="nom_completActeurs" name="nom_complet"  style="height: 30; width: 400px; margin-left: 20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 1%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 90px;">Naissance:</label>
                      <input type="text" class="form-control" id="naissanceActeurs" name="naissance"  style="height: 30; width: 400px; margin-left: -60px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 1%;">
                      <label class="form-label"   style="font-size: 20px;color: rgb(134, 134, 134); margin-right: 300px;margin-top: 20 px;">Description:</label>
                    </div>
                    <div style="margin-top: 1%;">
                      <textarea id="descriptionFilm" name="description" value="" rows="4" cols="50"> </textarea>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 1%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px;margin-right: 50px;">Image:</label>
                      <input type="text" class="form-control" id="photoActeurs" name="photo" style="height: 30; width: 400px; margin-left: 20px;"/> 
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>

                    <div class="margin-top: 1%;" style="margin-top: 7%">
                          <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color: rgb(0, 255, 64);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Ajouter</button>
                      </div>      
                </form>
    </div>

@endsection
 


