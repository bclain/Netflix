
 @extends('layouts.app')   


@section('contenu')
    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
            <h1 style="font-size: 50px" id="home">Films</h1>
            @auth<a href="{{ route('ajoutfilm.index') }}" style="text-decoration: none;"><p style="color: rgb(0, 255, 64);margin-left: 20px;font-size: 30px">Ajouter</p></a>
           @endauth   
           <div class="box">

            @foreach($films as $film)
            
              <a style="text-decoration: none" href="{{ route('detailfilm.index', [$film->id]) }}">
              <div style="width: 100%;
                        height: 400px;
                        background-position: center;
                        background-image: url('{{$film->img}}');
                        background-size: cover;" > </div><h4  >{{$film->titre}}</h4></a>
            @endforeach    
          </div>
      </div>
      
      @endsection