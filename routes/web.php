<?php



Route::get('/', function () {
    return redirect('login');
})->middleware('auth');

Auth::routes();



Route::group(['middleware' => ['auth'] ], function () {
    Route::resource('/home', 'HomeController');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'] ], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::resource('/users', 'UsersController');
    Route::resource('/roles', 'RolesController');
    Route::resource('/produit', 'ProduitController');
    Route::get('/pharmaceutique', 'ProduitController@stock_pharmaceutique')->name('produit.pharmaceutique');
    Route::get('/materiel', 'ProduitController@stock_materiel')->name('materiel.pharmaceutique');
    Route::resource('/events', 'EventController');

    Route::resource('/patients', 'PatientsController');
    Route::resource('/dossiers', 'DossiersController');
    Route::get('/dossiers', 'DossiersController@parametre_store')->name('parametres.store');

    Route::get('/consultation/{id}','PatientsController@export_pdf')->name('consultation.pdf');
    Route::resource('/consultations', 'PatientsController');
    Route::resource('/fiches', 'FichesController');
    Route::get('/fiche/{id}','FichesController@export_pdf')->name('fiche.pdf');
    Route::resource('/consultations', 'ConsultationsController');
});
