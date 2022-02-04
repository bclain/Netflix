<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Netflix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <link rel="stylesheet" href="{{ asset('style.css')}}" type="text/css" media="all" />
</head>
<body>


    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="{{ route('accueil.index') }}">Accueil</a>
        <a href="{{ route('acteurs.index') }}">Acteurs</a>    
@auth   <a href="{{ route('usagers.index') }}">Usagers</a>   @endauth
      </nav>
      <nav class="sub-nav">
      
       
      
            
      
    @if (Auth::guest())
    <a href="{{ route('connexion.index') }}">Se connecter</a> 
      
    @else
    {{ Auth::user()->name }}
    <a href="{{ route('connexion.logout') }}">Deconnexion</a> 
    @endif
      </nav>      
    </header>

    @if(session()->has('message'))
<!-- on fait la mise en forme de notre choix -->
    <div class="alert" style="margin-top: 50px;padding: 15px;background-color: green;color: white;">
    <span class="closebtn" style="margin-left: 15px;color: white; font-weight: bold; float: right; font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s" onclick="this.parentElement.style.display='none';">&times;</span> 
    <strong>{{ session()->get('message') }}</strong> 
    </div>
@endif
 
@if(session()->has('errors'))

    <div class="alert" style="margin-top: 50px;padding: 15px;background-color: #f44336;color: white;">
    <span class="closebtn" style="margin-left: 15px;color: white; font-weight: bold; float: right; font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s" onclick="this.parentElement.style.display='none';">&times;</span> 
    <strong> {{ session()->get('errors')}}</strong> 
  </div>
@endif

    @yield('contenu')

    </body>

</html>