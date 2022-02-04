
 @extends('layouts.app')   


@section('contenu')
    @if(isset($acteurs))
    <div style="display: flex;" >
          <div class="aff " style="width: 600px; margin: 5%; margin-left: 10%;text-align: left ;">
          <div style="width: 100%;
                        height: 700px;
                        background-position: center;
                        background-image: url('{{$acteurs->photo}}');
                        background-size: cover;" > </div>
          <div style="display: flex;margin-top: 20px">
          @auth
                <a href="{{ route('modifacteurs.index', [$acteurs->id]) }}" style="text-decoration: none;"><h3 style="font-size: 20px;color: rgb(255, 251, 0);">Modifier</h3></a>
                <a href="" style="text-decoration: none;">                
                <form method="POST" action="{{ route('modifacteurs.destroy', [$acteurs->id]) }}">
                @csrf
                @method('DELETE')
                    <div class="margin-top: 4%;" style="margin-top: 22px">
                          <button type="submit" name="submit" style="font-size: 20px;margin-left:30px;color:  rgb(255, 0, 0);background-color: Transparent;
                            background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;  ">Supprimer</button>
                      </div>      
                </form></a>@endauth
                </div>
            
          </div>
          
            <div  style=" min-width: 500px; width: 40%; margin: 5%;">
                <h1 style="font-size: 50px;margin-top: -20px; color: white;" >{{$acteurs->nom_complet}}</h1>
                <div style="margin-top: 30px; display: flex; ">
                    <p style="font-size: 20px;margin-top: -20px;color: rgb(134, 134, 134);">Né en: </p>
                    <p style="font-size: 20px;margin-top: -20px;margin-left: 10px; color: white;">{{$acteurs->naissance}}</p>
                </div>
                <p style="font-size: 20px;margin-left: 20px;margin-top: -10px;color: rgb(139, 139, 139);">description:</p>
                <p style="color: white;margin-top: -20px;">{{$acteurs->description}}</p>
                
                <h3 style="font-size: 20px;margin-left: 20px;margin-top: 30px;color: rgb(139, 139, 139);">Films :</h3>
                <div style="display: flex; ">

                    <div class="box">
                        @foreach($film as $film)
                          <a style="text-decoration: none; " href="{{ route('detailfilm.index', [$film->id]) }}">
                            <div style="width: 130px; ">
                                  <div style="width: 100%;
                                    height: 200px;
                                    background-position: center;
                                    background-image: url('{{$film->img}}');
                                    background-size: cover;" > </div>
                                  <h3 style="font-size: 15px;margin-left: 10px;color: white;">{{$film->titre}}</h3>
                            </div>
                          </a>
                        @endforeach 
                    </div >
            </div>

y      
      <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Films</h1>
          <div class="box">

              
          </div>
      </div>
      @endif
        
  </div>

  @endsection