<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Ecole;
use App\User;
use App\Admin;

use App\Models\Event;
use MercurySeries\Flashy\Flashy;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Affichages des données de l'utilisateurs à l'admin
            // $Admin = Admin::all();
            $Admines = Admin::all();
         
                // dd($Admine->id); 
            // dd($Admine->id);
            // $E = Event::take(3)->orderBy('created_at','DESC')->get();
            // dd($E);
            // $Users = new User;
            $Users = User::take(8)->orderBy('created_at','DESC')->get();
            // dd($Users);
            // $Users = User::paginate(8);
             $events = new Event;
             $Compteur_events = Event::all();
             
         // dd($Compteur_events);
          // $events = Event::all()->where('admins_id_pub',$Admine->id);
          $events = Event::orderBy('created_at','DESC')->where('admins_id_pub',Auth::user()->id)->get();
          // dd($Admine->name);
          // $events = Event::paginate(8);
          $categories = category::all();
          $Ecoles = Ecole::all();
             // dd($Ecoles);
          // Montre l'utilisateur courant connecté
            // $i = Auth::user()->name;
             // dd($i);
        return view('admins_posts',compact('events','Users','categories','Ecoles','Admines','Compteur_events' ) );
    }
}
