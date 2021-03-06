@extends(Config::get('chatter.master_file_extend'))

@section(Config::get('chatter.yields.head'))
  
   
    <link href="/vendor/devdojo/chatter/assets/vendor/spectrum/spectrum.css" rel="stylesheet">
	<link href="/vendor/devdojo/chatter/assets/css/chatter.css" rel="stylesheet">
	@if($chatter_editor == 'simplemde')
		<link href="/vendor/devdojo/chatter/assets/css/simplemde.min.css" rel="stylesheet">
	@elseif($chatter_editor == 'trumbowyg')
		<link href="/vendor/devdojo/chatter/assets/vendor/trumbowyg/ui/trumbowyg.css" rel="stylesheet">
		<style>
			.trumbowyg-box, .trumbowyg-editor {
				margin: 0px auto;
			}
		</style>
	@endif
@stop

{{-- tout ce qui est en haut hérite de la barre de navigation --}}
{{-- tout ce qui est en haut hérite de la barre de navigation --}}


<!-- Corps du forum -->

@section('content_forums')






<div id="chatter" class="chatter_home">


	@if(Session::has('chatter_alert'))
		<div class="chatter-alert alert alert-{{ Session::get('chatter_alert_type') }}">
			<div class="container">
	        	<strong><i class="chatter-alert-{{ Session::get('chatter_alert_type') }}"></i> {{ Config::get('chatter.alert_messages.' . Session::get('chatter_alert_type')) }}</strong>
	        	{{ Session::get('chatter_alert') }}
	        	<i class="chatter-close"></i>
	        </div>
	    </div>
	    <div class="chatter-alert-spacer"></div>
	@endif

	@if (count($errors) > 0)
	    <div class="chatter-alert alert alert-danger">
	    	<div class="container">
	    		<p><strong><i class="chatter-alert-danger"></i> {{ Config::get('chatter.alert_messages.danger') }}</strong> Please fix the following errors:</p>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
	    </div>
	@endif

	<div class="container-fluid chatter_container">

	    <div class="row">

					 <div class="col-md-3 col-xs-12 ">
	    	{{-- Pub 1 --}}

	    	<table>
  <tr>
  	{{-- src="http://lorempixel.com/260/355/people/" --}}
    <td>
<marquee loop="-1 0" scrollamount="4" behavior="alternate" BGCOLOR="" direction="down"> 
    		{{-- <p id="steps"></p> --}}	{{-- Pub 1 --}}
    		
					<div id="steps" class="col-md-12 projects animate-in" data-anim-type="fade-in" data-anim-delay="200"><a href="index.html#">
						<img class="img-responsive" src="images/project-1.jpg"  alt=""/>
      					  <h3>Publicités</h3>
       					 <span>Pearson</span> </a> </div>

    		{{-- <p id="steps"></p> --}}	{{-- Pub 1 --}}
    		
					<div id="steps" class="col-md-12 projects animate-in" data-anim-type="fade-in" data-anim-delay="200"><a href="index.html#">
						<img class="img-responsive" src="images/project-1.jpg"  alt=""/>
      					  <h3>Publicités</h3>
       					 <span>Pearson</span> </a> </div>

    		{{-- <p id="steps"></p> --}}	{{-- Pub 1 --}}
    		
					<div id="steps" class="col-md-12 projects animate-in" data-anim-type="fade-in" data-anim-delay="200"><a href="index.html#">
						<img class="img-responsive" src="images/project-1.jpg"  alt=""/>
      					  <h3>Publicités</h3>
       					 <span>Pearson</span> </a> </div>
</marquee>     		 
				

				{{-- Pub 1 --}}
				{{-- Pub 2 --}}
					
  

	</td>
  </tr>
  
  
    
  </tr>
