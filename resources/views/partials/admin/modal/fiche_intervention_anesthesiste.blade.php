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
                                    <div class="card-title">FICHE D'INTERVENTION ANESTHESISTE
                                        <small><strong></strong></small>
                                    </div>
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="text-primary"><strong>PATIENT</strong></h5>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nom et prénom du patient :</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Sexe :</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Date de naissance :</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Téléphone :</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-primary"><strong>INTERVENTION</strong></h5>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Type :</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Côté :</td>
                                                <td><input class="form-control" name="cote" type="text" value='{{ old(' cote ') }}'></td>
                                            </tr>
                                            <tr>
                                                <td>Date :</td>
                                                <td><input class="form-control" name="date" type="date" value='{{ old(' date ') }}'></td>
                                            </tr>
                                            <tr>
                                                <td>Chirurgien :</td>
                                                <td></td>
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
                                                               value="Bloc"> Bloc
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
