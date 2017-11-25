@extends('Layouts/admin-post-control')

@section('content-Admin')




<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Acceuil</a></li>
        <li class="active"><a href="javascript:;">Dashboard</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Dashboard <small>Back Office Super Admin</small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">

        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-white text-inverse">
                <div class="stats-icon stats-icon-lg stats-icon-square bg-gradient-blue"><i class="ion-ios-analytics-outline"></i></div>
                <div class="stats-title">Visite D'aujourd'hui</div>
                <div class="stats-number">7,842,900</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 70.1%;"></div>
                </div>
                <div class="stats-desc">Environ (70.1%)</div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-white text-inverse">
                <div class="stats-icon stats-icon-lg stats-icon-square bg-gradient-blue"><i class="ion-ios-pricetags-outline"></i></div>
                <div class="stats-title">Etablissement Partenaires</div>
                <div class="stats-number">{{ $Ecoles->count() }}</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 40.5%;"></div>
                </div>
                <div class="stats-desc">Environ ({{ $Ecoles->count()/.5 }}%)</div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-white text-inverse">
                <div class="stats-icon stats-icon-lg stats-icon-square bg-gradient-blue"><i class="ion-ios-cart-outline"></i></div>
                <div class="stats-title"><b>Catégories</b> </div>
                <div class="stats-number">{{ $categories->count() }}</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 76.3%;"></div>
                </div>
                <div class="stats-desc">Environ ({{ $categories->count()/.5 }}%)</div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-white text-inverse">
                <div class="stats-icon stats-icon-lg stats-icon-square bg-gradient-blue"><i class="ion-ios-chatboxes-outline"></i></div>
                <div class="stats-title">Nombres d'Articles Publier </div>
                <div class="stats-number">{{ $Compteur_events->count() }}</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 54.9%;"></div>
                </div>
                <div class="stats-desc">Environ ({{ $Compteur_events->count()/.5 }}%)</div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->
    
    {{-- Ok --}}
    {{-- Ok --}}


    <!-- begin row -->
    <div class="row">
        <div class="col-md-8">
            <div class="widget-chart with-sidebar bg-black">
                <div class="widget-chart-content">
                    <h4 class="chart-title">
                        Visitors Analytics
                        <small>Where do our visitors come from</small>
                    </h4>
                    <div id="visitors-line-chart" class="morris-inverse" style="height: 260px;"></div>
                </div>
                <div class="widget-chart-sidebar bg-black-darker">
                    <div class="chart-number">
                        1,225,729
                        <small>visitors</small>
                    </div>
                    <div id="visitors-donut-chart" style="height: 160px"></div>
                    <ul class="chart-legend">
                        <li><i class="fa fa-circle-o fa-fw text-info m-r-5"></i> 34.0% <span>New Visitors</span></li>
                        <li><i class="fa fa-circle-o fa-fw text-primary m-r-5"></i> 56.0% <span>Return Visitors</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
          <div class="panel panel-inverse" data-sortable-id="index-">
            <div class="panel-heading">
                <h4 class="panel-title">Nouveau Etudiants Inscrits <span class="pull-right label label-primary">{{ $Users->count() }} Nouveaux Etudiants</span></h4>
            </div>
            @if(count($Users)>0) 
            {{-- Start --}}
            {{-- Récupération des éléments du models --}}
            <ul class="registered-users-list clearfix">
               @foreach($Users as $User)
               <li>
                <a href="javascript:;"><img src="avatars/{{ $User->avatar }}" alt="" /></a>
                <h4 class="username text-ellipsis">
                    {{ $User->name }}
                    <small>{{ $User->nom_eleve }}</small>
                </h4>
            </li>

            @endforeach
            
        </ul>
        
        {{-- Mi-End --}}
        @else 

        <p class="lead text-center">Aucun Etudiant Inscrit actuellement !</p>
        {{-- <a href="{{ route('events.create') }}">Voulez vous Creer Evènement</a> --}}
        @endif
        {{-- End --}}
        <div class="panel-footer text-center">
            {{-- Pagination --}}
            {{-- {{$Users->links()}} --}}
            {{-- Pagination --}}

            {{-- <a href="javascript:;" class="text-inverse">View All</a> --}}
        </div>
    </div>
    <!-- end panel -->
