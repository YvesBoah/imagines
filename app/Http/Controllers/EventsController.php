<?php

/*
 Bienvenue dans le controller EventsController
 Controller est destiné au publication de l'administrateur   
*/

//  Debut initialisation des Models

namespace App\Http\Controllers;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\category;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Admin;
use App\User;
use App\Models\Concours;
use App\Models\Offres_Emplois;
use App\Models\Offres_Stage;
use MercurySeries\Flashy\Flashy;


//  Fin initialisation des Models

/*
    La route définie dans le dossier "routes",
    plus précisemet dans la page web ,
     =>"" Route::resource('events','EventsController'); "",
    génère 7 routes basiques pour le système crud : 
     => la route store , index , create , show ,
                 update , destroy , edit .
    Ces fonctions définies ci dessous agissent sur ces routes là,
    ces fonctions là assurent le crud du volet publication,
    dans toutes les catégories .
*/ 

class EventsController extends Controller
{

  // La Fonction Home() permet de retourner la page d'acceuil

   public function home()
    {
       // Récupère tout les enregistrements de la table events
         $events = Event::Paginate(4);
        
         /* Event::Paginate(3) retourne n fois 
            le nombre d'article
         */
        return view('Layouts.acceuil',compact('events'));
    }
  
  // La Fonction Home() permet de retourner la page d'acceuil


   /*
      La Fonction Index permet de retouner
      la page d'acceuil du model de publication
   */

     public function index()
     {
        //$events = Event::with('category')->get();
        $events = Event::Paginate(5);
        //dd($events);
        // recuperation des catégories par la méthode get évitant
        // la redondance de requêtes au niveau du server
     	 return view('events.index',compact('events') )->with('Event',$events);
     }

   /*
      La Fonction Index permet de retouner
      la page d'acceuil du model de publication
   */
      /*
        La Fonction show permet d'afficher les évènements publiés 
        et leurs descriptions du model de publication    
      */ 
      
        public function show($id)
         {
           $event = Event::findOrFail($id);
           // Via ce identifiant on doit pouvoir Afficher notre article
           return view('events.show',compact('event'))->with('Event',$event);
         }

       /*
          La Fonction show permet d'afficher les évènements publiés 
          et leurs descriptions du model de publication    
       */ 

  /*
          La Fonction show permet d'afficher les évènements publiés 
          et leurs descriptions du model de publication    
       */   

  // Start Fonction Actualites()
  
    public function actualites(Event $event)
    {
        
       $events = new Event;
        $events = Event::where('category_id',1)->Paginate(1);
       
     
     return view('Layouts.actualites',compact('events'))->with('Event',$events);
   
    }

  /*
    La Fonction Actualies permet d'afficher les évènements publiés 
    et leurs descriptions précisement l'actualités car selectionez
    par son id . La pagination définit le nombre d'articles,
    a afficher par page
  */   

      // Start function Create()
  public function create()
   {

       $event = new Event;
       /* Instanciation du model event 
        * ceta dire que j'appelle toute 
        * ses proprietés(Champs) a dispositions
        */
         $event = Event::get();
       /*
        *lorqu'on fait un "nom du model suivie de :: get"
        *Ceci récupère tout les données de la table liés
        *au model.C'est la meme chose quand utilisant 
        *la méthode all : $event = Event::all()
        */
      
       //dd($event);
       // $categories = category::get();
       $categories = category::pluck('titre_category','id');
      // dd($categories);
       return view('events.create',compact('event','categories') );
         
   }

      /*
       * la fonction create a pour but de publier des articles
       * dans tout les domaines
      */


      // Start function Edit()

public function edit($id)
   {
      
      /* 
       *Via ce identifiant $id on doit pouvoir editer notre article
       *$categories = category::get();
       * La méthode lists() est obsolète et ne fonctionne plus sur 
       * laravel 5.3 alors nait la méthode Pluck()
       * Pluck a les memes proprietés que lists mais est plus avancés
       *La Méthode Pluck & Lists permettent d'afficher la liste de l'éléments
      */
      $Admins = Admin::first();
        $categories = category::pluck('titre_category','id');
       $event = Event::findOrFail($id);
       return view('events.edit',compact('event','categories','Admins') );
       $this->middleware('auth:admin');
   
      
   }

   /*
   * La fonction édit permet de mettre a jour 
   *le formulaire de la page create
   * Fin de la fonction edit 
   */

