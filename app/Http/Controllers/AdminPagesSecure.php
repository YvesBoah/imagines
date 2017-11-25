<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\category;
use App\Models\Event;
use App\Models\Concours;
use App\Models\Offres_Emplois;
use App\Models\Offres_Stage;
use App\Admin;
use App\User;
use Auth;

class AdminPagesSecure extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    		//recuperation et affichages des données présentes dans la table 
    	$category = category::all();
    	$Admins = Admin::first();
    	//dd($category);
    	return view('category.index',compact('category','Admins'));
    }


    public function create()
    {
    		$Admins = Admin::first();
    	return view('category.create',compact('Admins') );
    }
 	public function edit($id)
    {
    		$Admins = Admin::first();
    		$category = category::all();
    		$category = category::findOrFail($id);
    	return view('category.edit',compact('Admins','category') );
    }
	public function update(Request $request, $id)
    {
    	$this->validate($request,[
    	'titre_category'=>'required:string|min:4',
    	'slug'=>'required:string|min:3',
    	]);
    		$Admins = Admin::first();
    		$category = category::all();
    		$category = category::findOrFail($id);

    		$category->update([
    			'titre_category'=>$request->titre_category,
    				'slug'=>$request->slug
    		]);
    	session()->flash('message',' La Catégorie à bien Mise à jour ');
    	session()->flash('type','success');
    	return redirect()->route('admins_posts.dashboard');
    }

	public function store(Request $request)
    {
    		$category = category::get();
    		$Admins = Admin::first();
    		// Validation des champs ou tuples
    	$this->validate($request,[
    		'titre_category'=>'required:string|min:4',
    		'slug'=>'required:string|min:3',
    	]);
    	
    	category::create([
    				'titre_category'=>$request->titre_category,
    				'slug'=>$request->slug
    	]);

    	 session()->flash('message',' La Catégorie à bien été créer avec succèss ');
    	session()->flash('type','success');
    	return redirect()->route('admins_posts.dashboard');
    }

    public function show($id)
         {
           $category = category::findOrFail($id);
           // Via ce identifiant on doit pouvoir Afficher notre article
           // return view('category.show',compact('category'));
           return redirect()->route('admins_posts.dashboard');
         }


         public function destroy($id)
         {
         	$category = category::findOrFail($id);
        $category=	category::destroy($id);
         	session()->flash('message',' La Catégorie à bien été Supprimer avec succèss ');
     		session()->flash('type','danger ');
      // redirection sur la page d'acceuil de l'admin
       return redirect()->route('admins_posts.dashboard');
         }



         public function Pub()
         {
          $Events = Event::all();
          // dd($Events);
          return view('admin_vue.pub',compact('Events','Event'));
         }

        public function concours()
         {
          $Concours = Concours::all();
          // dd($Concours);
          return view('admin_vue.concours',compact('Concours'));
           foreach($Concours as $Concour){
                   } 
         }

        public function emplois()
         {
          $Offres_Emplois = Offres_Emplois::all();
         
          
          // dd($Offres_Emplois);
          return view('admin_vue.emplois',compact('Offres_Emplois'));
         }
        public function calendar()
         {
                 
          return view('admin_vue.calendar');
         }


         public function stage()
         {
          $Offres_Stage = Offres_Stage::all();
    
            // dd($stage);
          return view('admin_vue.stage',compact('Offres_Stage','stage') );
         }
        public function user()
         {
          $User = User::all();
    
            // dd($stage);
          return view('admin_vue.user',compact('User') );
         }

         public function view_edit_Admin()
         {
            return view('admin_vue.edit')->withUser(Auth::user());
         }
          public function edit_Admin(Request $request){

        // dd($Admin);
            
    //         // Si on a un fichier qui à été uploader
        $avatar = $request->file('avatar');
            // Alors je le renomme en appellant la fonction time()
        // Puis je récupère son extension et  je le concatène au fichier renomer
        $NomAvatar = time().'.'.$avatar->getClientOriginalExtension();
        // Enfin je le déplace vers un dossier qui le réceptionnera
        $avatar->move(public_path("avatars"),$NomAvatar);
        // dd($avatar);
             
         
      $Admin =  Admin::findOrFail(Auth::user()->id);

   // $Admin =  Admin::findOrFail(Auth::user()->id);
  

     $Admin->update([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=> bcrypt($request->password),
           'avatar'=>$NomAvatar,
           'job'=>$request->job,
           'contact'=>$request->contact
           
        
      ]);


// return view('Layouts.profil')->withUser(Auth::user());
      // return view('Layouts.app', array('user' => Auth::user()) );
     session()->flash('message',' Votre Profil a Bien été mis a jour ');
     session()->flash('type','success');
     return redirect()->route('admins_posts.dashboard');

        
    }

}
