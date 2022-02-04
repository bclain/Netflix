
 @extends('layouts.app')   


@section('contenu')
    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
            <h1 style="font-size: 50px" id="home">Usagers</h1>
            <a href="{{ route('ajoutusagers.index') }}" style="text-decoration: none;"><p style="color: rgb(0, 255, 64);margin-left: 20px;font-size: 30px">Ajouter</p></a>

            @foreach($usagers as $usagers)

            <div style=" margin-top: 10px;display: flex; background-color: black;border: solid; text-align:right; width: 100%">
                <div style="width: 30%;display: flex; padding-left:2%">
                    <h3 style="margin-left: 2%;font-size:15px">{{$usagers->prenom}}</h3>
                    <h3 style="margin-left:10px;font-size:15px">{{$usagers->nom}}</h3>
                </div>
                
                  <h3 style="margin-left:50px;font-size:15px">{{$usagers->mail}}</h3>
                <a href="{{ route('modifusagers.index', [$usagers->id]) }}" style=" margin: auto 0 auto auto;text-decoration: none;"><h3 style=";font-size: 15px;color: rgb(255, 251, 0);">Modifier</h3></a>            
                <form method="POST" action="{{ route('usagers.destroy', [$usagers->id]) }}">
                @csrf
                @method('DELETE')
                    <div style="margin: auto 0 auto auto;text-decoration: none;">
                          <button type="submit" name="submit" style="font-size: 15px;;color:  rgb(255, 0, 0);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden; margin-top:16px ">Supprimer</button>
                      </div>      
                </form>

            </div>
            @endforeach    
      </div>
      
      @endsection