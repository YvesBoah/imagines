<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

// Ce controlleur gère la vue coté client
class vue_client extends Controller
{
   
    
    public function annonces_concours()
    {
        return view('Layouts.concours');
    }
    public function annonces_connection()
    {
        return view('Layouts.connection');
    }
    public function annonces_ecole()
    {
        return view('Layouts.ecole');
    }
    public function annonces_emplois()
        {
            return view('Layouts.emplois');
        }
    public function annonces_filieres()
        {
            return view('Layouts.filieres');
        }
    public function annonces_forum()
        {
            return view('Layouts.forum');
        }
    public function annonces_inscription()
            {
                return view('Layouts.inscription');
            }

    public function annonces_stage()
            {
                return view('Layouts.stage');
            }

 




}
