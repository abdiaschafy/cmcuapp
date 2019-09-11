@can('anesthesiste', \App\Patient::class)
        <div class="col-md-9  offset-md-0  toppad">
            <div class="card">
                <div class="card-body">
                    @include('partials.flash_form')
                    <h3 class="card-title">Consultation anesthésique</h3>
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
                                <td><b>Spécialité :</b> <span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" class="form-control" name="specialite" value="{{ old('specialite') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Médecin traitant :</b> <span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" class="form-control" name="medecin_traitant" value="{{ old('medecin_traitant') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Opérateur :</b> <span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" class="form-control" name="operateur" value="{{ old('operateur') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Date d'intervention :</b> <span class="text-danger">*</span></td>
                                <td>
                                    <input type="date" class="form-control col-md-6" name="date_intervention" value="{{ old('date_intervention') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Motif d'admission :</b> <span class="text-danger">*</span></td>
                                <td>
                                    <input type="text" class="form-control" name="motif_admission" value="{{ old('motif_admission') }}" required>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Mémo :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control" name="memo" cols="45" rows="3"
                                                      required>{{ old('memo') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Anesthésie en salle d'opération :</b> <span class="text-danger">*</span></td>
                                <td class="form-group small">
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Ambulatoire" {{ (old('anesthesi_salle') == 'Ambulatoire') ? 'checked' : '' }}> Ambulatoire
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Urgence" {{ (old('anesthesi_salle') == 'Urgence') ? 'checked' : '' }}> Urgence
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Entrée le jour de l'intervention" {{ (old('anesthesi_salle') == 'Entrée le jour de l\'intervention') ? 'checked' : '' }}> Entrée le jour de l'intervention
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Hospit < 10 jours" {{ (old('anesthesi_salle') == 'Hospit < 10 jours') ? 'checked' : '' }}> Hospit < 10 jours
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
                                <td><input type="text" class="form-control" value="{{ old('service') }}" name="service" placeholder="Ex: Urologie"></td>
                            </tr>
                            <tr>
                                <td><b>Classe ASA :</b></td>
                                <td><input type="text" class="form-control" value="{{ old('classe_asa') }}" name="classe_asa" placeholder="Classe ASA"></td>
                            </tr>
                            <tr>
                                <td><b>Antécédents / Traitements :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control" name="antecedent_traitement" cols="45" rows="5"
                                                      required>{{ old('antecedent_traitement') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Examens cliniques :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control" name="examen_clinique" cols="45" rows="5"
                                                      required>{{ old('examen_clinique') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Allergies :</b></td>
                                <td>
                                            <textarea wrap="hard" class="form-control" name="allergie" cols="45" rows="5"
                                            >{{ old('allergie') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <label for=""><b>Intubation :</b></label>
                                    <input type="text" class="form-control" value="{{ old('intubation') }}" name="intubation">
                                    <label for=""><b>Mallampati :</b></label>
                                    <input type="text" class="form-control" value="{{ old('mallampati') }}" name="mallampati">
                                    <label for=""><b>Distance-interincisive :</b></label>
                                    <input type="text" class="form-control" value="{{ old('distance_interincisive') }}" name="distance_interincisive">
                                    <label for=""><b>Distance thyromentonière :</b></label>
                                    <input type="text" class="form-control" value="{{ old('distance_thyromentoniere') }}" name="distance_thyromentoniere">
                                    <b>Mobilité cervicale :</b>
                                    <input type="text" class="form-control" value="{{ old('mobilite_servicale') }}" name="mobilite_servicale">
                                <td>
                            </tr>
                            <tr>
                                <td><b>Traitement en cours :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control" name="traitement_en_cours" cols="45" rows="5"
                                                      required>{{ old('traitement_en_cours') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Rique(s) :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control" name="risque" cols="45" rows="5"
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
                                    <label for="">Technique d'anesthésie :</label>
                                    <input type="text" class="form-control" name="technique_anesthesie1">
                                    <label for="">Bénéfice / Risque :</label>
                                    <textarea class="form-control" name="benefice_risque" id="benefice_risque" cols="45" rows="3">{{ old('benefice_risque') }}</textarea>
                                    <label for="">Jeune préopératoire :</label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="jeune_preop[]"> Solides : <input name="solide" class="offset-2 mb-1 ml-10" type="text" placeholder=" H-">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="jeune_preop[]"> Liquides clairs : <input name="liquide" class="offset-1 ml-4" type="text" placeholder=" H-">
                                    </div>
                                    <label for="">Adaptation au traitement personnel :</label>
                                    <textarea wrap="hard" class="form-control" name="adaptation_traitement" cols="45" rows="3"
                                              required>{{ old('adaptation_traitement') }}</textarea>
                                    <label for="">Autre :</label>
                                    <textarea wrap="hard" class="form-control" name="autre1" cols="45" rows="3"
                                              required>{{ old('autre1') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Technique d'anesthésie envisagée :</b> <span class="text-danger">*</span></td>
                                <td class="form-group small">
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Anesthésie générale" {{ (old('technique_anesthesie[]') == 'Anesthésie') ? 'checked' : '' }}> Anesthésie générale
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Sédation" {{ (old('technique_anesthesie[]') == 'Sédation') ? 'checked' : '' }}> Sédation
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Rachidienne" {{ (old('technique_anesthesie[]') == 'Rachidienne') ? 'checked' : '' }}> Rachidienne
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Péridurale" {{ (old('technique_anesthesie[]') == 'Péridurale') ? 'checked' : '' }}> Péridurale
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="ALR" {{ (old('technique_anesthesie[]') == 'ALR') ? 'checked' : '' }}> ALR
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Locale" {{ (old('technique_anesthesie[]') == 'Locale') ? 'checked' : '' }}> Locale
                                        </label>
                                    </div>
                                    <label for="autre2">Autres :</label>
                                    <input type="text" class="form-control" value="{{ old('technique_anesthesie[]') }}" name="technique_anesthesie[]">
                                </td>
                            </tr>
                            <tr>
                                <td><b>Antibioprophylaxie :</b> <span class="text-danger">*</span></td>
                                <td>
                                    <input name="antibiotique" type="text" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Synthèse pré-opératoire :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control" name="synthese_preop" cols="45" rows="5"
                                                      required>{{ old('synthese_preop') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Examens paracliniques :</b> </td>
                                <td class="form-group small">
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="Urée" {{ (old('examen_paraclinique[]') == 'Urée') ? 'checked' : '' }}> Urée
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="Créatinemie" {{ (old('examen_paraclinique[]') == 'Créatinemie') ? 'checked' : '' }}> Créatinemie
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="Ionograme" {{ (old('examen_paraclinique[]') == 'Ionograme') ? 'checked' : '' }}> Ionograme
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="ECBU" {{ (old('examen_paraclinique[]') == 'ECBU') ? 'checked' : '' }}> ECBU
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique"  name="examen_paraclinique[]"
                                               value="VIH" {{ (old('examen_paraclinique[]') == 'VIH') ? 'checked' : '' }}> VIH
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="Glycémie" {{ (old('examen_paraclinique[]') == 'Glycémie') ? 'checked' : '' }}> Glycémie
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="NFS" {{ (old('examen_paraclinique[]') == 'NFS') ? 'checked' : '' }}> NFS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="TP / INR" {{ (old('examen_paraclinique[]') == 'TP / INR') ? 'checked' : '' }}> TP / INR
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="TCK" {{ (old('examen_paraclinique[]') == 'TCK') ? 'checked' : '' }}> TCK
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="Gr / Rh" {{ (old('examen_paraclinique[]') == 'Gr / Rh') ? 'checked' : '' }}> Gr / Rh
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="E.C.G" {{ (old('examen_paraclinique[]') == 'E.C.G') ? 'checked' : '' }}> E.C.G
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="examen_paraclinique" name="examen_paraclinique[]"
                                               value="Echographie cardiaque" {{ (old('examen_paraclinique[]') == 'Echographie cardiaque') ? 'checked' : '' }}> Echographie cardiaque
                                        </label>
                                    </div>

                                    <label for="autre">Autres :</label>
                                    <input type="text" id="examen_paraclinique" class="form-control" value="{{ old('examen_paraclinique[]') }}" name="examen_paraclinique[]">
                                </td>
                            </tr>
                            <tr>
                                <input name="patient_id" value="{{ $patient->id }}" type="hidden">
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
