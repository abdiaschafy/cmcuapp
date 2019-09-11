<div class="modal fade" id="FicheInterventionAnesthesiste" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">FICHE D'INTERVENTION</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('soins.store') }}" method="post">
                    @csrf
                    <div class="container">
                        <div class="col-md-10  toppad">
                            <div class="card">
                                <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="text-primary"><strong>PATIENT</strong></h5>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Nom et prénom du patient :</b></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sexe :</b></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Date de naissance :</b></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Téléphone :</b></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-primary"><strong>INTERVENTION</strong></h5>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Type :</b></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Durée :</b></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><b>Position du patient :</b></td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"> Décubitus
                                                        <div class="row offset-1">
                                                            <input type="checkbox" class="form-check-input checkmark"> Latéral
                                                            <div class="row offset-2">
                                                                <input type="checkbox" class="form-check-input"> Droite
                                                            </div>
                                                            <div class="row offset-3">
                                                                <input type="checkbox" class="form-check-input"> Gauche
                                                            </div>
                                                        </div>
                                                        <div class="row offset-1">
                                                            <input type="checkbox" class="form-check-input"> Dorsal
                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"> Lithotomie
                                                    </div>
                                                    <div class="form-check">
                                                        <div class="row offset-1">
                                                            <input type="checkbox" class="form-check-input"> Lombotomie
                                                            <div class="row offset-2">
                                                                <input type="checkbox" class="form-check-input"> Droite
                                                            </div>
                                                            <div class="row offset-3">
                                                                <input type="checkbox" class="form-check-input"> Gauche
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"> Trendelenburg
                                                    </div>
                                                    <label for="autre">Autre :</label>
                                                    <input type="text" class="form-control" name="autre">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Date :</b></td>
                                                <td><input class="form-control" name="date" type="date" value='{{ old(' date ') }}'></td>
                                            </tr>
                                            <tr>
                                                <td><b>Chirurgien :</b></td>
                                                <td>
                                                    <input type="text" class="form-control" name="autre">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Aide opératoire :</b> <span class="text-danger">*</span></td>
                                                <td class="form-group small">
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="aide_op[]"
                                                               value="Oui"> Oui
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="aide_op[]"
                                                               value="Non"> Non
                                                        </label>
                                                    </div>
                                            </tr>
                                            <tr>
                                                <td><b>Hospitalisation :</b> <span class="text-danger">*</span></td>
                                                <td class="form-group small">
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="hospitalisation"
                                                               value="Hospitalisation"> Hospitalisation
                                                        </label>
                                                        <input type="text" placeholder="Heure">
                                                    </div>
                                            </tr>
                                            <tr>
                                                <td><b>Ambulatoire :</b> <span class="text-danger">*</span></td>
                                                <td class="form-group small">
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="hospitalisation"
                                                               value="Ambulatoire"> Ambulatoire
                                                        </label>
                                                    </div>
                                            </tr>
                                            <tr>
                                                <td><b>Anesthésie :</b> <span class="text-danger">*</span></td>
                                                <td class="form-group small">
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="anesthesie[]"
                                                               value="AL"> AL
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="anesthesie[]"
                                                               value="AG"> AG
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="anesthesie[]"
                                                               value="LR"> LR
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="anesthesie[]"
                                                               value="RA"> RA
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="anesthesie[]"
                                                               value="Ambulatoire"> PD
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" tabIndex="1"
                                                               type="checkbox" name="anesthesie[]"
                                                               value="ALR"> ALR
                                                        </label>
                                                    </div>
                                            </tr>
                                            <tr>
                                                <td><b>RECOMMENDATION(S) :</b></td>
                                                <td>
                                            <textarea wrap="hard" name="recommendqtion" cols="45" rows="5"
                                                      required>{{ old('recommendqtion') }}</textarea>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-primary">Ajouter au dossier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                </form>
            </div>
        </div>
    </div>
</div>