</div>

<!-- end row -->


{{-- OK --}}
{{-- OK --}}
<!-- begin col-8 -->

<div class="col-md-8">


    <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile">
        <li class="active"><a href="#latest-post" data-toggle="tab"><i class="ion-ios-photos-outline f-s-16 m-r-5"></i> <span class="hidden-xs">
            Mes Publications ({{ $events->count() }})</span></a></li>
            <li class=""><a href="#purchase" data-toggle="tab"><i class="ion-ios-cart f-s-16 m-r-5"></i> <span class="hidden-xs">Infos ETablissements</span></a></li>
            <li class=""><a href="#email" data-toggle="tab"><i class="ion-ios-recording f-s-16 m-r-5"></i> <span class="hidden-xs">Administrateur</span></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="latest-post">
                <div class="height-sm" data-scrollbar="true">
                    {{-- Conditions d'affichages en cas d'indisponibilité d'évènements --}}
                    @if(count($events)>0) 
                    {{-- Start --}}
                    {{-- Récupération des éléments du models --}}
                    <ul class="media-list media-list-with-divider">
                     @foreach($events as $event)
                     <li class="media media-lg">
                        <a href="javascript:;" class="pull-left">
                            <img class="media-object" src="../image/{{ $event->avatar }}" alt="" />
                        </a>
                        <div class="media-body">
                            @if($event->category)
                            <h4 class="media-heading">{{ $event->category->titre_category }}.</h4>
                            @endif
                            {{ $event->description_publication }}
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <br>
                                    <a href="{{ route('events.show', ['event'=>$event->id] ) }},{{$event->id}}/edit">   
                                        <button class="btn btn-primary"> modifier L'article</button></a>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <form action="{{ route('events.destroy',$event) }}" method="POST"
                                        onsubmit="return confirm('Êtes vous sûre ?')"; 
                                        > <br>
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-danger" value="Supprimer L'article">
                                    </form>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </li>
                    @endforeach
                    {{-- Pagination --}}
                    {{-- {{$events->links()}} --}}
                    {{-- Pagination --}}
                </ul>
                {{-- Mi-End --}}
                @else 

                <p class="lead text-center">Aucun évènements publié actuellement !</p>
                {{-- <a href="{{ route('events.create') }}">Voulez vous Creer Evènement</a> --}}
                @endif
                {{-- End --}}
            </div>
        </div>
        <div class="tab-pane fade" id="purchase">
            <div class="height-sm" data-scrollbar="true">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th class="hidden-sm">Logo</th>
                            <th>Nom De l'école</th>
                            <th>Contact</th>
                            <th>Nombres de publications</th>
                        </tr>
                    </thead>
                    @if(count($Ecoles)>0) 
                    @foreach($Ecoles as $Ecole)
                    <tbody>
                        <tr>
                            <td>{{ $Ecole->id }}</td>
                            <td class="hidden-sm">
                                <a href="javascript:;">
                                    <img style="width: 76px;height: 76px;"
                                    src="avatars/{{ $Ecole->avatar }}" alt=""  />
                                </a>
                            </td>
                            <td>
                                <h5><a href="javascript:;">{{ $Ecole->nom_ecole }}</a></h5>
                            </td>
                            <td>{{ $Ecole->contact }}</td>
                            <td><a href="javascript:;">En Attentes</a></td>
                        </tr>
                        
                    </tbody>
                    @endforeach
                    @else 
                    <p class="lead text-center text-danger">Aucune écoles Inscrite actuellement !</p>
                    {{-- <a href="{{ route('events.create') }}">Voulez vous Creer Evènement</a> --}}
                    @endif 
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="email">
            <div class="height-sm" data-scrollbar="true">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th class="hidden-sm">Avatar</th>
                            <th>Nom De L'Administateur</th>
                            <th>Contact</th>
                            <th>Job</th>
                        </tr>
                    </thead>
                    @if(count($Admines)>0) 
                    @foreach ($Admines as $Admine)
                    <tbody>
                        <tr>
                            <td>{{ $Admine->id }}</td>
                            <td class="hidden-sm">
                                <a href="javascript:;">
                                    <img style="width: 76px;height: 76px;" 
                                    src="avatars/{{ $Admine->avatar }}" alt=""  />
                                </a>
                            </td>
                            <td>
                                <h5><a href="javascript:;">{{ $Admine->name }}</a></h5>
                            </td>
                            <td>{{ $Admine->contact }}</td>
                            <td><a href="javascript:;">{{ $Admine->job }}</a></td>
                        </tr>
                        
                    </tbody>
                    @endforeach
                    @else 
                    <p class="lead text-center text-danger">Aucun Administeur Inscrit actuellement !</p>
                    {{-- <a href="{{ route('events.create') }}">Voulez vous Creer Evènement</a> --}}
                    @endif 
                </table>

            </div>
        </div>
    </div>






</div>
<div class="col-md-4">
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Chat History <span class="label label-primary pull-right">4 message</span></h4>
        </div>
        <div class="panel-body">
            <div data-scrollbar="true" data-height="225px">
                <ul class="chats">
                    
                 
                    <li class="left">
                        <span class="date-time">09:20am</span>
                        <a href="#" class="name">Neck Jolly</a>
                        <a href="javascript:;" class="image"><img alt="" src="assets/img/user-10.jpg" /></a>
                        <div class="message">
                            Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                    </li>
                    <li class="right">
                        <span class="date-time">11:15am</span>
                        <a href="#" class="name">Shag Strap</a>
                        <a href="javascript:;" class="image"><img alt="" src="assets/img/user-14.jpg" /></a>
                        <div class="message">
                            Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="panel-footer">
            <form name="send_message_form" data-id="message-form">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" name="message" placeholder="Enter your message here.">
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" type="button">Send</button>
                    </span>
                </div>
            </form>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->
    
</div>
</div>      
<!-- begin row -->

<!-- begin col-4 -->
<div class="col-md-8">
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
         
            <h4 class="panel-title">Toutes Les Catégories <p class="badge badge-primary text-right">Identifiant de L'article</p></h4>
        </div>
        <div id="schedule-calendar" class="bootstrap-calendar"></div>
        <div class="list-group">
            @if(count($categories)>0) 
            @foreach($categories as $categorie)

            
            <a href="{{ route('category.show', ['category'=>$categorie->id] ) }},{{$categorie->id}}/edit" class="list-group-item ">
                <span class="badge badge-primary">{{ $categorie->id }}</span>
                <span class="glyphicon glyphicon-edit"></span>
                {{ $categorie->titre_category }}
            </a>                            
            
            @endforeach
            @else 

            <p class="lead text-center text-danger">Aucune Catégorie créer actuellement !</p>
            {{-- <a href="{{ route('events.create') }}">Voulez vous Creer Evènement</a> --}}
            @endif 
            
        </div>
    </div>
</div>
<!-- end panel -->



<!-- end col-8 -->

<!-- begin col-4 -->
<div class="col-md-4">
    <!-- begin panel -->
    
    <div class="panel panel-inverse">
        <div class="panel-heading">
         
            <h4 class="panel-title text-info">Status De Connection <p class="badge badge-primary text-right"></p></h4>
        </div>
        <div id="schedule-calendar" class="bootstrap-calendar"></div>
        <div class="list-group">
         
            <a href="#" class="list-group-item text-ellipsis">
                @component('components.who')
                @endcomponent
            </a>
            
            
        </div>
    </div>
</div>
<!-- end row -->

</div>
<!-- end #content -->     














@endsection
