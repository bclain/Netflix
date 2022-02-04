
 @extends('layouts.app')   


@section('contenu')

    
    <section class="main-container" >
      <div class="location" id="home">
            <h1 style="font-size: 50px" id="home">Acteurs</h1>
            @auth<a href="{{ route('ajoutacteurs.index') }}" style="text-decoration: none;"><p style="color: rgb(0, 255, 64);margin-left: 20px;font-size: 30px">Ajouter</p></a>
           @endauth
          <div class="box">

            @foreach($acteurs as $acteurs)
            
              <a style="text-decoration: none" href="{{ route('detailacteurs.index', [$acteurs->id]) }}">
              <div style="width: 100%;
                        height: 400px;
                        background-position: center;
                        background-image: url('{{$acteurs->photo}}');
                        background-size: cover;" > </div><h4  >{{$acteurs->nom_complet}}</h4></a>
            @endforeach    
          </div>
      </div>
      
  
@endsection