@extends('layouts.Admin-neutre')
{{-- @extends('layouts.app') --}}

@section('content-email_reset_ecole')


<!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login bg-black animated fadeInDown">
            <!-- begin brand -->
            <style type="text/css">
                #resize_logo{
                    height: 180px;
                    padding-bottom: 100px;
                }
            </style>
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
             <div class="col-sm-3">
              <img id="resize_logo" src="{{ asset('images/o24.png') }}" alt=""></div>
            <div class="login-header">
                <div class="brand">
               
                    <bt>Admin</bt> <oo>E</oo><bt>tablissements</bt>
                    <small>Section Réservés Au Administrateurs</small>
                </div>
                <div class="icon">
                    <i class="ion-ios-locked"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form  method="POST" action="{{ route('admin_ecole.password.email') }}" class="margin-bottom-0">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} m-b-20">
                        {{-- <label for="email" >E-Mail Address</label> --}}
                        <input type="email" name="email" {{-- value="Addresse Email" --}} autofocus class="form-control input-lg inverse-mode no-border"
                         placeholder="Addresse mail" required />
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                    </div>


                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" /> Se Souvenir de moi 
                        </label>
                    </div>
                            
                        
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Réinitialiser Son Mot de Passe</button>
                    </div>
                        
                </form>
            </div>
        </div>
        <!-- end login -->
@endsection
