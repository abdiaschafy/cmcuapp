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
                                <td><b>Mémo :</b> </td>
                                <td>
                                            <textarea wrap="hard" class="form-control splitLines" name="memo" cols="45" rows="3"
                                                      >{{ old('memo') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Anesthésie en salle d'opération :</b> <span class="text-danger">*</span></td>
                                <td class="form-group small">
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Ambulatoire" {{ (old('anesthesi_salle') == 'Ambulatoire') ? 'checked' : '' }}> Ambulatoire
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Urgence" {{ (old('anesthesi_salle') == 'Urgence') ? 'checked' : '' }}> Urgence
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Entrée le jour de l'intervention" {{ (old('anesthesi_salle') == 'Entrée le jour de l\'intervention') ? 'checked' : '' }}> Entrée le jour de l'intervention
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="radio" id="anesthesi_salle" name="anesthesi_salle[]"
                                               value="Hospit < 10 jours" {{ (old('anesthesi_salle') == 'Hospit < 10 jours') ? 'checked' : '' }}> Hospit < 10 jours
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Date d'hospitalisation :</b></td>
                                <td>
                                    <input type="date" class="form-control col-md-6" name="date_hospitalisation" value="{{ old('date_hospitalisation') }}">
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
                                            <textarea wrap="hard" class="form-control splitLines" name="antecedent_traitement" cols="45" rows="5"
                                                      required>{{ old('antecedent_traitement') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Examens cliniques :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control splitLines" name="examen_clinique" cols="45" rows="5"
                                                      required>{{ old('examen_clinique') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Allergies :</b></td>
                                <td>
                                            <textarea wrap="hard" class="form-control splitLines" name="allergie" cols="45" rows="5"
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
                                            <textarea wrap="hard" class="form-control splitLines" name="traitement_en_cours" cols="45" rows="5"
                                                      required>{{ old('traitement_en_cours') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Rique(s) :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control splitLines" name="risque" cols="45" rows="5"
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
                                <td><b>Informations données au patient :</b> </td>
                                <td>
                                    <label for="">Technique d'anesthésie : <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="technique_anesthesie1" required>
                                    <label for="">Bénéfice / Risque : <span class="text-danger">*</span></label>
                                    <textarea class="form-control splitLines" name="benefice_risque" id="benefice_risque" cols="45" rows="3" required>{{ old('benefice_risque') }}</textarea>
                                    <label for="">Jeune préopératoire :</label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="Oui" name="jeune_preop[]"> Solides : <input name="solide" class="offset-2 mb-1 ml-10" type="text" placeholder=" H-">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="Non" name="jeune_preop[]"> Liquides clairs : <input name="liquide" class="offset-1 ml-4" type="text" placeholder=" H-">
                                    </div>
                                    <label for="">Adaptation au traitement personnel :</label>
                                    <textarea wrap="hard" class="form-control splitLines" name="adaptation_traitement" cols="45" rows="3"
                                              >{{ old('adaptation_traitement') }}</textarea>
                                    <label for="">Autre :</label>
                                    <textarea wrap="hard" class="form-control splitLines" name="autre1" cols="45" rows="3"
                                              >{{ old('autre1') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Technique d'anesthésie envisagée :</b> <span class="text-danger">*</span></td>
                                <td class="form-group small">
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Anesthésie générale" {{ (old('technique_anesthesie[]') == 'Anesthésie') ? 'checked' : '' }}> Anesthésie générale
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Sédation" {{ (old('technique_anesthesie[]') == 'Sédation') ? 'checked' : '' }}> Sédation
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Rachidienne" {{ (old('technique_anesthesie[]') == 'Rachidienne') ? 'checked' : '' }}> Rachidienne
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Péridurale" {{ (old('technique_anesthesie[]') == 'Péridurale') ? 'checked' : '' }}> Péridurale
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="ALR" {{ (old('technique_anesthesie[]') == 'ALR') ? 'checked' : '' }}> ALR
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" tabIndex="1"
                                               type="checkbox" id="technique_anesthesie" name="technique_anesthesie[]"
                                               value="Locale" {{ (old('technique_anesthesie[]') == 'Locale') ? 'checked' : '' }}> Locale
                                    </div>
                                    <label for="autre2">Autres :</label>
                                    <input type="text" class="form-control" value="{{ old('technique_anesthesie[]') }}" name="technique_anesthesie[]">
                                </td>
                            </tr>
                            <tr>
                                <td><b>Antibioprophylaxie :</b> </td>
                                <td>
                                    <input name="antibiotique" type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td><b>Synthèse pré-opératoire :</b> <span class="text-danger">*</span></td>
                                <td>
                                            <textarea wrap="hard" class="form-control splitLines" name="synthese_preop" cols="45" rows="5"
                                                      required>{{ old('synthese_preop') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Examens paracliniques :</b> </td>
                                <td class="form-group small">
                                    {{--@if(!empty($prescriptions->marqueurs))--}}
                                    {{--@endif--}}
                                    {{--@if(!empty($prescriptions->hormonologie))--}}
                                    {{--@endif--}}
                                    {{--@if(!empty($prescriptions->spermiologie))--}}
                                    {{--@endif--}}
                                    {{--@if(!empty($prescriptions->bacteriologie))--}}
                                    {{--@endif--}}

                                    @if(!empty($prescriptions->hematologie))
                                    <label for="autre">Gr / Rh :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    <label for="autre">NFS :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    @endif
                                    @if(!empty($prescriptions->hemostase))
                                    <label for="autre">TCK :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    <label for="autre">TP / INR :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    @endif
                                    @if(!empty($prescriptions->biochimie))
                                    <label for="autre">Créatinemie :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    <label for="autre">Ionograme :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    <label for="autre">Urée :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    <label for="autre">Glycémie :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    @endif
                                    @if(!empty($prescriptions->urines))
                                    <label for="autre">ECBU :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    @endif
                                    @if(!empty($prescriptions->serologie))
                                    <label for="autre">VIH :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    @endif
                                    @if(!empty($prescriptions->examen))
                                    <label for="autre">E.C.G :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    <label for="autre">Echographie cardiaque :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
                                    @endif

                                    <label for="autre">Autres :</label>
                                    <input type="text" class="form-control" value="{{ old('examen_paraclinique') }}" name="examen_paraclinique[]">
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
