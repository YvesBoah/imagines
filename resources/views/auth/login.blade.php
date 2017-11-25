@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
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
               
                    <oo>U</oo><bt>tilisateur</bt> 
                    <small>Etudiant & Futur Bachelier</small>
                </div>
                <div class="icon">
                    <i class="ion-ios-locked"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form  method="POST" action="{{ route('login') }}" class="margin-bottom-0">
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


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} m-b-20">
                        {{-- <label for="password">Password</label> --}}
                        <input type="password" name="password" class="form-control input-lg inverse-mode no-border" placeholder="Mot de Passe" required />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                    <div class="checkbox m-b-20">
                        <label>
                            <input checked="" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/> Se Souvenir de moi 
                        </label>
                    </div>
                            
                        </div>  
                        <div class="col-md-6">
                            <a class="btn btn-link"
                              href="{{ route('password.request') }}">
                                    Mot de passe Oublié ?
                            </a>
                        </div>  
                    </div>
                    <div class="login-buttons">
                   <a href="{{route('register')}}"><button type="submit" class="btn btn-primary btn-block btn-lg">Me Connectez</button></a> 
                    </div>
                        
                </form>
            </div>
        </div>


  </div>
</div>









<br>

{{-- Corps du login --}}
 <div class="clearfix"></div>
  <div class="section-lg counters m-bottom4">
    


    </div>
  </div>
  
{{-- Corps du login --}}


@endsection