   /* Debut de la fonction Store 
    * Elle est la Fonction de " validation "
    * Du formulaire de la page Create 
   */
public function store(Request $request)
   {
        $event = Event::get();
       
         // Vérification des éléments saisies
   	$this->validate($request,[
           'titre_publication' =>'Required|min:3',
           'description_publication'=>'Required|min:5|max:30',
           'contenu_publication'=>'Required|min:15|'

      ]);
        // Upload de fichier 
            // est ce que le fichier existe
          $avatar = $request->file('avatar');
          // Obtenir l'extension
          $nomAvatar = time().'.'.$avatar->getClientOriginalExtension();
            // time() génère un nom aléatoire
              // $chemin = public_path('/avatars/'.$nomAvatar);
          $avatar->move(public_path("image"), $nomAvatar );          
          


     

     

      if ($request->category_id == 2 ) {
        # code...
      
        
      Concours::create(['titre_concours'=>$request->titre_publication,
                     'description_concours'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_concours'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
      ]);

    } else {

    }


      if ($request->category_id == 3 ) {
        # code...
      
        
      Offres_Emplois::create(['titre_emplois'=>$request->titre_publication,
                     'description_emplois'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_emplois'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
      ]);

      } else {

             

    }
      if ($request->category_id == 4 ) {
        # code...
      
        
      Offres_Stage::create(['titre_stage'=>$request->titre_publication,
                     'description_stage'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_stage'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
      ]);

      } else {

                // Creation de la publication
      Event::create(['titre_publication'=>$request->titre_publication,
                     'description_publication'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_publication'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
      ]); 

    }


        // Concours::create(['titre_concours'=>'killer',
        //    'description_concours'=>'concours',
        //               'avatar'=>'nomAvatar',
        //               'contenu_concours'=>'contenu_concours',
        //               'category_id'=>1
        //               ]);

     
      // Flashy :: success ( ' L\'évènement à bien été créer avec succèss ' );
    session()->flash('message',' L\'évènement à bien été créer avec succèss ');
    session()->flash('type','success');
       return redirect()->route('admins_posts.dashboard');

      
      
      
   }

    // Fin de la fonction Store


   /* Debut de la fonction Update 
    * Elle est la Fonction de " Mise à jour "
    * Du formulaire de la page Edit 
   */

      public function update(Request $request, $id)
   {

       
         // Vérification des éléments saisies
    $this->validate($request,[
           'titre_publication' =>'Required|min:3',
           'description_publication'=>'Required|min:5|max:30',
           'contenu_publication'=>'Required|min:15|'

      ]);
          // Modif du fichier Uploader
            // est ce que le fichier existe
          $avatar = $request->file('avatar');
          // Obtenir l'extension
          $nomAvatar = time().'.'.$avatar->getClientOriginalExtension();
            // time() génère un nom aléatoire
              // $chemin = public_path('/avatars/'.$nomAvatar);
          $avatar->move(public_path("image"), $nomAvatar );  
          // On retrouve l'évènement via son id et on fait un coup de update        
        $event=Event::findOrFail($id);    
         
         // Creation de la publication
      $event->update(['titre_publication'=>$request->titre_publication,
                     'description_publication'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_publication'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
                      
      ]);

        $Concours = Concours::first();
        $Offres_Emplois = Offres_Emplois::first();
        $Offres_Stage = Offres_Stage::first();

     if ($request->category_id == 2 ) {
              
      $Concours->update([
                     'titre_concours'=>$request->titre_publication,
                     'description_concours'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_concours'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
      ]);

    } else {

    }


      if ($request->category_id == 3 ) {
        # code...
      
        
      $Offres_Emplois->update(['titre_emplois'=>$request->titre_publication,
                     'description_emplois'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_emplois'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
      ]);

      } else {

             

    }
      if ($request->category_id == 4 ) {
        # code...
      
        
      $Offres_Stage->update(['titre_stage'=>$request->titre_publication,
                     'description_stage'=>$request->description_publication,
                     'avatar'=>$nomAvatar,
                     'contenu_stage'=>$request->contenu_publication,
                     'category_id'=>$request->category_id,
                     'admins_id_pub'=>$request->admins_id_pub,
      ]);

      } else {

             

    }
           

     
      // Flashy :: success ( ' L\'évènement à bien été mis à Jour avec succèss ' );
      session()->flash('message',' L\'évènement à bien été mis à Jour avec succèss ');
      session()->flash('type','success');
      // return redirect()->route('events.show',$id);
        return redirect()->route('admins_posts.dashboard');
   }
 
      //  Fin de la Fonction Update

   // Debut de la fonction de suppression : DESTROY()

      public function destroy($id)
      {
      
            Event::destroy($id);
           // Concours::destroy($id);
           // Offres_Emplois::destroy($id);
           // Offres_Stage::destroy($id);
          

          // Cette methode supprime l'article selectionner par l'$id
      // Flashy :: primary ( ' L\'évènement à bien été Supprimer avec succèss ' );
     session()->flash('message',' L\'évènement à bien été Supprimer avec succèss ');
     session()->flash('type','danger ');
      // redirection sur la page d'acceuil de l'admin
       return redirect()->route('admins_posts.dashboard');
      
      }
    


}
 