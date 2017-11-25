@extends('Layouts/admin-post-control')

@section('content_edit_admin')
<br>
<br>
      <div class="col-md-4 col-md-push-3">
      <h2 class="lead">Editer Votre Profil <strong>Ici</strong> !</h2>
        </div>
    <div class="container">
        
<br>
      <form action="{{ route('edit_Admin') }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

      <!-- Ligne 1 -->
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-md-push-2">
                <div class="form-group">
                   <label for="nom">Nom</label>
                   <input type="text" class="form-control  is-invalide" id="nom" name="name" value="{{ $user->name }}">
                     {!! $errors->first('name',' <div class="alert alert-danger" role="alert">
                   :message
                  </div> ')  !!}
                </div>

        </div>
        <div class="col-md-2 col-md-push-2">
         <div class="form-group">
                <label for="email">Email address:</label>
               <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">

                {!! $errors->first('email',' <div class="alert alert-danger" role="alert">
               :message
                </div> ')  !!}
              </div>
        </div>
        <div class="col-md-2 col-md-push-2">
                  <div class="form-group">
                   <label for="image">Avatar</label>
                   <input id="image" type="file"  name="avatar">
                  
                  </div>

        </div>
      </div>
      <!-- Ligne 1 -->
      <!-- Ligne 2 -->
      <div class="row">
        <div class="col-md-2 col-md-push-2">
                    <div class="form-group">
                     <label for="pwd">Password:</label>
                     <input type="password" class="form-control" id="pwd" name="password">

                     </div>
              </div>
        
        <div class="col-md-2 col-md-push-2">
              <div class="form-group">
               <label for="contact">contact</label>
               <input type="number" class="form-control" id="contact" name="contact" value="{{ $user->contact}}">
              </div>

        </div>
            <div class="col-md-2 col-md-push-2">
              <div class="form-group">
               <label for="contact">job</label>
               <input type="text" class="form-control" id="contact" name="job" value="{{ $user->job}}">
              </div>

        </div>

       
      </div>
      <!-- Ligne 2 -->

    <div class="col-md-4 col-md-push-4">
<button type="submit" class="btn btn-success">Mettre à Jour</button>
     
</div>
</form>
</div>

   <!-- Ligne 5 -->
      <div class="row">
        
        <div class="col-md-4">
              
        </div>
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
      <!-- Ligne 5 -->

  
     
  
   </div> 		
   <br>
@endsection

