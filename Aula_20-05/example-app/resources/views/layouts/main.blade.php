<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

  

    <!-- fontes do google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- icons -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      <!-- css da aplicacao -->
      <link rel="stylesheet" href="/css/styles.css">
      <script src="js/scripts.js"></script>


</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Main</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                @endif
                <p class="msg">{{session('msg')}}</p>
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>ISA TORRES &copy; 2022</p>
    </footer>
</body>


</html>
