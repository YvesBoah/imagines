@extends('layouts.app')

@section('content')

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
             <div class="col-sm-3">
              <img id="resize_logo" src="{{ asset('images/o24.png') }}" alt=""></div>
            <div class="login-header">
                <div class="brand">
               
                    <oo>INSCRIPTION</oo>
                    <small>Vous n'avez pas de Compte ? Inscrivez vous !</small>
                </div>
                <div class="icon">
                    <i class="ion-ios-locked"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form  method="POST" action="{{ route('register') }}" class="margin-bottom-0">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} m-b-20">
                        {{-- <label for="email" >E-Mail Address</label> --}}
                        <input type="text" name="name" autofocus class="form-control input-lg inverse-mode no-border" 
                        placeholder="Pseudo" required />
                               @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif     
                    </div>
                    
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} m-b-20">
                        {{-- <label for="email" >E-Mail Address</label> --}}
                        <input type="email" placeholder="Adresse Mail"  name="email" autofocus class="form-control input-lg inverse-mode no-border" 
                     required />
                               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif  
                    </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} m-b-20">
                        {{-- <label for="password">Password</label> --}}
                        <input type="password" name="password" class="form-control input-lg inverse-mode no-border" placeholder="Mot de Passe" required />
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} m-b-20">
                        {{-- <label for="password">Password</label> --}}
                        <input type="password" placeholder="Confirmez votre Mot de passe" name="password_confirmation" class="form-control input-lg inverse-mode no-border" required />
                     </div>

                    <div class="col-md-11 col-md-push-1">
                        <b>  <em class="text-center"> Nous seront heureux de vous compter parmis nous !</em> </b> 
                           </div>
                       
                    <div class="login-buttons">
                      <br>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                          M'inscrire
                        </button>
                    </div>
                        
                </form>

            </div>
        </div>    
        <!-- end login -->
  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
         </div>
















@endsection
