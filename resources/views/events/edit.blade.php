@extends('../Layouts/admin-post-control')

@push('content-edit')
 {{-- Style Appliqué à L'image --}}
              

             
	<h1 class="text-center">Editer L'évènement #{{ $event->titre_publication }}</h1>
		
		{{-- <form action="{{ route('events.update',$event) }}" method="POST" enctype="multipart/form-data"$>
			 {{csrf_field()}}
       {{ method_field('PUT') }}
    <input type="hidden" name="_method" value="PUT">
		<div class="row">

			<div class="col-md-4 col-md-push-4">
                <div class="form-group">
                   <label for="nom">Titre</label>
                  <input type="text" name="titre_publication" class="form-control" placeholder="Ajouter un titre" value="{{old('titre_publication')?: $event->titre_publication }}">   
                  {!! $errors->first('titre_publication','<p class="error">:message</p>') !!}
                </div>
        	</div>

        </div>
              
     
             <div class="row">
         <div class="col-md-4 col-md-push-4">
                <div class="form-group">

                <label for="cat">Catégorie</label>
                
                  <select name="category_id" id="cat" class="form-control">
                  @foreach($categories->all() as $id=>$cat)
                          
                    <option value="{{ $id }}" name="category_id"
                     {{ ($cat==$event->category->titre_category ? "selected" : "") }} >
                     {{ $cat }}
                    </option>
                  @endforeach  
                  </select>

                </div>
        </div>  

      </div>


		<div class="row">

			<div class="col-md-4 col-md-push-4">
                <div class="form-group">
                   <label for="nom">Image Description</label>
                  <input id="nom" type="file" name="avatar" class="form-control" required="required"/>
                </div>
      </div>

    </div>
                    


		<div class="row">

      <div class="col-md-4 col-md-push-4">
                <div class="form-group">
                   <label for="nom">Description</label>
                  <textarea id="nom" cols="30" rows="3"  name="description_publication" class="form-control">{{ $event->description_publication }}</textarea>  
                  {!! $errors->first('description_publication','<p class="error">:message</p>') !!}
                </div>
          </div>

        </div>

    <div class="row">

			<div class="col-md-4 col-md-push-4">
                <div class="form-group">
                   <label for="nom">contenu de la publication</label>
                 	<textarea id="nom" cols="30" rows="8"  name="contenu_publication" class="form-control">
                    {{ $event->contenu_publication }}
                  </textarea>  
                 	{!! $errors->first('contenu_publication','<p class="error">:message</p>') !!}
                </div>
        	</div>

        </div>

		<div class="row">

			<div class="col-md-4 col-md-push-4">
                <button class="btn btn-orange">Mettre à Jour</button>
        	</div>

        </div>



		</form>

 --}}

    {{-- <a class="btn-lg btn-primary"  href="{{ route('events.edit',$event) }}">Editer L'article</a> --}}
   
      {{--   <form action="{{ route('events.destroy',$event) }}" method="POST"
        onsubmit="return confirm('Êtes vous sûre ?')"; 
        > <br>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" value="Supprimer L'article">
        </form> --}}



        <!-- begin col-6 -->
          <div class="col-md-7 col-md-push-3">
              <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Formulaire de Modification de La Publication</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form action="{{ route('events.update',$event) }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                               {{ method_field('PUT') }}
                               {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4" for="fullname">Titre de L'article :</label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" type="text" id="fullname" name="titre_publication" value="{{ $event->titre_publication }}" data-parsley-required="true" />
                    {!! $errors->first('titre_publication','<p class="error">:message</p>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4" for="Cat">Catégories Associés :</label>
                  <div class="col-md-6 col-sm-6">
                   <select name="category_id" id="cat" class="form-control">
                 @foreach($categories->all() as $id=>$cat)
                          
                    <option value="{{ $id }}" name="category_id"
                     {{ ($cat==$event->category->titre_category ? "selected" : "") }} >
                     {{ $cat }}
                    </option>
                  @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4" for="website">Image De Description </label>
                  <div class="col-md-6 col-sm-6">
                   <input type="file" name="avatar" value="{{ $event->avatar }}" class="form-control" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4" for="message">Description De La Publication (10 caractères min, 30 max) :</label>
                  <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" id="message" name="description_publication" rows="4" data-parsley-range="[10,30]" placeholder="Requis">{{ $event->description_publication }}</textarea>
                    {!! $errors->first('contenu_publication','<p class="error">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4" for="message">Contenu De La Publication (20 caractères min, 2000 max) :</label>
                  <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" id="message" cols="30" rows="8"  name="contenu_publication" data-parsley-range="[20,200]" placeholder="Requis">{{ $event->contenu_publication }}</textarea>
                    {!! $errors->first('contenu_publication','<p class="error">:message</p>') !!}
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4"></label>
                  <div class="col-md-6 col-sm-6">
                    
                    <input class="form-control" type="hidden" name="admins_id_pub" 
                    value="{{ Auth::user()->id }}">
                  </div>
                </div>
              
                
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4"></label>
                  <div class="col-md-6 col-sm-6">
                    <button type="submit" class="btn btn-primary">Mettre à Jour</button>
                  </div>
                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>



@endpush
