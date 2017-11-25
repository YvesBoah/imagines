<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Ecole;
use App\User;
use App\Admin;
use App\Models\Event;
use MercurySeries\Flashy\Flashy;;

class Admin_ecole_Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin_ecole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Affichages des données de l'utilisateurs à l'admin
         $Admin = Admin::all();
            $Users = new User;
            $Users = User::all();
            $Users = User::paginate(8);
             $events = new Event;
          $events = Event::all();
          $categories = category::all();
          $Ecoles = Ecole::all();
        return view('admin_ecole',compact('events','Users','categories','Ecoles','Admin'));
    }
}
