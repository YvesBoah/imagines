@extends('Layouts.app')

@section('content')
<br>
<br>
    <div class="container">
      <h2 class="lead">Editer Votre Profil <strong>Ici</strong> !</h2>

        
<br>
      <form action="{{ route('edit') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

      <!-- Ligne 1 -->
      <div class="row">
        <div class="col-md-4">
                <div class="form-group">
                   <label for="nom">Pseudo:</label>
                   <input type="text" class="form-control  is-invalide" id="nom" name="name" value="{{ $user->name }}">
                     {!! $errors->first('name',' <div class="alert alert-danger" role="alert">
                   :message
                  </div> ')  !!}
                </div>

        </div>
        <div class="col-md-4">
         <div class="form-group">
                <label for="email">Email address:</label>
               <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">

                {!! $errors->first('email',' <div class="alert alert-danger" role="alert">
               :message
                </div> ')  !!}
              </div>
        </div>
        <div class="col-md-4">
                  <div class="form-group">
                   <label for="image">Image</label>
                   <input type="file" class="filestyle form-control" data-text="upload" name="avatar">
                   {!! $errors->first('avatar',' <div class="alert alert-danger" role="alert">
                  :message
                </div> ')  !!}
                  </div>

        </div>
      </div>
      <!-- Ligne 1 -->
      <!-- Ligne 2 -->
      <div class="row">
        <div class="col-md-4">
                    <div class="form-group">
                     <label for="pwd">Password:</label>
                     <input type="password" class="form-control" id="pwd" name="password">

                     </div>
              </div>
        
        <div class="col-md-4">
                   <div class="form-group">
    <label for="age">age</label>
    <input type="number" class="form-control" id="age" name="age" value="{{ $user->age }}">
  </div>
        </div>

        <div class="col-md-4">
                  <div class="form-group">
                   <label for="nom">nom:</label>
                   <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom_eleve }}">
                  </div>
        </div>
      </div>
      <!-- Ligne 2 -->

    <!-- Ligne 3 -->
      <div class="row">
        
        <div class="col-md-4">
              <div class="form-group">
               <label for="prenom">prenom</label>
               <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom_eleve }}" >
              </div>
        </div>
        <div class="col-md-4">
                
  <div class="form-group">
    <label for="ville">ville</label>
    <input type="text" class="form-control" id="ville" name="ville" value="{{ $user->ville_residence_eleve}}" >
  </div>
  
        </div>
        <div class="col-md-4">
                <div class="form-group">
    <label for="region">region</label>
    <input type="text" class="form-control" id="region" name="region" value="{{ $user->region_residence_eleve}}">
  </div>
        </div>
      </div>
      <!-- Ligne 3 -->
      <!-- Ligne 4 -->
      <div class="row">
        
        <div class="col-md-4">
              <div class="form-group">
               <label for="contact">contact</label>
               <input type="number" class="form-control" id="contact" name="contact" value="{{ $user->contact_eleve}}">
              </div>

        </div>

              <div class="col-md-4">
                   <div class="form-group">
            <label for="cv">cv</label>
           <input type="file" class="form-control" id="cv" name="cv">
           {!! $errors->first('cv_eleve',' <div class="alert alert-danger" role="alert">
          :message
        </div> ')  !!}
          </div>

        </div>
        <div class="col-md-4">
                 <div class="form-group">
                 <label for="experience">experience</label>
                 <input type="text" class="form-control" id="experience" name="experience" value="{{ $user->experience_professionnel_eleve }}">
                </div>

        </div>
      </div>
      <!-- Ligne 4 -->

<button type="submit" class="btn btn-orange">Editer</button>
</form>


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

