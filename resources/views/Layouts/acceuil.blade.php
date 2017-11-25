<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orientation</title>

<!-- Google Fonts -->
<script src="https://use.fontawesome.com/b50ca71981.js"></script>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
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
            <title>Orientation.ci</title>
        @elseif( Request::is( Config::get('chatter.routes.home') . '/' . Config::get('chatter.routes.category') . '/*' ) && isset( $discussion ) )
       <title>{{ $discussion->category->name }} - Orientation.ci</title>
        @elseif( Request::is( Config::get('chatter.routes.home') . '/*' ) && isset($discussion->title))
       <title>{{ $discussion->title }} - Orientation.ci</title>
        @endif

     {{-- renomage de nom pour le forum (titre) --}}
     <!-- ================== BEGIN BASE CSS STYLE CARD ================== -->
 
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" /> 
  <link href="assets/css/style.min.css" rel="stylesheet" />
 
  <!-- ================== END BASE CSS STYLE CARD ================== -->
    

</head>
<body  ng-app="LoadingBarExample" ng-controller="ExampleCtrl">

 


{{-- Styles Navigation --}}

<div class="site-wrapper" style="position: relative;">
  <div class="temp-header">
    <div class="container">
      <div class="row">
        <div class="top-links">
          <div class="col-md-6 pull-left nodisplay">Call: +225 57 86 97 30</div>
          <div class="col-md-6 pull-right text-right">
            <ul class="top-right-list">
            <?php if(!isset(Auth::user()->avatar)){ ?>
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
                  <li class="search-parent"> <a href="javascript:void(0)" title="">&nbsp;&nbsp; <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
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

                           
                      {{-- Rajouts Du Menu En le rendant accessible meme hors logged --}}


           <?php }else{ ?>
            
              
            
              <li><a href="register.html#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="register.html#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="register.html#"><i class="fa fa-google-plus"></i></a></li>
              <li class="last"><a href="register.html#"><i class="fa fa-linkedin"></i></a></li>
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
                  <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
                    <div class="search-box">
                      <div class="content">
                        <div class="form-control">
                          <input type="text" placeholder="Type to search" />
                          <a href="" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                        <a href="" class="close-btn">x</a> </div>
                    </div>
                  </li>
                  <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
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
                    
                    
                    <li> 
                      <a href="#"> {{-- Auth::user()->name --}}  <img id="img_logout" src="avatars/{{ Auth::user()->avatar}}" alt="Users"/></a>
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

                                 {{--    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li> --}}
                               

                            {{-- Partie Que seule l'utilisateur peut voir--}}
                      </ul>
                    </li>

                                  {{-- Fin Menu déroulant 03 --}}

         <?php  } ?>
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
<style>
o{
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

<div class="clearfix"></div>
<div class="header-style1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center animate-in" data-anim-type="zoom-in" data-anim-delay="100">
                <div class="display-t">
                    <div class="display-tc">
                        <h1>Bienvenue à <em><o id="color">O</o>rientation<o id="color">24</o></em></h1>
                   <h2><em>
                    <span
                       class="txt-rotate"
                      data-period="2000"
                      data-rotate='[ "Nous Vous Guidons dans le Choix de votre Futur Carrière Professionnelle", "Nous Sommes Heureux de vous compter parmis nous !","Nous Sommes là Pour vous aidez !"]'>
                    </span></em>
                  </h2>
                    <a href="/login"> <button class="btn btn-primary btn-lg"> <em>Inscrivez Vous !</em></button></a>  
                        <p><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- A propos --}}



{{-- PUBLICATIONS --}}

       {{-- <div class="clearfix"></div> --}}
   
      
       

{{-- PUBLICATIONS --}}


      <div class="section-lg grey-bg m-bottom10">
        <div class="col-md-8 col-md-offset-2 sec-heading text-center">
          <h2><oo>Nos Publications</oo></h2>
          <p class="lead">Nous Vous Guideons dans le choix de votre Futur carrière</p>
        </div>
      </div>
 <div class="container-fluid">

{{--  --}}
<div class="row">
   <div class="col-md-10">
          <div class="row">
            <div class="col-md-12">


  <div class="col-md-6">
    {{-- Carrousel --}}
<br>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/course-1.jpg" alt="">
      <div class="carousel-caption">
        Palais
      </div>
    </div>
    <div class="item">
      <img src="images/course-2.jpg" alt="">
      <div class="carousel-caption">
        Métropolle
      </div>
    </div>
    <div class="item">
      <img src="images/course-2.jpg" alt="">
      <div class="carousel-caption">
        vins
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

{{-- Carrousel --}}
  </div>
  <div class="col-md-6">
    <br>
  <div class="jumbotron">
  <p>Espaces reserver au Mot du DG </p>
</div>
</div>
  </div>
  </div> 
  </div>

  <div class="col-md-2">
      <br>
    <div class="jumbotron">
  <p> Pub </p>
</div>
  </div>
</div>

{{--  --}}



    <div class="row"> 
      <br>
      {{-- ROW PRINCIPALE --}}
       @if(count($events)>0) 
      <div class="col-md-10">
          <div class="row">
            <div class="col-md-12">
       @foreach($events as $event)
     
               <style>
               oo{
                color: grey;
               }
               #taille{
                font-size: 20px;
                color : grey;
               }
                    #img_profile{
                         width:243.53px; 
                                          /*for col 3*/
                        height:180px; 
                       /* width:  297.23px;
                        height:263px; for col 4
                        float:left;*/
                       
                    }
                </style>
        

              <!-- begin col-3 -->
        <div class="col-md-3">
          <!-- begin card -->
          <div class="card">
            <a href="{{ route('events.show', ['event'=>$event->id] ) }}">
              <img class="card-img-top" id="img_profile"  src="../image/{{ $event->avatar }}" alt="Image_de_description" />
            </a>
            <div class="card-block">
              <h4 class="card-title m-t-0 m-b-10">{{ $event->category->titre_category }}</h4>
              <p class="card-text">Posté Par <strong>Admin</strong> le <span class="posted-on">
                      {{ $event->created_at->format('d/m/Y à H:i') }}
                    </span>{{ $event->description_publication }}</p>
              <a href="{{ route('events.show', ['event'=>$event->id] ) }}" class="btn btn-sm btn-primary">En Savoir Plus</a>
            </div>
          </div>
          <!-- end card -->
          </div>
