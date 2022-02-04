
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
          <div style="display: flex;margin-top: 20px">
                <a href="{{ route('modiffilm.index', [$film->id]) }}" style="text-decoration: none;"><h3 style="font-size: 20px;color: rgb(255, 251, 0);">Modifier</h3></a>
                <a href="" style="text-decoration: none ;margin-left:30px;;">                
                <form method="POST" action="{{ route('modiffilm.destroy', [$film->id]) }}">
                @csrf
                @method('DELETE')
                    <div class="margin-top: 4%;" style="margin-top: 22px">
                          <button type="submit" name="submit" style="font-size: 20px;color:  rgb(255, 0, 0);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Supprimer</button>
                      </div>      
                </form></a>
                </div>
            
          </div>
          
            <div  style=" min-width: 500px; width: 40%; margin: 5%;">
                <h1 style="font-size: 50px;margin-top: -20px; color: white;" >{{$film->titre}}</h1>
                <div style="margin-top: 30px; display: flex; ">
                    <p style="font-size: 20px;margin-top: -20px;color: rgb(134, 134, 134);">Durée: </p>
                    <p style="font-size: 20px;margin-top: -20px;margin-left: 10px; color: white;">{{$film->duree}}</p>
                    <p style="font-size: 20px;margin-top: -20px;margin-left: 20px; color: rgb(134, 134, 134);">Année: </p>
                    <p style="font-size: 20px;margin-top: -20px;margin-left: 10px; color: white;">{{$film->annee}}</p>
                </div>
                <div class="d-flex flex-row " style="display: flex;">
                    <p style="font-size: 20px;margin-top: -20px;color: rgb(134, 134, 134);">Réalisateur:</p>
                    <p style="font-size: 20px;margin-top: -20px;margin-left: 10px;color: white;">{{$film->rea}}</p>
                </div>
                <p style="font-size: 20px;margin-left: 20px;margin-top: -10px;color: rgb(139, 139, 139);">description:</p>
                <p style="color: white;margin-top: -20px;">{{$film->description}}</p>
                
                <h3 style="font-size: 20px;margin-left: 20px;margin-top: 30px;color: rgb(139, 139, 139);">Acteurs :</h3>
                <div style="display: flex; ">

                    <div class="box">

                    </div >
            </div>



            <form method="POST" action="{{ route('supprrelation.destroy')}}" style="margin-top: 20px;">
            @csrf
            @method('DELETE')
              <input type="text" class="form-control" id="film_id" name="film_id" value="{{$film->id}}" style="display:none"/>
              <label for="cars" >Acteur a ajouter:</label>
              <select name="acteur_id" id="acteur_id">
                <option value="">Veillez choisir un acteur</option>  
                @foreach($acteurs as $acteurs)
                <option value="{{$acteurs->id}}">{{$acteurs->nom_complet}}</option>     
                @endforeach 
              </select>
              <br><br>
              <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color: rgb(255, 0, 0);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Supprimer cette relation</button>
            </form>

          @else <h1 style="font-size: 50px;margin-top: -20px; color: white;" >Le film n'existe pas</h1>
      
      @endif
        
  </div>

  @endsection