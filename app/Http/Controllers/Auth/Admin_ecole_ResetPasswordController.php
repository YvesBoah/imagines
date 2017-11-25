<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Password;
use Auth;

class Admin_ecole_ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/admin_ecole';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin_ecole');
    }

    public function guard()
    {
       return Auth::guard('admin_ecole');
    }

    // le admins provient du ficher Auth ( resettings passwords)
     protected function broker()
     {
        return Password::broker('ecoles');
     }
        // Password reset Admin 
     public function showResetForm(Request $request , $token = null)
     {
        return view('auth.passwords.reset-admin_ecole')->with(
            ['token' => $token , 'email' => $request->email ]
        );
     }

}
