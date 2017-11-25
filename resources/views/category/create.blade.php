@extends('Layouts/admin-post-control')

@section('content-category_create')

		
		<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-6 col-md-push-3">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Formulaire de creation de Catégorie</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form action="{{ route('category.store') }}"  method="POST" class="form-horizontal form-bordered">
                            	{{ csrf_field() }}
								
								<div class="form-group">
									<label class="control-label col-md-4">Nouvelle Catégorie</label>
									<div class="col-md-8">
								        <div class="input-group" >
                                            <input name="titre_category" type="text" class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-check"></span>
                                            </span>
                                        </div>
                                        {!! $errors->first('titre_category','<p class="error">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-md-4">Mots clé ou slug</label>
									<div class="col-md-8">
								        <div class="input-group" >
                                            <input name="slug" type="text" class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-check"></span>
                                            </span>
                                        </div>
                                        {!! $errors->first('slug','<p class="error">:message</p>') !!}
                                    </div>
                                </div>
								<div class="form-group">
									
									<div class="col-md-8 col-md-push-5">
									   <button type="submit" class="btn btn-success">Créer La catégorie</button>
                                    </div>
                                </div>
							</form>
                        </div>
                    </div>   
                    <!-- end panel -->
                </div>



@endsection