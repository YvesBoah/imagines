<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire-Boah
 * Date: 18/10/2017
 * Time: 10:13
 */
?>

@extends('Layouts.app')

@section('contenu_actualites')
    <p class="lead">Bienvenue sur la Page d'actualités ok </p>


<div class="row"> 
      {{-- ROW PRINCIPALE --}}
       @if(count($events)>0) 
      <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
       @foreach($events as $event)
      <div class="col-md-4 col-sm-6 projects animate-in" data-anim-type="fade-in" data-anim-delay="100">
       <a href="{{ route('events.show', ['event'=>$event->id] ) }}">
        <img class="img-responsive" src="../image/{{$event->avatar}}" alt="Pub">
        <h3>{{ $event->titre_publication }}</h3>
        <span>{{ $event->description_publication }}</span> </a>
     </div>
        
          @endforeach

           @else 
          <p class="lead text-center">Aucun évènements publié actuellement !</p>
            @endif

                    </div>
               </div>
            {{-- second rows --}}
        </div>

        <div class="col-md-3">
          <p class="lead">Je suis une Publicité</p>
        </div>
       {{-- ROW PRINCIPALE --}}

      </div>

        <div class="col-md-4 col-md-push-4">
              {{-- Pagination --}}
              {{$events->links()}}
              {{-- Pagination --}}
        </div>
              
    </div>  {{-- Container Fluid --}}

  </div>   {{-- End section-lg --}}
  {{-- end projects --}}
{{-- Message --}}


 
@endsection