@can('chirurgien', \App\Patient::class)
    <div class="col-md-8  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                @include('partials.flash_form')
                <h3 class="card-title">Informations relatives au dossier patient</h3>
                <small class="text-danger"><i><strong><i class="fas fa-exclamation-triangle"></i> Attention
                            !! espace réservé au médécin</strong></i>
                </small>
                <table class="table table-user-information ">
                    <tbody>
                    <form action="{{ route("consultations.store") }}" method="post">
                        @csrf
                        <tr>
                            <td>
                                <h5 class="text-primary"><strong>CONSULTATION</strong></h5>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Médécin de référence :</b> <span class="text-danger">*</span></td>
                            <td>
                                <select class="form-control" name="medecin_r" id="medecin_r" required>
                                    <option value=""> Nom du médécin</option>
                                    @foreach ($users as $user)
                                        <option
                                            value="{{ $user->name }} {{ $user->prenom }}" {{old("medecin_r") ?: '' ? "selected": ""}}>{{ $user->name }} {{ $user->prenom }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Motif de consultation :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea class="splitLines" wrap="hard" name="motif_c" cols="45" rows="5"
                                                      placeholder="Motif de la consultation"
                                                      required>{{ old('motif_c') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Intérrogatoire :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea class="splitLines" name="interrogatoire" cols="45" rows="5"
                                                      placeholder="Ici la note du médécin"
                                                      required>{{ old('interrogatoire') }}</textarea>
                            </td>
                        </tr>
                        @if (count($consutation) == 0)
                            <tr>
                                <td><b>Antécédent médicaux :</b></td>
                                <td>
                                            <textarea class="splitLines" name="antecedent_m" cols="45"
                                                      rows="3">{{ old('antecedent_m') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Antécédent chirurgicaux :</b></td>
                                <td>
                                            <textarea class="splitLines" name="antecedent_c" cols="45"
                                                      rows="3">{{ old('antecedent_c') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Allergies :</b></td>
                                <td>
                                            <textarea class="splitLines" name="allergie" cols="45"
                                                      rows="2">{{ old('allergie') }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Goupe sanguin du patient :</b></td>
                                <td>
                                    <select class="form-control" name="groupe" id="groupe">
                                        <option value="">Groupes sanguins</option>
                                        <option value="O-" {{old("groupe") ?: '' ? "selected": ""}}>O-</option>
                                        <option value="O+" {{old("groupe") ?: '' ? "selected": ""}}>O+</option>
                                        <option value="B-" {{old("groupe") ?: '' ? "selected": ""}}>B-</option>
                                        <option value="B+" {{old("groupe") ?: '' ? "selected": ""}}>B+</option>
                                        <option value="A-" {{old("groupe") ?: '' ? "selected": ""}}>A-</option>
                                        <option value="A+" {{old("groupe") ?: '' ? "selected": ""}}>A+</option>
                                        <option value="AB- {{old("groupe") ?: '' ? "selected": ""}}">AB-</option>
                                        <option value="AB+ {{old("groupe") ?: '' ? "selected": ""}}">AB+</option>
                                    </select>
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td><h5 class="text-primary">EXAMENS</h5></td>
                            <td></td>
                        </tr>
                        <tr>
                            <input name="patient_id" value="{{ $patient->id }}" type="hidden">
                        </tr>
                        <tr>
                            <td><b>Examens physiques :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea class="splitLines" name="examen_p" cols="45" rows="3" placeholder="Examens physiques"
                                                      required>{{ old('examen_p') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Examens compléméntaires:</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea class="splitLines" name="examen_c" cols="45" rows="3"
                                                      placeholder="Examens compléméntaires"
                                                      required>{{ old('examen_c') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Diagnostic médical :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea class="splitLines" name="diagnostic" cols="45" rows="3"
                                                      placeholder="Votre premier avis"
                                                      required>{{ old('diagnostic') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Proposition thérapeutique :</b> <span class="text-danger">*</span></td>
                            <td>
                                            <textarea class="splitLines" name="proposition_therapeutique" cols="45" rows="3"
                                                      required>{{ old('proposition_therapeutique') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Proposition de suivi :</b> <span class="text-danger">*</span></td>
                            <td class="form-group small">
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1" onClick="ckChange(this)"
                                           type="checkbox" name="proposition[]" id="decision1"
                                           value="Hospitalisation"> Hospitalisation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1" onClick="ckChange(this)"
                                           type="checkbox" name="proposition[]" id="decision2"
                                           value="Intervention chirurgicale"> Intervention chirurgicale
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1" onClick="ckChange(this)"
                                           type="checkbox" name="proposition[]" id="decision3"
                                           value="Consultation"> Consultation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1" onClick="ckChange(this)"
                                           type="checkbox" name="proposition[]" id="decision4"
                                           value="Actes à réaliser"> Actes à réaliser
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" tabIndex="1" onClick="ckChange(this)"
                                           type="checkbox" name="proposition[]" id="decision5"
                                           value="Consultation d'anesthésiste"> Consultation d'anesthésiste
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr id="type_intervention" style='display:none;'>
                            <td><b>Type d'intervention :</b></td>
                            <td>
                                            <textarea class="splitLines" name="type_intervention" cols="45" rows="3"
                                            >{{ old('type_intervention') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Date intervention :</b></td>
                            <td>
                                <input type="date" class="form-control col-md-6" name="date_intervention" value="{{ old('date_intervention') }}" >
                            </td>
                        </tr>
                        <tr id="type_acte" style='display:none;'>
                            <td><b>Type d'actes à réaliser :</b></td>
                            <td>
                                            <textarea class="splitLines" name="acte" cols="45" rows="3"
                                            >{{ old('acte') }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Devis prévisionnel :</b></td>
                            <td>
                                <select class="form-control" name="devis_p">
                                    <option> Sélectionner un devis</option>
                                    @foreach ($devis as $devi)
                                        <option
                                            value="{{ $devi->nom }} &nbsp; ({{ $devi->montant10 }} FCFA)" {{old("devis_p") ?: '' ? "selected": ""}}>{{ $devi->nom }} &nbsp;({{ $devi->montant10 }} FCFA )
                                        </option>
                                    @endforeach
                                </select>

                            </td>
                        </tr>
                        <tr id="anesthesiste" style='display:none;'>
                            <td><b>Date consultation d'anesthésiste :</b></td>
                            <td>
                                <input type="date" class="form-control col-md-6" name="date_consultation_anesthesiste" value="{{ old('date_consultation_anesthesiste') }}" >
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr id="consultation" style='display:none;'>
                            <td><b>Date de consultation :</b></td>
                            <td>
                                <input type="date" class="form-control col-md-6" name="date_consultation" value="{{ old('date_consultation') }}" >
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
