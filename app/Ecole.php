<?php

namespace App;
use MercurySeries\Flashy\Flashy;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\Admin_ecoleResetPasswordNotification;

class Ecole extends Authenticatable
{
    use Notifiable;

    protected $guard ='admin_ecole';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Func de rappel de mot de passe !
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new Admin_ecoleResetPasswordNotification($token));
    }


}