</table>

					
			
					 		
					 </div>
	  
	        <div class="col-md-6 col-xs-12 right-column">
	        	<div class="panel">
		        	<ul class="discussions">
		        		@foreach($discussions as $discussion)
				        	<li>
				        		<a class="discussion_list" href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}/{{ $discussion->category->slug }}/{{ $discussion->slug }}">
					        		<div class="chatter_avatar">
					        			@if(Config::get('chatter.user.avatar_image_database_field'))

					        				<?php $db_field = Config::get('chatter.user.avatar_image_database_field'); ?>

					        				<!-- If the user db field contains http:// or https:// we don't need to use the relative path to the image assets -->
					        				@if( (substr($discussion->user->{$db_field}, 0, 7) == 'http://') || (substr($discussion->user->{$db_field}, 0, 8) == 'https://') )
					        					<img src="{{ $discussion->user->{$db_field}  }}">
					        				@else
					        					<img src="{{ Config::get('chatter.user.relative_url_to_image_assets') . $discussion->user->{$db_field}  }}">
					        				@endif

					        			@else

					        				<span class="chatter_avatar_circle" style="background-color:#<?= \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode($discussion->user->email) ?>">
					        					{{ strtoupper(substr($discussion->user->email, 0, 1)) }}
					        				</span>

					        			@endif
					        		</div>

					        		<div class="chatter_middle">
					        			<h3 class="chatter_middle_title">{{ $discussion->title }} <div class="chatter_cat" style="background-color:{{ $discussion->category->color }}">{{ $discussion->category->name }}</div></h3>
					        			<span class="chatter_middle_details">Posté Par: <span data-href="/user">{{ ucfirst($discussion->user->{Config::get('chatter.user.database_field_with_user_name')}) }}</span> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($discussion->created_at))->diffForHumans() }}</span>
					        			@if($discussion->post[0]->markdown)
					        				<?php $discussion_body = GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $discussion->post[0]->body ); ?>
					        			@else
					        				<?php $discussion_body = $discussion->post[0]->body; ?>
					        			@endif
					        			<p>{{ substr(strip_tags($discussion_body), 0, 200) }}@if(strlen(strip_tags($discussion_body)) > 200){{ '...' }}@endif</p>
					        		</div>

					        		<div class="chatter_right">

					        			<div><i class="chatter-bubble"></i>
					        			 <span class="badge">{{ $discussion->postsCount[0]->total+1 }}</span></div>
					        		</div>

					        		<div class="chatter_clear"></div>
					        	</a>
				        	</li>
			        	@endforeach
		        	</ul>
	        	</div>

	        	<div id="pagination">
	        		{{ $discussions->links() }}
	        	</div>

	        </div>


			
				<div class="col-md-3 col-xs-12 left-column">

	    		{{-- Liste des catégories --}}

	    			<div class="panel panel-primary">
  					 <!-- Default panel contents -->
  					 <div class=""><p class="lead"><em>Actuel Sujets en cours</em></p></div>
  					 <div class="panel-body">
					<button class="btn btn-primary" id="new_discussion_btn"><span class="glyphicon glyphicon-envelope"></span> Nouvelles {{ Config::get('chatter.titles.discussion') }}</button>
					</div>
					 
 					  <!-- List group -->
 					  <ul class="nav nav-pills nav-stacked">
 					  	<li class="active"><a href="/{{ Config::get('chatter.routes.home') }}">
 					  		<span class="glyphicon glyphicon-envelope"></span> Toutes Les {{ Config::get('chatter.titles.discussions') }}</a></li>
 					    <?php $categories = DevDojo\Chatter\Models\Models::category()->all(); ?>
						@foreach($categories as $category)
							<li  class="list-group-item"><a href="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.category') }}/{{ $category->slug }}"><div class="chatter-box" style="background-color:{{ $category->color }};"></div> {{ $category->name }}</a></li>
						@endforeach					   
 					  </ul>
					 </div>

	    		{{-- Liste des catégories --}}

	    		{{-- Espaces de publicités --}}
	    		
	    <div class="projects animate-in" data-anim-type="fade-in" data-anim-delay="100"><a href="index.html#"><img src="images/project-1.jpg" alt="" class="img-responsive">
       			 			<h3>Publicités</h3>
        				<span>Ecoles Sup</span> </a> </div>

	    		{{-- <div class="taille_pub">
	    			<style type="text/css">
	    				.taille_pub{
	    					width: 260px;
	    					height:350px;
	    				}
	    			</style>
	    			<img class="img-responsive" src="http://lorempixel.com/260/355/sports/" alt=""/>
	    		</div> --}}


	    		{{-- Espaces de publicités --}}

	    		




	    		<!-- SIDEBAR -->
	    		
				<!-- END SIDEBAR -->
	    	</div>


	    </div>
	</div>

	<div id="new_discussion">


    	<div class="chatter_loader dark" id="new_discussion_loader">
		    <div></div>
		</div>

    	<form id="chatter_form_editor" action="/{{ Config::get('chatter.routes.home') }}/{{ Config::get('chatter.routes.discussion') }}" method="POST">
        	<div class="row">
	        	<div class="col-md-7">
		        	<!-- TITLE -->
	                <input type="text" class="form-control" id="title" name="title" placeholder="Title of {{ Config::get('chatter.titles.discussion') }}" v-model="title" value="{{ old('title') }}" >
	            </div>

	            <div class="col-md-4">
		            <!-- CATEGORY -->
			            <select id="chatter_category_id" class="form-control" name="chatter_category_id">
			            	<option value="">Choisir Une Catégorie</option>
				            @foreach($categories as $category)
				            	@if(old('chatter_category_id') == $category->id)
				            		<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
				            	@else
				            		<option value="{{ $category->id }}">{{ $category->name }}</option>
				            	@endif
				            @endforeach
			            </select>
		        </div>

		        <div class="col-md-1">
		        	<i class="chatter-close"></i>
		        </div>
	        </div><!-- .row -->

            <!-- BODY -->
        	<div id="editor">
        		@if( $chatter_editor == 'tinymce' || empty($chatter_editor) )
					<label id="tinymce_placeholder">Type Your Discussion Here...</label>
    				<textarea id="body" class="richText" name="body" placeholder="">{{ old('body') }}</textarea>
    			@elseif($chatter_editor == 'simplemde')
    				<textarea id="simplemde" name="body" placeholder="">{{ old('body') }}</textarea>
				@elseif($chatter_editor == 'trumbowyg')
					<textarea class="trumbowyg" name="body" placeholder="Type Your Discussion Here...">{{ old('body') }}</textarea>
				@endif
    		</div>

            <input type="hidden" name="_token" id="csrf_token_field" value="{{ csrf_token() }}">

            <div id="new_discussion_footer">
            	<input type='text' id="color" name="color" /><span class="select_color_text">Select a Color for this Discussion (optional)</span>
            	<button id="submit_discussion" class="btn btn-success pull-right"><i class="chatter-new"></i> Create {{ Config::get('chatter.titles.discussion') }}</button>
            	<a href="/{{ Config::get('chatter.routes.home') }}" class="btn btn-default pull-right" id="cancel_discussion">Cancel</a>
            	<div style="clear:both"></div>
            </div>
        </form>

    </div><!-- #new_discussion -->

