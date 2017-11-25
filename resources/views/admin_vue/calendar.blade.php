<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2017 19:43:23 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Calendar</title>
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
	<link href="assets/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" media='print' />
	<link href="assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	
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
                                src="avatars/{{ Auth::user()->avatar}}" alt=""  />
                            </span>
                            <span class="hidden-xs">{{Auth::user()->name }}</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="{{ route('edit_Admin') }}">Editer Profile</a></li>
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
                    <li><a href="{{ route('infos_calendar') }}"><i class="ion-ios-calendar-outline bg-pink"></i> <span>Calendrier</span></a></li>
                    
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
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
		    <!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Calendar</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Calendar <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			<!-- begin panel -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Calendar</h4>
			    </div>
			    <div class="panel-body p-0">
			        <div class="vertical-box">
			            <div class="vertical-box-column p-15 bg-silver width-200">
                            <div id="external-events" class="fc-event-list">
                                <h5 class="m-t-0 m-b-10">Draggable Events</h5>
                                <div class="fc-event" data-color="#00acac"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-success"></i></div> Meeting with Client</div>
                                <div class="fc-event" data-color="#348fe2"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-primary"></i></div> IOS App Development</div>
                                <div class="fc-event" data-color="#f59c1a"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-warning"></i></div> Group Discussion</div>
                                <div class="fc-event" data-color="#ff5b57"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-danger"></i></div> New System Briefing</div>
                                <div class="fc-event"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-inverse"></i></div> Brainstorming</div>
                                <h5 class="m-t-20 m-b-10">Other Events</h5>
                                <div class="fc-event" data-color="#b6c2c9"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-muted"></i></div> Other Event 1</div>
                                <div class="fc-event" data-color="#b6c2c9"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-muted"></i></div> Other Event 2</div>
                                <div class="fc-event" data-color="#b6c2c9"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-muted"></i></div> Other Event 3</div>
                                <div class="fc-event" data-color="#b6c2c9"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-muted"></i></div> Other Event 4</div>
                                <div class="fc-event" data-color="#b6c2c9"><div class="fc-event-icon"><i class="fa fa-circle-o fa-fw text-muted"></i></div> Other Event 5</div>
                            </div>
                        </div>
                        <div id="calendar" class="vertical-box-column p-15 calendar"></div>
			        </div>
			    </div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="ion-ios-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-green" data-theme="green" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="ion-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/fullcalendar/lib/moment.min.js"></script>
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
	<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/calendar.demo.min.js"></script>
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
			Calendar.init();
		});
	</script>

</body>

<!-- Mirrored from seantheme.com/color-admin-v3.0/admin/apple/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2017 19:43:27 GMT -->
</html>
