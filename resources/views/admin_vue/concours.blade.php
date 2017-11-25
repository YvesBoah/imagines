<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/table_manage_buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2017 19:41:58 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Managed Tables - Buttons</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link href="assets/css/style.min.css" rel="stylesheet" />
    <link href="assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>


                            {{-- Affichage des Vues cotés Publications --}}

        {{-- Affichage des Vues cotés Publications --}}

<!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin mobile sidebar expand / collapse button -->
                <div class="navbar-header">
                    <a href="{{ route('admins_posts.dashboard') }}" class="navbar-brand"><span class="navbar-logo">
                        <i class="ion-ios-cloud"></i></span> <b>
                        <oo>O</oo><bt>rientation<bt><oo>24</oo></b> Admin</a>
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end mobile sidebar expand / collapse button -->
                
                <!-- begin header navigation right -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('infos_create') }}">
                        <button class="btn btn-primary">Publier Un nouvel Article</button></a></li>
                    <li>
                        <form class="navbar-form full-width">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter keyword" />
                                <button type="submit" class="btn btn-search"><i class="ion-ios-search-strong"></i></button>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle icon">
                            <i class="ion-ios-bell"></i>
                            <span class="label">5</span>
                        </a>
                        
                        <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (8)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="ion-ios-close-empty media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="ion-ios-plus-empty media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="ion-ios-email-outline media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">Voir Plus (+)</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="user-image online">

                                <img 
                                src="avatars/{{ Auth::user()->avatar }}" alt=""  />
                            </span>
                            <span class="hidden-xs">{{Auth::user()->name }}</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="javascript:;">Editer Profile</a></li>
                            <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> link</a></li>
                            <li><a href="javascript:;">Link</a></li>
                            <li><a href="javascript:;">Link</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('admins_posts.logout') }}">Me déconnecter </a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end header navigation right -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <div class="image">
                            <a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            Yves Martial Boah
                            <small>Full stack developer</small>
                        </div>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li class="has-sub active">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="ion-ios-pulse-strong"></i>
                            <span>Tableaux de board</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="active"><a href="{{ route('admins_posts.dashboard') }}">Acceuil Administrateur</a></li>
                        
                        </ul>
                    </li>
                    
                   
                  
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="ion-ios-compose-outline bg-gradient-blue"></i>
                            <span>Evenements</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('infos_create') }}">Créer un évènements</a></li>
                            <li><a href="{{ route('infos_category_create') }}">
                            Créer une Catégorie </a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="ion-ios-calendar-outline bg-pink"></i> <span>Calendrier</span></a></li>
                    
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="ion-ios-albums-outline"></i>
                            <span>vue du site</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('infos_pub') }}">Toutes Les publications</a></li>
                            <li><a href="{{ route('infos_user') }}">Tout Les Utilisateurs</a></li>
                        </ul>
                    </li>
                  
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="ion-ios-heart-outline"></i>
                            <span>Infos Base de données</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('infos_concours') }}">Tables concours</a></li>
                            <li><a href="{{ route('infos_emplois_Admin') }}">Table Offres Emplois</a></li>
                            <li><a href="{{ route('infos_stage_Admin') }}">Table Offres Stage</a></li>
                            
                            
                        </ul>
                    </li>
                  
                
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Cacher La Barre</span></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
     <div class="bg"></div>
<div class="jumbotron">
  <h1  class="text-center">Super Admin </h1>
  <p  style="color:white;" class="lead text-center" id="p">Bienvenue Super Admin</p>
                    <div class="col-md-8 col-md-push-2">
                            @if (session()->has('message'))
                        <br>
                    <div class="alert btn-{{ session()->get('type') }}">
                    <p  class="text-center">  {{ session()->get('message') }}</p>  </div>
                    @endif
                       </div>    
</div>

    {{-- Styles de la page d'Acceuil Super Admin  --}}
        <style type="text/css">
         .error{
        color:red;
        font-weight: bold;
        font-style: italic;
    }
               
           .bg {
  background: url('/images/bg.jpg') no-repeat center center;
  position: fixed;
  width: 100%;
  height: 250px; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;
}

.jumbotron {
  height: 250px;
  color: white;
  text-shadow: #444 0 1px 1px;
  background:transparent;
}
        </style>

{{-- Styles de la page d'Acceuil Super Admin  --}}












        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Tables</a></li>
                <li><a href="javascript:;">Managed Tables</a></li>
                <li class="active">Buttons</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Managed Tables - Buttons <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-2 -->
                <div class="col-md-2">
                    <h5>
                        Key features include:
                    </h5>
                    <ul class="p-l-25 m-b-15">
                        <li>HTML5 export buttons - Copy to clipboard; Save to Excel, CSV and PDF</li>
                        <li>Flash export buttons - Copy to clipboard; Save to Excel, CSV and PDF for older browsers</li>
                        <li>Print view</li>
                        <li>Column visibility buttons</li>
                    </ul>
                    
                </div>
                <!-- end col-2 -->
                <!-- begin col-10 -->
                <div class="col-md-10">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Table Concours</h4>
                        </div>
                        <div class="alert alert-warning fade in">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Date de création</th>
                                        <th>Date de Mise à jour</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($Concours)>0)
                                  @foreach($Concours as $Concour)
                                    <tr class="odd gradeX">
                                        <td>{{$Concour->id}}</td>
                                        <td>{{$Concour->titre_concours}}</td>
                                        <td>{{$Concour->description_concours}}</td>
                                        <td>{{$Concour->created_at}}</td>
                                        <td>{{$Concour->updated_at}}</td>
                                    </tr>
                                   @endforeach
                                    @else
                                    <tr class="odd gradeX">
                                        <p class="lead">Aucun Concours Publié pour le moment</p>
                                    </tr>
                                    @endif
                                    
                                  
                                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->
        
        
        

            {{-- second Tableau --}}
            {{-- second Tableau --}}
            
            {{-- second Tableau --}}
            {{-- second Tableau --}}





        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/table-manage-buttons.demo.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
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
    <script>
        $(document).ready(function() {
            App.init();
            TableManageButtons.init();
        });
    </script>

</body>

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/table_manage_buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2017 19:42:19 GMT -->
</html>