</div>

@if( $chatter_editor == 'tinymce' || empty($chatter_editor) )
	<input type="hidden" id="chatter_tinymce_toolbar" value="{{ Config::get('chatter.tinymce.toolbar') }}">
	<input type="hidden" id="chatter_tinymce_plugins" value="{{ Config::get('chatter.tinymce.plugins') }}">
@endif
<input type="hidden" id="current_path" value="{{ Request::path() }}">

@endsection

@section(Config::get('chatter.yields.footer'))


@if( $chatter_editor == 'tinymce' || empty($chatter_editor) )
	<script src="/vendor/devdojo/chatter/assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="/vendor/devdojo/chatter/assets/js/tinymce.js"></script>
	<script>
		var my_tinymce = tinyMCE;
		$('document').ready(function(){
			$('#tinymce_placeholder').click(function(){
				my_tinymce.activeEditor.focus();
			});
		});
	</script>
@elseif($chatter_editor == 'simplemde')
	<script src="/vendor/devdojo/chatter/assets/js/simplemde.min.js"></script>
	<script src="/vendor/devdojo/chatter/assets/js/chatter_simplemde.js"></script>
@elseif($chatter_editor == 'trumbowyg')
	<script src="/vendor/devdojo/chatter/assets/vendor/trumbowyg/trumbowyg.min.js"></script>
	<script src="/vendor/devdojo/chatter/assets/vendor/trumbowyg/plugins/preformatted/trumbowyg.preformatted.min.js"></script>
	<script src="/vendor/devdojo/chatter/assets/js/trumbowyg.js"></script>
@endif

<script src="/vendor/devdojo/chatter/assets/vendor/spectrum/spectrum.js"></script>
<script src="/vendor/devdojo/chatter/assets/js/chatter.js"></script>
<script>
	$('document').ready(function(){

		$('.chatter-close').click(function(){
			$('#new_discussion').slideUp();
		});
		$('#new_discussion_btn, #cancel_discussion').click(function(){
			@if(Auth::guest())
				window.location.href = "/{{ Config::get('chatter.routes.home') }}/login";
			@else
				$('#new_discussion').slideDown();
				$('#title').focus();
			@endif
		});

		$("#color").spectrum({
		    color: "#333639",
		    preferredFormat: "hex",
		    containerClassName: 'chatter-color-picker',
		    cancelText: '',
    		chooseText: 'close',
		    move: function(color) {
				$("#color").val(color.toHexString());
			}
		});

		@if (count($errors) > 0)
			$('#new_discussion').slideDown();
			$('#title').focus();
		@endif


	});
</script>
@stop
 </div>
 