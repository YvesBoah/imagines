<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orientation24</title>

<!-- Google Fonts -->

<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}">
    <link rel="stylesheet"  type="text/css" href="css/et-line-font/et-line-font.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet"  type="text/css" href="css/magnific-popup.css">
    <!-- Responsive Devices Styles -->
    <link rel="stylesheet"  type="text/css" href="css/responsive-leyouts.css">

    <link rel="stylesheet"  type="text/css" href="{{ asset('css/screen.css') }}">
    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('js/megamenu/stylesheets/screen.css') }}">
    <link rel="stylesheet"  type="text/css" href="{{ asset('js/animations/css/animations.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/family.css') }}">
    
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/loading-bar.css') }}">

{{-- chargement des sources Turbolink --}}

<!-- angular -->
    <script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/angular-animate.min.js') }}"></script>
    <!-- loading bar -->

    <script type="text/javascript" src="{{ asset('js/loading-bar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/TURBO.js') }}"></script>

    {{-- chargement des sources Turbolink --}}

    {{-- chargement des sources du Chatter --}}
        @yield('css')
    {{-- chargement des sources du Chatter --}}

     {{-- chargement des sources supplémentaires du Chatter changement de vue --}}

        @if(Request::is( Config::get('chatter.routes.home') ) || Request::is( Config::get('chatter.routes.home') . '/*' ))
                    <!-- LINK TO YOUR CUSTOM STYLESHEET -->
             <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        @endif

     {{-- chargement des sources supplémentaires du Chatter changement de vue --}}


    {{-- renomage de nom pour le forum (titre) --}}

         @if( Request::is( Config::get('chatter.routes.home')) )
            <title>Orientation24</title>
        @elseif( Request::is( Config::get('chatter.routes.home') . '/' . Config::get('chatter.routes.category') . '/*' ) && isset( $discussion ) )
       <title>{{ $discussion->category->name }} - Orientation24</title>
        @elseif( Request::is( Config::get('chatter.routes.home') . '/*' ) && isset($discussion->title))
       <title>{{ $discussion->title }} - Orientation24</title>
        @endif

     {{-- renomage de nom pour le forum (titre) --}}
    

{{-- Admin template sources --}}
<!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/theme/default.css') }}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/screen.css') }}">
    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('js/megamenu/stylesheets/screen.css') }}">
     <link rel="stylesheet" href="{{ asset('css/family.css') }}">
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
<style>
oo{
    color:orange;
}
bt{
    color:grey;
}
    .error{
        color:red;
        font-weight: bold;
        font-style: italic;
    }
</style>
   
</head>

{{-- Admin template sources --}}




<body class="pace-top"  ng-app="LoadingBarExample" ng-controller="ExampleCtrl">



{{-- Styles Navigation --}}

