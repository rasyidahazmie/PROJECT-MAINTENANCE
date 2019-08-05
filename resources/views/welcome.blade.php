
<html lang="{{ app()->getLocale() }}">
    <head>
      
  <meta charset="utf-8">
  <title>Maintenace of the Computer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('themes/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/jcarousel.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{ asset('themes/skins/default.css') }}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('themes/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('themes/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('themes/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('themes/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href="{{ asset('themes/ico/favicon.png') }}" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>About me <i class="icon-phone"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/formedit') }}" ><i class="icon-user"></i> Home</a></li>
                            <li><a href="{{ route('logout') }}" data-toggle="modal" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                            </form>
                            
                        @else
                            <li><a href="#mySignup_1" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                            <li><a href="#mySignin_1" data-toggle="modal">Sign in</a></li>
                        @endauth
                    @endif
                
              </ul>
            </div>            
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="{{ url('/') }}"><img src="{{ asset('themes/img/logo_1.png') }}" alt="" width="230px"  class="logo" /></a>
            </div>
          </div>
            </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="{{ asset('themes/img/slides/nivo/bg-1.jpg') }}" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="{{ asset('themes/img/slides/nivo/bg-2.jpg') }}" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="{{ asset('themes/img/slides/nivo/bg-3.jpg') }}" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>You can <strong>See</strong></h2>
                  <p>
                    Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>You can <strong>Input</strong></h2>
                  <p>
                    Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Inpute <strong>Maintenance of PC</strong></h2>
                  <p>
                    Lorem ipsum dolor sit amet nsectetuer nec Vivamus. Curabitu laoreet amet eget. Viurab oremd ellentesque ameteget. Lorem ipsum dolor sit amet nsectetuer nec vivamus.
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    
    <footer>
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
                                <strong>Flattern studio, Pte Ltd</strong><br>
                                 Springville center X264, Park Ave S.01<br>
                                 Semarang 16425 Malaysia
                            </address>
              <p>
                <i class="icon-phone"></i> <br>
                <i class="icon-envelope-alt"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  
                  Designed by <a href="https://bootstrapmade.com/">laravel (ZaiJu & ZanaRashid)</a>
                </div>
              </div>
            </div>
            <div class="span6">
                <h3>E-Penyelenggaraan</h3>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('themes/js/jquery.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('themes/js/bootstrap.js') }}"></script>
  <script src="{{ asset('themes/js/jcarousel/jquery.jcarousel.min.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.fancybox-media.js') }}"></script>
  <script src="{{ asset('themes/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('themes/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('themes/js/portfolio/setting.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.nivo.slider.js') }}"></script>
  <script src="{{ asset('themes/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.ba-cond.min.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.slitslider.js') }}"></script>
  <script src="{{ asset('themes/js/animate.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('themes/js/custom.js') }}"></script>
    </body>

        <!-- Sign in Modal -->
            <div id="mySignin_1" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                  @csrf

                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20"> 
                      Forgot password? <a href="#myReset_1" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
             <!-- Signup Modal -->
            <div id="mySignup_1" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                  @csrf
                  <div class="control-group">
                    <label class="control-label" >Name</label>
                    <div class="controls">
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>
                  <input type="hidden" name="authority" value="Client" />
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Reset Modal -->
            <div id="myReset_1" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->

</html>


