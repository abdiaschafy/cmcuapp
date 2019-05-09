<?php

Route::get('/', 'AdminController@index');

//Auth::routes();


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () {


    Route::get('/', 'AdminController@index');
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');


//    Route::resource('/users', 'UsersController');


    Route::get('users', 'UsersController@index')->name('users.index');
    Route::get('users/create', 'UsersController@create')->name('users.create');
    Route::post('users', 'UsersController@store')->name('users.store');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::patch('users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');


//    Route::resource('/roles', 'RolesController');


    Route::get('roles', 'RolesController@index')->name('roles.index');
    Route::get('roles/create', 'RolesController@create')->name('roles.create');
    Route::post('roles', 'RolesController@store')->name('roles.store');
    Route::get('roles/{role}/edit', 'RolesController@edit')->name('roles.edit');
    Route::patch('roles/{role}', 'RolesController@update')->name('roles.update');
    Route::delete('roles/{role}', 'RolesController@destroy')->name('roles.destroy');


//    Route::resource('/produit', 'ProduitsController');


    Route::get('produits', 'ProduitsController@index')->name('produits.index');
    Route::get('produits/create', 'ProduitsController@create')->name('produits.create');
    Route::post('produits', 'ProduitsController@store')->name('produits.store');
    Route::get('produits/{produit}/edit', 'ProduitsController@edit')->name('produits.edit');
    Route::patch('produits/{produit}', 'ProduitsController@update')->name('produits.update');
    Route::delete('produits/{produit}', 'ProduitsController@destroy')->name('produits.destroy');
    Route::get('pharmaceutiques', 'ProduitsController@stock_pharmaceutique')->name('produits.pharmaceutique');
    Route::get('materiels', 'ProduitsController@stock_materiel')->name('materiels.pharmaceutique');
    Route::get('pharmaceutiques/{id}', 'ProduitsController@add_to_cart')->name('pharmaceutique.cart');
    Route::get('facturation', 'ProduitsController@facturation')->name('pharmaceutique.facturation');

    Route::get('supprimer/{id}', 'ProduitsController@getRemoveItem')->name('facturation.supprimer');
    Route::get('reduire/{id}', 'ProduitsController@getReduceByOne')->name('facturation.reduire');


//    Route::resource('/events', 'EventsController');


    Route::get('events', 'EventsController@index')->name('events.index');
    Route::get('events/create', 'EventsController@create')->name('events.create');
    Route::post('events', 'EventsController@store')->name('events.store');
    Route::get('events/{event}/edit', 'EventsController@edit')->name('events.edit');
//    Route::get('events/{event}', 'EventsController@show')->name('events.show');
    Route::patch('events/{event}', 'EventsController@update')->name('events.update');
    Route::delete('events/{event}', 'EventsController@destroy')->name('events.destroy');


//    Route::resource('/patients', 'PatientsController');


    Route::get('patients', 'PatientsController@index')->name('patients.index');
    Route::get('patients/create', 'PatientsController@create')->name('patients.create');
    Route::post('patients', 'PatientsController@store')->name('patients.store');
    Route::get('patients/{patient}', 'PatientsController@show')->name('patients.show');
    Route::patch('patients/{patient}', 'PatientsController@update')->name('patients.update');
    Route::delete('patients/{patient}', 'PatientsController@destroy')->name('patients.destroy');


//    Route::resource('/dossiers', 'DossiersController');


    Route::get('dossiers', 'DossiersController@index')->name('dossiers.index');
    Route::get('dossiers/create', 'DossiersController@create')->name('dossiers.create');
    Route::post('dossiers', 'DossiersController@store')->name('dossiers.store');
    Route::get('dossiers/{dossier}/edit', 'DossiersController@edit')->name('dossiers.edit');
    Route::patch('dossiers/{dossier}', 'DossiersController@update')->name('dossiers.update');
    Route::delete('dossiers/{dossier}', 'DossiersController@destroy')->name('dossiers.destroy');
    Route::get('dossiers', 'DossiersController@parametre_store')->name('parametres.store');


//    Route::resource('/consultations', 'ConsultationsController');


    Route::get('consultations/create/{patient}', 'ConsultationsController@create')->name('consultations.create');
    Route::post('consultations', 'ConsultationsController@store')->name('consultations.store');
    Route::get('consultation/{id}','ConsultationsController@export_pdf')->name('consultation.pdf');


    Route::post('ordonances', 'OrdonancesController@store')->name('ordonances.store');
    Route::get('ordonances/{id}','OrdonancesController@export_pdf')->name('ordonances.pdf');



    Route::post('soins', 'SoinsController@store')->name('soins.store');


    Route::post('parametres', 'ParametresController@store')->name('parametres.store');


  Route::resource('/fiches', 'FichesController');
    Route::resource('/chambres', 'ChambresController');
    Route::get('/classique', 'ChambresController@chambres_classique')->name('chambres.classique');
    Route::get('/mvp', 'ChambresController@chambres_mvp')->name('chambres.mvp');
    Route::get('/vip', 'ChambresController@chambres_vip')->name('chambres.vip');


//    Route::get('fiches', 'FichesController@index')->name('fiches.index');
//    Route::get('fiches/create', 'FichesController@create')->name('fiches.create');
//    Route::post('fiches', 'FichesController@store')->name('fiches.store');
//    Route::get('fiches', 'FichesController@show')->name('fiches.show');
//    Route::delete('fiches', 'FichesController@destroy')->name('fiches.destroy');
    Route::get('fiche/{id}','FichesController@export_pdf')->name('fiche.pdf');


});
