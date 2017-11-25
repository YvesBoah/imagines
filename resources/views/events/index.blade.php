
@extends('Layouts/admin-neutre')

@push('content-event_index')

<style type="text/css">
	body{
		background-color: white;
	}
</style>
	<h1 class="text-center">Tout Les évènements</h1>
		<p class="lead"> {{ $events->count() }} - Evènements </p>
		{{-- Conditions d'affichages en cas d'indisponibilité d'évènements --}}
	@if(count($events)>0) 
		{{-- Start --}}
		{{-- Récupération des éléments du models --}}

			<ul>
					
				@foreach($events as $event)
				<li>
						@if($event->category)
					<p class="lead">{{ $event->category->titre_category }}</p>
							@endif

				
					
						<a href="{{ route('events.show', ['event'=>$event->id] ) }}">
							{{ $event->titre_publication }}
						</a>
					</li>
				@endforeach

			</ul>
							{{-- Pagination --}}
							{{$events->links()}}
							{{-- Pagination --}}
			<br>
					{{-- <a href="{{ route('events.create') }}">Creer Evènement</a> --}}
	{{-- Mi-End --}}
	@else 

			<p class="lead text-center">Aucun évènements publié actuellement !</p>
				{{-- <a href="{{ route('events.create') }}">Voulez vous Creer Evènement</a> --}}
	@endif
	{{-- End --}}

	

@endpush

