{{-- @extends('../Layouts/admin-post-control') --}}
@extends('Layouts.app')
@push('content-show')
 {{-- Style Appliqué à L'image --}}
                <style>
                body{
                    background-color: white;
                }
                    #img_profile{
                        width:360px;
                        height:200px;
                        float:left;
                       
                    }
                </style>
                {{-- Style Appliqué à L'image --}}
              

	<h1 class="text-center">{{ $event->titre_publication }}</h1>
         {{-- Style Appliqué à L'image --}}
        <img id="img_profile"  src="../image/{{ $event->avatar }}" alt="Image_de_description"/>
        <br>
        <p class="lead text-center">{{ $event->description_publication }}</p>

        <p class="lead text-center">{{ $event->contenu_publication }}</p>
    

    

      

       

		

@endpush