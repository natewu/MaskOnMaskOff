<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('title')

    <link rel="icon" href="{{asset('storage/siteimg/PrettyMask1.jpg')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500;600;700&family=Yaldevi:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
    <!--Thinking about making a page to comment on teachers, what do you think?-->
    <!--Made with Powershell, XML, SQL, VueJS, Apache, Laravel, and NodeJS -->
<body>
    <div style="background: gold;">
        <nav class="header-padding navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logoname" href="/">MaskOnMaskOff</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/submit">submit</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/rankings">rankings</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/about">about</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    
    <div id="app">
        <div class="page-margins">
            @yield('page-content')
        </div>
        <quote></quote>
    </div>
    
</body>
</html>