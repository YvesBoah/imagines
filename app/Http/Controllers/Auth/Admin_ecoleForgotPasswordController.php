<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Password;
use Auth;


class Admin_ecoleForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin_ecole');
    }
    // le admins provient du ficher Auth ( resettings passwords)
    protected function broker()
     {
        return Password::broker('ecoles');
     }
    protected function showLinkRequestForm()
     {
        return view('auth.passwords.email-admin_ecole');
     }


}
