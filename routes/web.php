<?php

Route::get('/', 'AdminController@index');

//Auth::routes();


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () {


    Route::get('/', 'AdminController@index');
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');


    Route::get('users', 'UsersController@index')->name('users.index');
    Route::get('users/create', 'UsersController@create')->name('users.create');
    Route::post('users', 'UsersController@store')->name('users.store');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::patch('users/{user}', 'UsersController@update')->name('users.update');
    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');


    Route::get('roles', 'RolesController@index')->name('roles.index');
    Route::get('roles/create', 'RolesController@create')->name('roles.create');
    Route::post('roles', 'RolesController@store')->name('roles.store');
    Route::get('roles/{role}/edit', 'RolesController@edit')->name('roles.edit');
    Route::patch('roles/{role}', 'RolesController@update')->name('roles.update');
    Route::delete('roles/{role}', 'RolesController@destroy')->name('roles.destroy');


    Route::get('produits', 'ProduitsController@index')->name('produits.index');
    Route::get('produits/create', 'ProduitsController@create')->name('produits.create');
    Route::post('produits', 'ProduitsController@store')->name('produits.store');
    Route::get('produits/{produit}/edit', 'ProduitsController@edit')->name('produits.edit');
    Route::patch('produits/{produit}', 'ProduitsController@update')->name('produits.update');
    Route::delete('produits/{produit}', 'ProduitsController@destroy')->name('produits.destroy');
    Route::get('pharmaceutiques', 'ProduitsController@stock_pharmaceutique')->name('produits.pharmaceutique');
    Route::get('anesthesiste', 'ProduitsController@stock_anesthesiste')->name('produits.anesthesiste');
    Route::get('materiels', 'ProduitsController@stock_materiel')->name('materiels.pharmaceutique');
    Route::get('pharmaceutiques/{id}', 'ProduitsController@add_to_cart')->name('pharmaceutique.cart');
    Route::get('facturation', 'ProduitsController@facturation')->name('pharmaceutique.facturation');

    Route::post('imprimer','ProduitsController@export_pdf')->name('pharmacie.pdf');
    Route::get('supprimer/{id}', 'ProduitsController@getRemoveItem')->name('facturation.supprimer');
    Route::get('reduire/{id}', 'ProduitsController@getReduceByOne')->name('facturation.reduire');
    Route::post('produit/save-invoice/{produit}', 'ProduitsController@saveInvoice')->name('produit.invoice');


    Route::get('events', 'EventsController@index')->name('events.index');
    Route::get('events/create/{patient}', 'EventsController@create')->name('events.create');
    Route::get('events/create', 'EventsController@create')->name('event.create');
    Route::post('events', 'EventsController@store')->name('events.store');
    Route::get('events/{event}/edit', 'EventsController@edit')->name('events.edit');
    Route::patch('events/{event}', 'EventsController@update')->name('events.update');
    Route::delete('events/{event}', 'EventsController@destroy')->name('events.destroy');


    Route::get('patients', 'PatientsController@index')->name('patients.index');
    Route::get('patients/create', 'PatientsController@create')->name('patients.create');
    Route::post('patients', 'PatientsController@store')->name('patients.store');
    Route::get('patients/{patient}', 'PatientsController@show')->name('patients.show');
    Route::patch('patients/{patient}', 'PatientsController@update')->name('patients.update');
    Route::delete('patients/{patient}', 'PatientsController@destroy')->name('patients.destroy');
    Route::get('patient/{id}','PatientsController@generate_consultation')->name('consultation.pdf');
    Route::get('ordonance/{ordonance}','PatientsController@export_ordonance')->name('ordonance.pdf');

    //Route::post('patients/upload-image/{patientId}', 'PatientController@fileStore')->name('patients.upload');
    //Route::post('patients/delete-image', 'Patient@fileDestroy')->name('patients.deleteImage');

   

    Route::get('examens/', 'PatientimageController@index')->name('examens.index');
    Route::get('examens/create/{patient}', 'PatientimageController@create')->name('examens.create');
    Route::post('examen', 'PatientimageController@store')->name('examens.store');
    Route::get('examens/show/{patient}', 'PatientimageController@show')->name('examens.show');
    Route::get('examensf/{patient}', 'PatientimageController@showall')->name('examens.showall');
    Route::get('examens/{patient}', 'PatientimageController@destroy')->name('examens.destroy');


    Route::get('lettre-de-sortie','PatientsController@index_sortie')->name('index.sortie');
    Route::get('lettre-de-sortie/{patient}','PatientsController@print_sortie')->name('print.sortie');
    Route::delete('lettre-de-sortie/{id}', 'PatientsController@destroy_sortie')->name('destroy.sortie');


    Route::get('prescriptions/create/{patient}', 'PrescriptionController@create')->name('prescriptions.create');
    Route::post('examens', 'PrescriptionController@store')->name('prescriptions.store');
    Route::get('prescription_examens/{id}','PrescriptionController@export_prescription')->name('prescription_examens.pdf');

    Route::get('dossiers/create', 'DossiersController@create')->name('dossiers.create');
    Route::get('dossiers/create/{patient}', 'DossiersController@create')->name('dossiers.create');
    Route::post('dossiers', 'DossiersController@store')->name('dossiers.store');


    Route::get('consultations/create/{patient}', 'ConsultationsController@create')->name('consultations.create');
    Route::get('consultations/{patient}', 'ConsultationsController@show')->name('consultations.show');
    
    Route::get('detatils-consultations/{patient}', 'ConsultationsController@index')->name('consultations.index');
    Route::get('consultations-anesthesique/{patient}', 'ConsultationsController@index_anesthesiste')->name('consultations.index_anesthesiste');
    Route::post('consultations', 'ConsultationsController@store')->name('consultations.store');
    Route::post('consultation-anesthesiste', 'ConsultationsController@Astore')->name('consultation_anesthesiste.store');
    Route::get('consentement-eclaire/{patient}', 'ConsultationsController@Export_consentement_eclaire')->name('consentement_eclaire.pdf');
    Route::get('consultations/{id}','ConsultationsController@export')->name('consulatations.pdf');

    Route::post('fiche-intervention', 'CompteRenduBlocOperatoireController@StoreFicheIntervention')->name('fiche_intervention.store');
    Route::get('fiche-intervention-preview/{id}', 'CompteRenduBlocOperatoireController@Print_ficheIntervention')->name('fiche_intervention.pdf');

    Route::get('compte-rendu-bloc-global/{patient}', 'CompteRenduBlocOperatoireController@index')->name('compte_rendu_bloc.index');
    Route::get('compte-rendu-bloc/create/{patient}', 'CompteRenduBlocOperatoireController@create')->name('compte_rendu_bloc.create');
    Route::post('compte-rendu-bloc', 'CompteRenduBlocOperatoireController@store')->name('compte_rendu_bloc.store');
    Route::get('compte-rendu-bloc/{id}', 'CompteRenduBlocOperatoireController@compte_rendu_bloc_pdf')->name('compte_rendu_bloc_pdf.pdf');



    Route::post('ordonances', 'OrdonancesController@store')->name('ordonances.store');
    Route::get('ordonance-creation/create/{patient}','OrdonancesController@ordonance_create')->name('ordonance.create');


    Route::post('soins', 'SoinsController@store')->name('soins.store');


    Route::post('parametres', 'ParametresController@store')->name('parametres.store');


    Route::get('/chambres', 'ChambresController@index')->name('chambres.index');
    Route::post('/chambres', 'ChambresController@store')->name('chambres.store');
    Route::get('/chambres/create', 'ChambresController@create')->name('chambres.create');
    Route::get('/chambres/{chambre}/edit', 'ChambresController@edit')->name('chambres.edit');
    Route::patch('/chambres-update/{chambre}', 'ChambresController@update')->name('chambres.update');
    Route::patch('/chambres-attribute/{chambre}', 'ChambresController@updateStatus')->name('chambres_status.update');
    Route::patch('/chambres-liberer/{chambre}', 'ChambresController@updateMinus')->name('chambres_minus.update');
    Route::get('/chambres/{chambre}/attribute', 'ChambresController@attribute')->name('chambres.attribute');


    Route::get('/factures', 'FactureController@index')->name('factures.index');
    Route::get('/factures/{facture}', 'FactureController@show')->name('factures.show');
    Route::delete('/facture', 'FactureController@destroy')->name('factures.destroy');
    Route::get('/factures-consultation', 'FactureController@FactureConsultation')->name('factures.consultation');
    Route::get('/factures-chambre', 'FactureController@FactureChambre')->name('factures.chambre');
    Route::get('patient-facture/{id}','FactureController@export_consultation')->name('factures.consultation_pdf');

    Route::get('/factures-client', 'FactureController@FactureClient')->name('factures.client');
    Route::get('facture/{id}','FactureController@export_client')->name('factures.client_pdf');
   


    Route::resource('/fiches', 'FichesController');
    Route::get('fiche/{id}','FichesController@export_pdf')->name('fiche.pdf');

    Route::get('devis/create', 'DevisController@create')->name('devis.create');
    Route::post('devis', 'DevisController@store')->name('devis.store');
    Route::get('devis', 'DevisController@index')->name('devis.index');
    Route::get('devis/{id}','DevisController@export_devis')->name('devis.pdf');

    Route::get('devisimage/', 'DevisImageController@index')->name('devisimage.index');
    Route::get('devisimage/create', 'DevisImageController@create')->name('devisimage.create');
    Route::post('devisimage', 'DevisImageController@store')->name('devisimage.store');
    Route::get('devisimage/show/{patient}', 'DevisImageController@show')->name('devisimage.show');
    Route::get('devisimagef/{patient}', 'DevisImageController@showall')->name('devisimage.showall');
   


    Route::get('clients', 'ClientController@index')->name('clients.index');
    Route::get('clients/create', 'ClientController@create')->name('clients.create');
    Route::post('clients', 'ClientController@store')->name('clients.store');
    Route::patch('clients/{client}', 'ClientController@update')->name('clients.update');
    Route::delete('clients/{client}', 'ClientController@destroy')->name('clients.destroy');

    Route::get('client/{id}','ClientController@generate_client')->name('clientP.pdf');



    Route::get('premedication-adaptation-traitement/{patient}', 'AnesthesisteController@Premdication_Traitement')->name('premedication_adaptation.index');
    Route::post('visite-pre-anesthesique', 'AnesthesisteController@VisitePreanesthesiqueStore')->name('visite_preanesthesique.store');
    Route::post('premedication-consigne-preparation', 'AnesthesisteController@PremedicationConsignePreparationStore')->name('premedication_consigne_preparation.store');
    Route::post('traitement-hospitalisation', 'AnesthesisteController@TraitementHospitalisationStore')->name('traitement_hospitalisation.store');
    Route::post('adaptation-traitement', 'AnesthesisteController@AdaptationTraitementPersoStore')->name('adaptation_traitement.store');


});
