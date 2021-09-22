<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>



        <!-- Fonte Goole -->
        <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    
         <!-- CSS Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

         <!-- CSS Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">

        <script src="https://kit.fontawesome.com/a206d5de13.js" crossorigin="anonymous"></script>

        <script src="/js/scripts.js"></script>
        
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
        

        <div id="leftContent">
            @yield('content')


        </div>
       
        
    
        
        </body>

        
        
        

</html>