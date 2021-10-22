<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--JS Modal -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
        <!-- Fonte Goole -->
        <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    
         <!-- CSS Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

         <!-- CSS Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">

        <script src="https://kit.fontawesome.com/a206d5de13.js" crossorigin="anonymous"></script>

        <script src="/js/scripts.js"></script>

        <!-- Icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
    </head>
        <body>
            <header>
                <div id="mae">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="colappse navbar-collapse" id="navbar">
                            <a href="/" class="navbar-brand">
                                <img src="/img/logo.png" alt="">
                            </a>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/guardioes" class="nav-link">Gardiões</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/timedesucesso" class="nav-link">Time de Sucesso</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin" class="nav-link">Administração</a>
                                </li>
                            

                            </ul>       
                        </div>
                    </nav>
                </div>
            </header>
        

            <main>
                <div class="container-fluid">
                    <div class="row">
                        @if(session('msg'))
                            <p class="msg">{{session('msg')}}</p>
                            
                        @endif 
                        @yield('content')   
                    </div>

                </div>
            </main>
        </body>
</html>