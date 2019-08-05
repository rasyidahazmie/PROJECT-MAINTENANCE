
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

  <meta charset="utf-8">
  <title>Maintenace of the Computer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="{{ asset('js/Chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/Chart.js/samples/utils.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap-toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap-toastr/toastr-rtl.css') }}" />

    <script src="{{ asset('jquery/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('dist/sweetalert2.js') }}"></script>
    <script src="{{ asset('bootstrap-toastr/toastr.js') }}"></script>

</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-dark" style="height: 70px; box-shadow: 5px 3px 10px #aaaaaa; background-color: #ffffff8f; position: fixed; width: 100%; z-index: 400;">
            <div class="container ">
                <a href="{{ url('/') }}"><img src="{{ asset('themes/img/logo_1.png') }}" alt="" width="230px"  class="logo" /></a>

                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav " id="ul_formedit" style="display: none;">
                        <a class="nav-link" href="{{ url('/formedit') }}" style="color: #460f0f;"><b>Form Edit</b></a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_pcview" style="display: none;">
                        <a class="nav-link" href="{{ url('/pcview') }}" style="color: #460f0f;"><b>PC View</b></a>   
                    </ul>
                    <ul class="navbar-nav " id="ul_users" style="display: none;">
                        <a class="nav-link" href="{{ url('/users') }}" style="color: #460f0f;"><b>Users</b></a>   
                    </ul> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: #460f0f;"><b>{{ __('Login') }}</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="color: #460f0f;"><b>{{ __('Register') }}</b></a>
                            </li>
                        @else
                            <li class="nav-item ">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #460f0f;"><b>
                                    {{ Auth::user()->name }} </b><span class="caret"></span>
                                </a>      </li>                         

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #460f0f;">
                                        <b>{{ __('Logout') }}</b>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            
                        @endguest
                    </ul>
                </div>
            </div> 
        </nav> 
    <!-- end header -->
    <section id="featured" style=" padding-top: 70px; z-index: 500;">
            <div class="container ">
                @yield('content')
            </div>
    </section>
  </div>
  <footer>
  <div id="sub-footer" style="background: #101010; padding: 100px 0 0 0; color: #bbb;">
      </div>
      <div id="sub-footer" style="background: #0a0a0a; padding: 50px 0 0 0; color: #bbb;">
      </div>
    </footer>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->



  <!-- Template Custom JavaScript File -->
  <!-- <script src="{{ asset('themes/js/custom.js') }}"></script> -->

  <script src="{{ URL::to('/') }}/" defer></script>  
</body>
</html>
