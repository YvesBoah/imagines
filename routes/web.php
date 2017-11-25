<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|   Configuration des routes
*/
/*
* Le Controller gérant Les utilisateurs non connectés  ou visiteurs
* est Appellé  vue_client
 */
//  Route pour la vue Utilisateur Connecté

// route pour la vue utilisateur non connecté (& aussi connecté)


Route::get('/concours',[
    'as' => 'infos_concours',
    'uses'=> 'vue_client@annonces_concours',
]);
Route::get('/connection',[
    'as' => 'infos_connection',
    'uses'=> 'vue_client@annonces_connection',
]);
Route::get('/ecole',[
    'as' => 'infos_ecole',
    'uses'=> 'vue_client@annonces_ecole',
]);
Route::get('/emplois-jeune',[
    'as' => 'infos_emplois',
    'uses'=> 'vue_client@annonces_emplois',
]);
Route::get('/emplois-jeune',[
    'as' => 'infos_emplois',
    'uses'=> 'vue_client@annonces_emplois',
]);
Route::get('/filieres',[
    'as' => 'infos_filieres',
    'uses'=> 'vue_client@annonces_filieres',
]);
Route::get('/forum',[
    'as' => 'infos_forum',
    'uses'=> 'vue_client@annonces_forum',
]);
Route::get('/inscription',[
    'as' => 'infos_inscription',
    'uses'=> 'vue_client@annonces_inscription',
]);
Route::get('/stage-jeune',[
    'as' => 'infos_stage',
    'uses'=> 'vue_client@annonces_stage',
]);


    // Debut de la creation de categories 
    // Debut de la creation de categories 
Route::resource('category','AdminPagesSecure');
Route::get('/category/create',[
    'as' => 'infos_category_create',
    'uses'=> 'AdminPagesSecure@create',
    'middleware' => 'auth:admin',
]);
    // Fin categories 
    // Fin categories 


// Route::resource('concours_fun','EventsController');
Route::resource('events','EventsController');
//Events Controller pour les publications
// Route inacessible a l'utilisateur : reserver a l'admin
Route::get('/events/create',[
    'as' => 'infos_create',
    'uses'=> 'EventsController@create',
    'middleware' => 'auth:admin',
]);
Route::get('/events',[
    'as' => 'infos_indexe',
    'uses'=> 'EventsController@index',
    
]);
Route::get('events/{event}/edit',[
    'as' => 'infos_edit',
    'uses'=> 'EventsController@edit',
    'middleware' => 'auth:admin',
]);
// Route inacessible a l'utilisateur : reserver a l'admin
Route::get('/',[
    'as' => 'infos_acceuil',
    'uses'=> 'EventsController@home',
]);
Route::get('/actualites',[
    'as' => 'infos_news',
    'uses'=> 'EventsController@actualites',
]);
// Route::get('/actualites',function(){
//    dump( DB::select('SELECT * from events') );
   
// });
//Events Controller pour les publications



/*
* Le Controller gérant Les utilisateurs connectés
* est Appellé  HomeController
 */
//  Route pour la vue Utilisateur Connecté

Route::get('/profil',[
    'as' => 'infos_profil',
    'uses'=> 'HomeController@annonces_profil',
]);
//  Route permettant l'upload de l'image du profil
Route::post('/profil',[
    'as' => 'infos_profil',
    'uses'=> 'HomeController@mise_a_jour_avatar',
]);
//  Route permettant l'upload de l'image du profil

//  Route permettant la modif du profil
 Route::get('/edit','HomeController@view_edit')->name('edit');
 Route::post('/edit','HomeController@edit')->name('edit');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Routes Rajouts
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

// Routes Pour L'Admin
    
    Route::prefix('admins_posts')->group(function() 
        {           
Route::get('/', 'AdminController@index')->name('admins_posts.dashboard');

Route::get('/login','Auth\AdminLoginController@ShowLoginForm')->name('admins_posts.login');
Route::post('/login','Auth\AdminLoginController@Login')->name('admins_posts.login.submit');

Route::get('/logout','Auth\AdminLoginController@logout')->name('admins_posts.logout');
        });

// Admin Password reset routes 

    Route::prefix('admins_posts')->group(function() 
        {
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admins_posts.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admins_posts.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admins_posts.password.reset');
        });



//Routes Rajouts Ecoles 

// Routes Pour L'Admin
    
    Route::prefix('admin_ecole')->group(function() 
        {           
Route::get('/', 'Admin_ecole_Controller@index')->name('admin_ecole.dashboard');

Route::get('/logine','Auth\Admin_ecole_LoginController@ShowLoginForm')->name('admin_ecole.login');
Route::post('/logine','Auth\Admin_ecole_LoginController@Login')->name('admin_ecole.login.submit');

Route::get('/logout','Auth\Admin_ecole_LoginController@logout')->name('admin_ecole.logout');
        });

// Admin Password reset routes 

    Route::prefix('admin_ecole')->group(function() 
        {
Route::post('/password/email','Auth\Admin_ecoleForgotPasswordController@sendResetLinkEmail')->name('admin_ecole.password.email');
Route::get('/password/reset','Auth\Admin_ecoleForgotPasswordController@showLinkRequestForm')->name('admin_ecole.password.request');
Route::post('/password/reset','Auth\Admin_ecole_ResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\Admin_ecole_ResetPasswordController@showResetForm')->name('admin_ecole.password.reset');
        });


    // ROUTE POUR LES  VUES DE L'Admnistrateur du site

    route::get('/pub',[
        'as' => 'infos_pub',
        'uses' => 'AdminPagesSecure@Pub'
    ]);
route::get('/concours',[
        'as' => 'infos_concours',
        'uses' => 'AdminPagesSecure@concours'
    ]);
route::get('/emplois',[
        'as' => 'infos_emplois_Admin',
        'uses' => 'AdminPagesSecure@emplois'
    ]);
route::get('/stage',[
        'as' => 'infos_stage_Admin',
        'uses' => 'AdminPagesSecure@stage'
    ]);

route::get('/user',[
        'as' => 'infos_user',
        'uses' => 'AdminPagesSecure@user'
    ]);
route::get('/calendar',[
        'as' => 'infos_calendar',
        'uses' => 'AdminPagesSecure@calendar'
    ]);



Route::get('/edit_admin','AdminPagesSecure@view_edit_Admin')->name('edit_Admin');
 Route::post('/edit_admin','AdminPagesSecure@edit_Admin')->name('edit_Admin');






