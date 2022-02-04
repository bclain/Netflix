
 @extends('layouts.app')   


@section('contenu')
    @if(isset($film))
    <div style="display: flex;" >
          <div class="aff " style="width: 600px; margin: 5%; margin-left: 10%;text-align: left ;">
          <div style="width: 100%;
                        height: 700px;
                        background-position: center;
                        background-image: url('{{$film->img}}');
                        background-size: cover;" > </div>
            
          </div>
          
            <div  style=" min-width: 500px; width: 40%; margin: 5%; margin-top: 10%">
              <div style=" text-align: center;">
                <form method="POST" action="{{ route('modiffilm.update', [$film->id]) }}">
                @csrf
                @method('PATCH')
                    <div style="margin-top: 4%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 69px;">Titre:</label>
                      <input type="text" class="form-control" id="titreFilm" name="titre" value="{{$film->titre}}" style="height: 30; width: 400px; margin-left: 20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 4%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; ; margin-right: 70px;">Réalisateur(s):</label>
                      <input type="text" class="form-control" id="reaFilm" name="rea" value="{{$film->rea}}" style="height: 30; width: 400px; margin-left: -60px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 4%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px; margin-right: 50px;">Année:</label>
                      <input type="text" class="form-control" id="anneeFilm" name="annee" value="{{$film->annee}}" style="height: 30; width: 400px; margin-left: 20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 4%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px;margin-right: 50px;">Durée:</label>
                      <input type="text" class="form-control" id="dureeFilm" name="duree" value="{{$film->duree}}" style="height: 30; width: 400px; margin-left: 20px;"/>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 4%;">
                      <label class="form-label"   style="font-size: 20px;color: rgb(134, 134, 134); margin-right: 300px;margin-top: 20 px;">description:</label>
                    </div>
                    <div style="margin-top: 1%;">
                      <textarea id="descriptionFilm" name="description" value="" rows="4" cols="50"> {{$film->description}}</textarea>
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>
                    <div style="margin-top: 4%;">
                      <label class="form-label" style="font-size: 20px;color: rgb(134, 134, 134); margin-top: 20 px;margin-right: 50px;">Image:</label>
                      <input type="text" class="form-control" id="imgFilm" name="img" value="{{$film->img}}" style="height: 30; width: 400px; margin-left: 20px;"/> 
                      <span class="error" style="color: #FFC3C3;"> </span>
                    </div>

                    <div class="margin-top: 4%;" style="margin-top: 7%">
                          <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color: rgb(0, 255, 64);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Modifier</button>
                      </div>      
                </form>
              </div>
            </div>
            
          @else <h1 style="font-size: 50px;margin-top: -20px; color: white;" >Le film d'existe pas</h1>
      
      <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Films</h1>
          <div class="box">

              
          </div>
      </div>
      @endif
        
  </div>

  @endsection