<div class="site-wrapper" style="position:relative; width: 100%" >
  <div class="temp-header">
    <div class="container">
      <div class="row">
        <div class="top-links">
          <style type="text/css">
           o{
            color :orange;
           }
           btp{
            color :white;
           }
            #clair{
              color: white;
            }
          </style>
            <p id="clair" class="lead text-info text-center"><em><o>O</o><btp>rientation</btp><o>24</o> <btp>Un Avenir Plus Que Sûre !</btp></em></p>
          <div class="col-md-6 pull-left nodisplay">Call: +225 57 86 97 30</div>
          <div class="col-md-6 pull-right text-right">
            <ul class="top-right-list">
              {{-- Condittions De Connection --}}
                @guest
             <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Connection</a></li>
              <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span>  Inscription</a> |</li>

                              {{-- Rajouts Du Menu En le rendant accessible meme hors logged --}}
              
            
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="header-section transparent style1 pin-style">
      <div class="container">
        <div class="mod-menu">
          <div class="row">
             <div class="col-sm-2"> <a href="" title="" class="logo"> <img style="width: 160px;" src="images/o24.png" alt=""> </a> </div>
            <div class="col-sm-10">
              <div class="main-nav">
                <ul class="nav navbar-nav top-nav">
                  <li class="search-parent"> <a href="javascript:void(0)" title=""> &nbsp;&nbsp; <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <div class="search-box">
                      <div class="content">
                        <div class="form-control">
                          <input type="text" placeholder="Type to search" />
                          <a href="" class="search-btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> </div>
                        <a href="#" class="close-btn">x</a> </div>
                    </div>
                  </li>
                  <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <span class="glyphicon glyphicon-list"></a> </li>
                </ul>
                <div id="menu" class="collapse">

                       {{-- Nav --}}
                  <ul class="nav navbar-nav">

                          {{-- Principale --}}

                    <li><a href="{{ route('infos_acceuil') }}"><span class="glyphicon glyphicon-user"></span> Acceuil</a></li>

                   {{-- Start Menu déroulant 01 --}}

                    <li><a href="#"><span class="glyphicon glyphicon-education"> Orientation</a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                       <li><a href="{{ route('infos_filieres') }}"><span class="glyphicon glyphicon-leaf"> Filieres</a></li>
                            <li><a href="{{ route('infos_ecole') }}"><span class="glyphicon glyphicon-education"></span> Ecole</a></li>
                      </ul>
                    </li>  
                                 {{--Fin Menu déroulant 01 --}}
                       
                                  {{--Start Menu déroulant 02 --}}

                    <li><a href="#"><span class="glyphicon glyphicon-education"> Job</a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                      <li><a href="{{ route('infos_stage') }}"><span class="glyphicon glyphicon-tag"> Stage</a></li>
                            <li><a href="{{ route('infos_emplois') }}"><span class="glyphicon glyphicon-euro"> Emplois</a></li>
                              <li><a href="{{ route('infos_indexe') }}"><span class="glyphicon glyphicon-euro"> Tout les évènements</a></li>
                      </ul>
                    </li>
                                   {{-- Fin Menu déroulant 02 --}}


                    <li><a href="{{ route('infos_news') }}"><span class="glyphicon glyphicon-new-window"></span> Actualites</a></li>
                    <li><a href="{{ route('infos_concours') }}"><span class="glyphicon glyphicon-certificate"></span> Concours</a></li>
      <li><a href="{{ url('/forums') }}"><span class="glyphicon glyphicon-user"></span> Forums</a></li>

                            {{-- Principale --}}

                           
                      {{-- Rajouts Du Menu En le rendant accessible meme hors logged --}}
                  @else
               {{-- Condittions De Connection --}}
               
              <!-- <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
              <li><a href="register.html"><i class="fa fa-user"></i> Register</a> | </li> -->
              <li><a href=""><i class="fa fa-facebook"></i></a></li>
              <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li class="last"><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="header-section transparent style1 pin-style">
      <div class="container">
        <div class="mod-menu">
          <div class="row">
           <div class="col-sm-2"> <a href="" title="" class="logo"> <img style="width: 160px;" src="images/o24.png" alt=""> </a> </div>
            <div class="col-sm-10">
              <div class="main-nav">
                <ul class="nav navbar-nav top-nav">
                  <li class="search-parent"> <a href="javascript:void(0)" title="">&nbsp;&nbsp;<span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <div class="search-box">
                      <div class="content">
                        <div class="form-control">
                          <input type="text" placeholder="Type to search" />
                          <a href="" class="search-btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a> </div>
                        <a href="#" class="close-btn">x</a> </div>
                    </div>
                  </li>
                  <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <span class="glyphicon glyphicon-th"></span> </a> </li>
                </ul>
                <div id="menu" class="collapse">

                       {{-- Nav --}}
                  <ul class="nav navbar-nav">

                          {{-- Principale --}}

                    <li><a href="{{ route('infos_acceuil') }}"><span class="glyphicon glyphicon-user"></span> Acceuil</a></li>

                   {{-- Start Menu déroulant 01 --}}

                    <li><a href="#"><span class="glyphicon glyphicon-education"> Orientation</a>
                       <span class="arrow"></span>
                      <ul class="dm-align-2">
                       <li><a href="{{ route('infos_filieres') }}"><span class="glyphicon glyphicon-leaf"> Filieres</a></li>
                            <li><a href="{{ route('infos_ecole') }}"><span class="glyphicon glyphicon-education"></span> Ecole</a></li>
                      </ul>
                    </li>  
                                 {{--Fin Menu déroulant 01 --}}
                 
                                  {{--Start Menu déroulant 02 --}}

                    <li><a href="#"><span class="glyphicon glyphicon-education"> Job</a>
                       <span class="arrow"></span>
                      <ul class="dm-align-2">
                      <li><a href="{{ route('infos_stage') }}"><span class="glyphicon glyphicon-tag"> Stage</a></li>
                            <li><a href="{{ route('infos_emplois') }}"><span class="glyphicon glyphicon-euro"> Emplois</a></li>
                              <li><a href="{{ route('infos_indexe') }}"><span class="glyphicon glyphicon-euro"> Tout les évènements</a></li>
                      </ul>
                    </li>
                                   {{-- Fin Menu déroulant 02 --}}


                    <li><a href="{{ route('infos_news') }}"><span class="glyphicon glyphicon-new-window"></span> Actualites</a></li>
                    <li><a href="{{ route('infos_concours') }}"><span class="glyphicon glyphicon-certificate"></span> Concours</a></li>
      <li><a href="{{ url('/forums') }}"><span class="glyphicon glyphicon-user"></span> Forums</a></li>
    
                            {{-- Principale --}}
                  
                                  {{--Start Menu déroulant 03 --}}
                    
                    <li> <a href="#"> {{-- Auth::user()->name --}} 
                        <img id="img_logout" src="avatars/{{ Auth::user()->avatar}}" alt="Users"/></a>
                         <span class="arrow"></span>

                       {{-- Image et style pour la barre de navigation --}}

                                
                                <style>
                                    #drop_link
                                    {
                                        position: relative;
                                        padding-left: 50px;
                                    }
                                    #img_logout
                                    {
                                        width:32px;
                                        height:32px;
                                        position: absolute;
                                        /*left:52px;*/
                                        top: 20px;
                                        border-radius:75%;
                                    }
                                </style>
                                 {{-- Image et style pour la barre de navigation --}}
                      <ul class="dm-align-2">
                         <li><a href="{{ route('infos_profil') }}"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact Nous</a></li>
                         <li><a href="{{ route('edit') }}"><span class="glyphicon glyphicon-pencil"></span> Edit Profil</a></li>
                          <li><a href="{{ route('user.logout') }}"><span class="glyphicon glyphicon-log-out"></span> Me déconnectez</a></li>
                          
                                   {{--  <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a> 

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li> --}}
                                    @endguest

                            {{-- Partie Que seule l'utilisateur peut voir--}}
                      </ul>
                    </li>

                                  {{-- Fin Menu déroulant 03 --}}
                  </ul>
                  {{-- Nav --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
    </div>
    <!--end menu--> 
  </div>

{{-- Styles Navigation --}}



{{-- A propos --}}


<div class="clearfix"></div>
<div class="header-style00">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center animate-in" data-anim-type="zoom-in" data-anim-delay="100">
                <div class="display-t">
                    <div class="display-tc">
                        <h1></em></h1>
                        <h2></h2>
                       <br>  <br>  <br><br>  <br><br>  <br><br>
<br>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- A propos --}}


    


<a href="index.html#" class="scrollup"></a> 

{{-- Scroll Up --}}

{{-- Gestions||Affichages des vues --}}

 @yield('content_forums')
  @yield('content')
@yield('contenu_actualites')
@yield('contenu_concours')
@yield('contenu_connection')
@yield('contenu_ecole')
@yield('contenu_emplois')
@yield('contenu_filieres')
@yield('contenu_forum')
@stack('contenu_inscription')
@stack('contenu_stage')
@stack('contenu_profil')
@stack('content-show')

{{-- Gestions||Affichages des vues --}}


<br>
<br><br>
<br><br>
<br>


{{-- Footer --}}
<div class="clearfix"></div>
<br> <br> <br> <br> <br><br> <br> <br> <br> <br>
  <footer id="footer">
    <div class="container">
      <div class="row row-pb-md">
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>E-School</h4>
          <ul class="footer-links">
            <li><a href="index.html#">Course</a></li>
            <li><a href="index.html#">Blog</a></li>
            <li><a href="index.html#">Contact</a></li>
            <li><a href="index.html#">Social Media</a></li>
            <li><a href="index.html#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Useful Links</h4>
          <ul class="footer-links">
            <li><a href="index.html#">Held Desk</a></li>
            <li><a href="index.html#">Facilities</a></li>
            <li><a href="index.html#">Testimonials</a></li>
            <li><a href="index.html#">Student Support</a></li>
            <li><a href="index.html#">Terms &amp; Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Our Course</h4>
          <ul class="footer-links">
            <li><a href="index.html#">Advertise</a></li>
            <li><a href="index.html#">Marketing</a></li>
            <li><a href="index.html#">Visual Assistant</a></li>
            <li><a href="index.html#">System Analysis</a></li>
            <li><a href="index.html#">Web Development</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 footer-widget">
          <h4>Legal</h4>
          <ul class="footer-links">
            <li><a href="index.html#">API</a></li>
            <li><a href="index.html#">Advertise</a></li>
            <li><a href="index.html#">Teams</a></li>
            <li><a href="index.html#">Find Designers</a></li>
            <li><a href="index.html#">Find Developers</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-4 footer-widget">
          <h4>Infos Contact </h4>
          <p>Adjamé , Indénier Groupement Sapeur Pompier</p>
          <p>+225 00 00 00 00</p>
          <p><b>E-mail:</b> <a href="#">imagine08@gmail.com</a></p>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p class="lead"> <small class="block">&copy; Copyright © 2017 Imagine Studio Tout Droit réservés.</p>
          <p>
          <ul class="social-icons">
            <li><a href="index.html#"><i class="icon-twitter"></i></a></li>
            <li><a href="index.html#"><i class="icon-facebook"></i></a></li>
            <li><a href="index.html#"><i class="icon-linkedin"></i></a></li>
            <li><a href="index.html#"><i class="icon-dribbble"></i></a></li>
            <li><a href="index.html#"><i class="icon-googleplus"></i></a></li>
            <li><a href="index.html#"><i class="icon-rss"></i></a></li>
          </ul>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->
  <div class="clearfix"></div>
</div>
<!-- end site wrapper--> 
{{-- Footer --}}

{{-- Scroll Up --}}

<a href="index.html#" class="scrollup"></a> 

{{-- Scroll Up --}}


<!-- Scripts -->
 <script src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
{{-- Mega Menu --}}
<script type="text/javascript" src="{{ asset('js/megamenu/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/megamenu/js/onepage.js') }}"></script>
 
<!-- Scripts -->





{{-- Animations --}}
<script type="text/javascript" src="{{ asset('js/animations/animations.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/animations/appear.min.js') }}"></script>



{{-- Scroll up --}}
<script type="text/javascript" src="js/totop.js"></script>
<script src="https://use.fontawesome.com/b50ca71981.js"></script>
<script src = "https://use.fontawesome.com/1232352463.js" > </script>
@include('flashy::message')

{{-- @include('flashy::message') --}}

{{-- Admn source templates --}}
<!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/plugins/jquery/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    
    <!-- ================== END PAGE LEVEL JS ================== -->
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    
   
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/apps.min.js') }}"></script>

    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>

<script type="text/javascript">
        
var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});

    </script>






@yield('js')
   
</body>
</html>
{{-- Admn source templates --}}