<!-- End col-3 -->
        
          @endforeach

           @else 
           <div class="col-md-4">
          <p class="lead text-center">Aucun évènements publié actuellement !</p>
          </div>
            @endif

                    </div>
               </div>
            {{-- second rows --}}
        </div>

        <div class="col-md-2 col-lg-2 col-sm-4">
          <p class="lead">Je suis une Publicité</p>
        </div>
       {{-- ROW PRINCIPALE --}}

      </div>

        <div class="col-md-3 col-md-push-4">
              {{-- Pagination --}}
              {{$events->links()}}
              {{-- Pagination --}}
        </div>
              
    </div>  {{-- Container Fluid --}}

  </div>   {{-- End section-lg --}}
  {{-- end projects --}}
{{-- Message --}}




 
      
      
      
    
      
      
      








      

      
      
{{-- Footer --}}
<div class="clearfix"></div>
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
          <ul class="footer-links">
            <li><a href="#">Adjamé , Indénier Groupement Sapeur Pompier</a></li>
            <li><a href="#">+225 00 00 00 00</a></li>
            <li><a href="#">E-mail: <a href="#">imagine08@gmail.com</a></a></li>
            <li><a href="#">Nos Developpeurs</a></li>
          </ul>
          <p></p>
          <p></p>
          <p></p>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p class="lead"> <small class="block">&copy; Copyright © 2017 Imagines Studio Tout Droit réservés.</p>
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

{{-- Gestions||Affichages des vues --}}



{{-- Gestions||Affichages des vues --}}





<!-- Scripts -->


<script src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('js')
{{-- Mega Menu --}}
<script type="text/javascript" src="{{ asset('js/megamenu/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/megamenu/js/onepage.js') }}"></script>
{{-- Magnific Popup --}}
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/magnific-popup-options.js') }}"></script>
{{-- Counter --}}
<script type="text/javascript" src="{{ asset('js/aninum/jquery.animateNumber.min.js') }}"></script>

{{-- Animations --}}
<script type="text/javascript" src="{{ asset('js/animations/animations.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/animations/appear.min.js') }}"></script>


{{-- Scroll up --}}
<script type="text/javascript" src="js/totop.js"></script>
<script src="https://use.fontawesome.com/b50ca71981.js"></script>
<script src = "https://use.fontawesome.com/1232352463.js" > </script>
</body>
</html>
