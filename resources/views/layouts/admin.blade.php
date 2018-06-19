<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- Website theme color -->
    <meta name="theme-color" content="#333">

    <!-- Website desc -->
    <title>Admin / {{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Facebook meta tags -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">

    <!-- Twitter meta tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">
    <meta name="twitter:url" content="http://example.com/page.html">
    <meta name="twitter:title" content="Content Title">
    <meta name="twitter:description" content="Content description less than 200 characters">
    <meta name="twitter:image" content="http://example.com/image.jpg">

    <!-- Google Plus meta tags -->
    <link href="https://plus.google.com/+YourPage" rel="publisher">
    <meta itemprop="name" content="Content Title">
    <meta itemprop="description" content="Content description less than 200 characters">
    <meta itemprop="image" content="http://example.com/image.jpg">

    <link rel="dns-prefetch" href="https://ssl.google-analytics.com/">
    <link rel="dns-prefetch" href="//connect.facebook.net">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/zwlogo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/zwlogo.png') }}" type="image/x-icon">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.css') }}">
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="content-collapse">
    <div id="app">
        <nav>
            <!-- zwcms logo -->
            <img src="{{ asset('img/zwlogo.png') }}" width="40" height="40" class="rounded" alt="zwlogo.png">
            <!-- end zwcms logo -->
            @auth
            @foreach($websitesettings as $websitesetting)
            <a href="{{ url('/admin/home') }}">
                <h1>{{ $websitesetting->website_name }}</h1>
            </a>
            @endforeach
            <!-- end website name -->
            <aside class="clearfix">
                <!-- aside items -->
                <ul class="clearfix">
                    <!-- dashboard -->
                    <li class="{{ Request::is('admin/home*') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="aside__link" title="{{ __('Dashboard') }}">
                            <i class="fa fa-tachometer-alt"></i>
                        </a>
                    </li>
                    <!-- banners -->
                    <li class="{{ Request::is('admin/banners*') ? 'active' : '' }}">
                        <a href="{{ route('banners') }}" class="aside__link" title="{{ __('Banners Home') }}">
                            <i class="fas fa-images"></i>
                        </a>
                    </li>
                    <!-- templates -->
                    <li class="{{ Request::is('admin/templates*') ? 'active' : '' }}">
                        <a href="{{ route('templates') }}" class="aside__link" title="{{ __('Páginas') }}">
                            <i class="far fa-file-alt"></i>
                        </a>
                    </li>
                    <!-- blog -->
                    <li class="{{ Request::is('admin/blog*') ? 'active' : '' }}">
                        <a href="{{ route('blog') }}" class="aside__link" title="{{ __('Blog') }}">
                            <i class="fab fa-blogger-b"></i>
                        </a>
                    </li>
                    @if($websitesettings[0]->website_mode_store)
                    <!-- costumers -->
                    <li class="{{ Request::is('admin/costumers*') ? 'active' : '' }}">
                        <a href="{{ route('costumers') }}" class="aside__link" title="{{ __('Clientes') }}">
                            <i class="fas fa-users"></i>
                        </a>
                    </li>
                    @endif
                    <!-- products -->
                    <li class="{{ Request::is('admin/products*') ? 'active' : '' }}">
                        <a href="{{ route('products') }}" class="aside__link" title="{{ __('Produtos') }}">
                            <i class="fas fa-dollar-sign"></i>
                        </a>
                    </li>
                    @if($websitesettings[0]->website_mode_store)
                    <!-- discounts -->
                    <li class="{{ Request::is('admin/discounts*') ? 'active' : '' }}">
                        <a href="{{ route('discounts') }}" class="aside__link" title="{{ __('Discontos') }}">
                            <i class="fas fa-percent"></i>
                        </a>
                    </li>
                    <!-- orders -->
                    <li class="{{ Request::is('admin/orders*') ? 'active' : '' }}">
                        <a href="{{ route('orders') }}" class="aside__link" title="{{ __('Encomendas') }}">
                            <i class="fas fa-cubes"></i>
                        </a>
                    </li>
                    <!-- shipping -->
                    <li class="{{ Request::is('admin/shipping*') ? 'active' : '' }}">
                        <a href="{{ route('shipping') }}" class="aside__link" title="{{ __('Envios') }}">
                            <i class="fas fa-shipping-fast"></i>
                        </a>
                    </li>
                    <!-- notifications -->
                    @endif
                    <li class="{{ Request::is('admin/notifications*') ? 'active' : '' }}">
                        <a href="{{ route('notifications') }}" class="aside__link" title="{{ __('Notificações') }}">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </li>
                </ul>
            </aside>
            <a href="{{ route('settings') }}" class="definitions-btn {{ Request::is('admin/settings*') ? 'active' : '' }}" title="{{ __('Definições') }}">
                Definições
            </a>
            <div class="user-top-bar">
                <div class="user-top-bar__info">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                </div>
                <ul class="user-top-bar__links">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            @endif
        </nav>
        <main>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif 
            @yield('content')
        </main>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8"><div class="fright">Developed by <a target="_blank" title="Developed by José Nogueira" href="http://www.josenogueira.com">josenogueira</a></div></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>

    <script src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('js/matchHeight.js') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script>
        var image_upload = '{{ route("upload_images") }}';
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>