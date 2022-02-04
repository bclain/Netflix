
 @extends('layouts.app')   


 @section('contenu')
    <div style=" text-align: center;">

      <H1 >Ajouter un film</H1>

      <form method="post" action="{{ route('ajoutfilm.store') }}">
      @csrf
        
          <div style="margin-top: 4%;">
            <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Titre:</label>
            <input type="text" class="form-control" id="titreFilm" name="titre" value="" style="height: 30; width: 400px; margin-left: 20px;"/>
            <span class="error" style="color: #FFC3C3;"> </span>
          </div>
          <div style="margin-top: 2%;">
            <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 70px;">Réalisateur(s):</label>
            <input type="text" class="form-control" id="reaFilm" name="rea" value="" style="height: 30; width: 400px; margin-left: -60px;"/>
            <span class="error" style="color: #FFC3C3;"> </span>
          </div>
          <div style="margin-top: 2%;">
            <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; margin-right: 50px;">Année:</label>
            <input type="text" class="form-control" id="anneeFilm" name="annee" value="" style="height: 30; width: 400px; margin-left: 20px;"/>
            <span class="error" style="color: #FFC3C3;"> </span>
          </div>
          <div style="margin-top: 2%;">
            <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px;margin-right: 50px;">Durée:</label>
            <input type="text" class="form-control" id="dureeFilm" name="duree" value="" style="height: 30; width: 400px; margin-left: 20px;"/>
            <span class="error" style="color: #FFC3C3;"> </span>
          </div>
          <div style="margin-top: 2%;">
            <label class="form-label"   style="font-size: 20px;color: rgb(134, 134, 134); margin-right: 300px;margin-top: 20 px;">description:</label>
          </div>
          <div style="margin-top: 1%;">
            <textarea id="descriptionFilm" name="description" rows="4" cols="50"> </textarea>
            <span class="error" style="color: #FFC3C3;"> </span>
          </div>
          <div style="margin-top: 2%;">
            <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px;margin-right: 50px;">Image:</label>
            <input type="text" class="form-control" id="imgFilm" name="img" value="" style="height: 30; width: 400px; margin-left: 20px;"/>
            <span class="error" style="color: #FFC3C3;"> </span>
          </div>

          <div class="margin-top: 2%;" style="margin-top: 7%">
                <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color: rgb(0, 255, 64);background-color: Transparent;
                  background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Ajouter</button>
            </div>      
      </form>
    </div>

@endsection
 


