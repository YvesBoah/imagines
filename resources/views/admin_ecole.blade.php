@extends('layouts.app_section_admin')

@section('content-ecole')




<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-blue">
                        <div class="stats-icon"><i class="ion-ios-world"></i></div>
                        <div class="stats-info">
                            <h4>TOTAL VISITORS</h4>
                            <p>3,291,922</p>    
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-aqua">
                        <div class="stats-icon"><i class="ion-ios-upload"></i></div>
                        <div class="stats-info">
                            <h4>BOUNCE RATE</h4>
                            <p>20.44%</p>   
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-purple">
                        <div class="stats-icon"><i class="ion-ios-pie"></i></div>
                        <div class="stats-info">
                            <h4>UNIQUE VISITORS</h4>
                            <p>1,291,922</p>    
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-orange">
                        <div class="stats-icon"><i class="ion-ios-clock"></i></div>
                        <div class="stats-info">
                            <h4>AVG TIME ON SITE</h4>
                            <p>00:12:23</p> 
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
            <!-- begin row -->
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
                            {{$Users->links()}}
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
                        {{ $events->count() }} - Evènements</span></a></li>
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
                                    <li class="media media-lg">
                                        <a href="javascript:;" class="pull-left">
                                            <img class="media-object" src="assets/img/gallery/gallery-8.jpg" alt="" />
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor accumsan rutrum.</h4>
                                            Fusce augue diam, vestibulum a mattis sit amet, lor vitae sapien ultricies fringilla. Suspendisse vitae orci sed nibh ultrices tristique. Aenean in ante eget urna semper imperdiet. Pellentesque sagittis a nulla at scelerisque.
                                        </div>
                                    </li>
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
                                                    <img style="width: 76px;height: 76px;" src="avatars/{{ $Ecole->avatar }}" alt=""  />
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
                                     @if(count($Admin)>0) 
                                @foreach($Admin as $Admins)
                                    <tbody>
                                        <tr>
                                            <td>{{ $Admins->id }}</td>
                                            <td class="hidden-sm">
                                                <a href="javascript:;">
                                                    <img style="width: 76px;height: 76px;" src="avatars/{{ $Admins->avatar }}" alt=""  />
                                                </a>
                                            </td>
                                            <td>
                                                <h5><a href="javascript:;">{{ $Admins->name }}</a></h5>
                                            </td>
                                            <td>{{ $Admins->contact }}</td>
                                            <td><a href="javascript:;">{{ $Admins->job }}</a></td>
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
                            <a href="#" class="list-group-item text-ellipsis">
                                <span class="badge badge-primary">{{ $categorie->id }}</span> {{ $categorie->titre_category }}
                            </a>
                              @endforeach
                        @else 

                    <p class="lead text-center text-danger">Aucune Catégorie créer actuellement !</p>
                {{-- <a href="{{ route('events.create') }}">Voulez vous Creer Evènement</a> --}}
                        @endif 
                            
                        </div>
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
