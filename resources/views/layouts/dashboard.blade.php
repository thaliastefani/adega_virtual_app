<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_img"><img src="https://i.imgur.com/hczKIze.jpg" alt=""></div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
          <div>
            <a href="#" class="nav_logo">
              <img src="/images/nav_logo_icon.svg" alt=""><span class="nav_logo-name">ADEGA VIRTUAL</span>
            </a>
            <div class="nav_list">
              <a href="#" class="nav_link">
                <i class='bx bx-user nav_icon'></i> <span class="nav_name">Perfil</span>
              </a>
              <a href="/ficha_degustacoes" class="nav_link">
                <img src="/images/degustacao_logo.svg" alt=""><span class="nav_name">Degustações</span>
              </a>
              <a href="/vinhos" class="nav_link">
                <img src="/images/adega_logo.svg" alt=""><span class="nav_name">Minha Adega</span>
              </a>
              <a href="#" class="nav_link">
                <img src="/images/descoberta_logo.svg" alt=""><span class="nav_name">Descobertas da Enocultura</span>
              </a>
              <a href="{{ route('logout') }}" class="nav_link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </div>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-500 bg-light">
        <h4>@yield('content')</h4>
    </div>
    <!--Container Main end-->
</body>
</html>