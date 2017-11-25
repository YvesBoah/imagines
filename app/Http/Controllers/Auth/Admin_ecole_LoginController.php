<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Password;
use Auth;

class Admin_ecole_LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin_ecole',['except' => ['logout'] ]);
    }

    Public function ShowLoginForm()
    {
        return view('auth.admin_ecole_login');
    }

    Public function Login(Request $request)
    {
        
        // Validation du formulaire
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:4',
        ]);
         
        //attempt to log the user in 
        if (Auth::guard('admin_ecole')->attempt([
            'email'=>$request->email,
            'password'=>$request->password],
            $request->remember) ){
            // Si la vérificaton réussie rdirige le là bas
            return redirect()->intended( route('admin_ecole.dashboard') );
        }
        // Si la vérification échoue redirige le ici
        return redirect()->back()->withInput($request->only('email','remember') );
    }
            // Fonction de déconnection pourl'admin
  
    // ajout User fonction de deconnection
     public function logout()
    {
        Auth::guard('admin_ecole')->logout();
        return redirect('/');
    }
}
