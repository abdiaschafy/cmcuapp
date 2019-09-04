@can('anesthesiste', \App\Patient::class)
    <div class="col-md-8  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                @include('partials.flash_form')
                <h3 class="card-title">Consultation anesthésiste</h3>
                <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention
                            !! espace réservé à l'anesthésiste</strong></i>
                </small>
                <table class="table table-user-information ">
                    <tbody>
                    <form action="{{ route("consultation_anesthesiste.store") }}" method="post">
                        @csrf
                        <tr>
                            <td>
                                <h5 class="text-primary"><strong>CONSULTATION</strong></h5>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Anesthésie en salle d'opération :</b> <span class="text-danger">*</span></td>
                            <td class="form-group small">
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="anesthesie_salle[]"
                                           value="Ambulatoire"> Ambulatoire
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="anesthesie_salle[]"
                                           value="Urgence"> Urgence
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="anesthesie_salle[]"
                                           value="Entrée le jour de l'intervention"> Entrée le jour de l'intervention
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="anesthesie_salle[]"
                                           value="Hospit < 10 jours"> Hospit < 10 jours
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Date d'hospitalisation :</b></td>
                            <td>
                                <input type="date" class="form-control col-md-6" name="date_hospitalisation" value="{{ old('date_hospitalisation') }}" >
                            </td>
                        </tr>
                        <tr>
                            <td><b>Service :</b></td>
                            <td><input type="text" class="form-control" name="service" placeholder="Ex: Urologie"></td>
                        </tr>
                        <tr>
                            <td><b>Classe ASA :</b></td>
                            <td><input type="text" class="form-control" name="classe_asa" placeholder="Classe ASA"></td>
                        </tr>
                        <tr>
                            <td><b>Antécédents / Traitements :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea wrap="hard" name="antecedent_traitement" cols="45" rows="5"
                                                      required>{{ old('antecedent_traitement') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Examens cliniques :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea wrap="hard" name="examen_clinique" cols="45" rows="5"
                                                      required>{{ old('examen_clinique') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Allergies :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea wrap="hard" name="allergie" cols="45" rows="5"
                                                      required>{{ old('allergie') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Intubation :</b></td>
                            <td><input type="text" class="form-control" name="intubation"></td>
                        </tr>
                        <tr>
                            <td><b>Mallampati :</b></td>
                            <td><input type="text" class="form-control" name="mallampati"></td>
                        </tr>
                        <tr>
                            <td><b>Distance-interincisive :</b></td>
                            <td><input type="text" class="form-control" name="distance-interincisive"></td>
                        </tr>
                        <tr>
                            <td><b>Distance thyromentonière :</b></td>
                            <td><input type="text" class="form-control" name="distance_thyromentoniere"></td>
                        </tr>
                        <tr>
                            <td><b>Mobilité cervicale :</b></td>
                            <td><input type="text" class="form-control" name="mobilite_servicale"></td>
                        </tr>
                        <tr>
                            <td><b>Traitement en cours :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea wrap="hard" name="traitement_en_cours" cols="45" rows="5"
                                                      required>{{ old('traitement_en_cours') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Rique(s) :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea wrap="hard" name="risque" cols="45" rows="5"
                                                      required>{{ old('risque') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="text-primary"><strong>DECISON / PRESCRIPTIONS</strong></h5>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Informations données au patient :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea wrap="hard" name="information_patient" cols="45" rows="5"
                                                      required>{{ old('information_patient') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Technique d'anesthésie envisagée :</b> <span class="text-danger">*</span></td>
                            <td class="form-group small">
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="technique_anesthesie[]"
                                           value="Anesthésie"> Anesthésie
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="technique_anesthesie[]"
                                           value="Antibiopraphilaxie"> Antibiopraphilaxie
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Synthèse pré-opératoire :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea wrap="hard" name="synthese_preop" cols="45" rows="5"
                                                      required>{{ old('synthese_preop') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Examens paracliniques :</b> </td>
                            <td class="form-group small">
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="examen_paraclinique[]"
                                           value="E.C.G"> E.C.G
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="examen_paraclinique[]"
                                           value="Rx.Torax"> Rx.Torax
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="examen_paraclinique[]"
                                           value="Gr / Rh"> Gr / Rh
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="examen_paraclinique[]"
                                           value="Hospit < 10 jours"> Hospit < 10 jours
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="examen_paraclinique[]"
                                           value="NFS"> NFS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="anesthesie_salle[]"
                                           value="Iono - urée Créat"> Iono - urée Créat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1"
                                           type="checkbox" name="examen_paraclinique[]"
                                           value="TP - TCK"> TP - TCK
                                    </label>
                                </div>
                                <label for="autre">Autres :</label>
                                <input type="text" class="form-control" name="examen_paraclinique[]">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </td>
                            <td></td>
                        </tr>
                    </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endcan
