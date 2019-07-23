@extends('layouts.admin')

@section('title', 'CMCU | Ajouter un dossier patient')

@section('content')

    <body>
    <div class="se-pr-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->

        <div class="container">
            <h1 class="text-center">Prescrire un Examen</h1>
            <hr>
            @include('partials.flash_form')

            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">Prescrire un Examen</h5>
                    <small class="text-info" title="Les champs marqués par une étoile rouge sont obligatoire"><i class="fas fa-info-circle"></i></small>
                    <hr>
                    <form class="form-group col-md-10" action="{{ route('prescriptions.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                    <label for="Hématologie"> Hématologie : <span class="text-danger"></span></label>
                                    <select class="form-control" name="Hématologie" id="Hématologie" >
                                        <option>NFS</option>
                                        <option>Groupe</option>
                                        <option>rhésus</option>
                                        <option>Vitesse de sédimentation</option>
                                        <option>CRP</option>
                                        <option>Autres</option>
                                    </select>
                                    
                            </div>
                            <div class="form-group">
                                    <label for="Hémostase"> Hémostase : <span class="text-danger"></span></label>
                                    <select class="form-control" name="Hémostase" id="Hémostase" >
                                        <option>Temps de goagulation</option>
                                        <option>Temps de céphaline activé</option>
                                        <option>Temps de saignement</option>
                                        <option>Temps de thrombine</option>
                                        <option>Taux de prothrombine (INR)</option>
                                        <option>Autres </option>
                                    </select>      
                            </div>
                            <div class="form-group">
                                    <label for="Biochimie"> Biochimie : <span class="text-danger"></span></label>
                                    <select class="form-control" name="Biochimie" id="Biochimie" >
                                        <option>Glycémie</option>
                                        <option>Lonogramme Na + / K+ / Cl- / Ca +</option>
                                        <option>Acide Urique</option>
                                        <option>Créatinine</option>
                                        <option>Clairance de la Créatine</option>
                                        <option>Amylases</option>
                                        <option>Lipases</option>
                                        <option>Gamma GT</option>
                                        <option>Transaminases (GOT – GPT)</option>
                                        <option>Cholesterol (HDL-LDL)</option>
                                        <option>LDH </option>
                                        <option>Phosphatases</option>
                                        <option>alcalines</option>
                                        <option>Autres</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="Hormonologie_Sérologie"> Hormonologie/Sérologie : <span class="text-danger"></span></label>
                                    <select class="form-control" name="Hormonologie_Sérologie" id="Hormonologie_Sérologie" >
                                        <option>FSH</option>
                                        <option>LH</option>
                                        <option>Prolactine</option>
                                        <option>TSH</option>
                                        <option> PTH</option>
                                        <option>AMH</option>
                                        <option>Inhibine B</option>
                                        <option>Testostérone libre</option>
                                        <option>Sérologie chlamydia</option>
                                        <option>Sérologie syphilis</option>
                                        <option>Sérologie Hépatite C</option>
                                         <option>Sérologie Hépatite B</option>
                                         <option>Caryotype</option>
                                         <option>Autres</option>
                                     </select>
                            </div>
                            <div class="form-group">
                                    <label for="Marqueurs_Tumoraux"> Marqueurs/Tumoraux : <span class="text-danger"></span></label>
                                    <select class="form-control" name="Marqueurs_Tumoraux" id="Marqueurs_Tumoraux" >
                                        <option>PSA Total</option>
                                        <option> PSA Libre</option>
                                        <option>XFP</option>
                                        <option>BHCG</option>
                                        <option>CEA </option>
                                        <option>CA 15,3</option>
                                        <option>CA 125</option>
                                        <option>CA 19,9</option>
                                        <option> Autres</option>
                                     </select>         
                            </div>
                            <div class="form-group">
                                    <label for="spermiologie"> Spermiologie :  <span class="text-danger"></span></label>
                                    <select class="form-control" name="spermiologie" id="spermiologie" >
                                        <option>Spermogramme</option>
                                        <option>Spermoculture</option>
                                        <option>Contrôle Vsectomie</option>
                                        <option>Fructose</option>
                                        <option>Alpha Glucosidase</option>
                                        <option>Autres</option>
                                    </select>    
                            </div>
                            <div class="form-group">
                                    <label for="Bactériologie_Parasitologie"> Bactériologie/Parasitologie : <span class="text-danger"></span></label>
                                    <select class="form-control" name="Bactériologie_Parasitologie" id="Bactériologie_Parasitologie" >
                                        <option>Prélèvement utétral</option>
                                        <option>Prélèvement pus</option>
                                        <option>Recherche chlamydia</option>
                                        <option> Goutte épaisse</option>
                                        <option>Hémoculture</option>
                                        <option>Recherche BKcrachats</option>
                                        <option>Coproculture</option>
                                        <option>Autres </option>
                                    </select>        
                            </div>
                            <div class="form-group">
                                    <label for="Urines"> Urines : <span class="text-danger"></span></label>
                                    <select class="form-control" name="Urines" id="Urines" >
                                        <option> Anatomo – Cytopathologie</option>
                                        <option>Recherche BK</option>
                                        <option> Examen Cytobactérioloque et Antibiogramme</option>
                                        <option>Recherche Shistozomiase</option>
                                        <option>Autres</option>
                                     </select>
                                      
                            </div>
                        </div>

                            </br>

                            <button type="submit" class="btn btn-primary btn-lg col-md-5" title="En cliquant sur ce bouton vous enregistrer un nouveau patient">Ajouter</button>
                            <a href="{{ route('patients.index') }}" class="btn btn-warning btn-lg col-md-5 offset-md-1" title="Retour à la liste des patients">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </body>

@stop
