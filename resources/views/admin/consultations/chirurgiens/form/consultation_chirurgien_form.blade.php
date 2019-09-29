@if($consultation->id)
    {{ Form::model($consultation, ['route' => ['consultation_chirurgien.update', $consultation->id], 'method' => 'put', 'class'=>'form-horizontal form-label-left']) }}
@else
    {{ Form::open(['route' => 'consultation_chirurgien.store', 'method' => 'post', 'class'=>'form-horizontal form-label-left']) }}
@endif @csrf
<tr>
    <td>
        <h5 class="text-primary"><strong>CONSULTATION</strong></h5>
    </td>
    <td></td>
</tr>
<tr>
    <td><b>Médecin de référence :</b> <span class="text-danger">*</span></td>
    <td>
        <select class="form-control" name="medecin_r" id="medecin_r" required>
            <option value=""> Nom du médecin</option>
            @foreach ($users as $user)
                <option value="{{ $user->name }} {{ $user->prenom }}" {{ old( 'medecin_r',$consultation->medecin_r)==$consultation->medecin_r ? 'selected' : '' }}>{{ $user->name }} {{ $user->prenom }}</option>
            @endforeach
        </select>
    </td>
</tr>
<tr>
    <td><b>Motif de consultation :</b> <span class="text-danger">*</span></td>
    <td>
        {{ Form::textarea('motif_c', null, ['class' => 'form-control']) }}
    </td>
</tr>
<tr>
    <td><b>Interrogatoire :</b> <span class="text-danger">*</span></td>
    <td>
        <textarea class="splitLines form-control" name="interrogatoire" cols="55" rows="5" placeholder="Ici la note du médecin" required>{{ old('interrogatoire', $consultation->interrogatoire) }}</textarea>
    </td>
</tr>
@if (!empty($consultation))
    <tr>
        <td><b>Antécédents médicaux :</b></td>
        <td>
            <textarea class="splitLines form-control" name="antecedent_m" cols="55" rows="3">{{ old('antecedent_m', $consultation->antecedent_m) }}</textarea>
        </td>
    </tr>
    <tr>
        <td><b>Antécédents chirurgicaux :</b></td>
        <td>
            <textarea class="splitLines form-control" name="antecedent_c" cols="55" rows="3">{{ old('antecedent_c', $consultation->antecedent_c) }}</textarea>
        </td>
    </tr>
    <tr>
        <td><b>Allergies :</b></td>
        <td>
            <textarea class="splitLines form-control" name="allergie" cols="55" rows="2">{{ old('allergie', $consultation->allergie) }}</textarea>
        </td>
    </tr>
    <tr>
        <td><b>Goupe sanguin du patient :</b></td>
        <td>
            <select class="form-control" name="groupe" id="groupe">
                <option value="">Groupes sanguins</option>
                <option value="O-" {{old( 'groupe',$consultation->groupe)=='O-' ? 'selected' : '' }}>O-</option>
                <option value="O+" {{old( 'groupe',$consultation->groupe)=='O+' ? 'selected' : '' }}>O+</option>
                <option value="B-" {{old( 'groupe',$consultation->groupe)=='B-' ? 'selected' : '' }}>B-</option>
                <option value="B+" {{old( 'groupe',$consultation->groupe)=='B+' ? 'selected' : '' }}>B+</option>
                <option value="A-" {{old( 'groupe',$consultation->groupe)=='A-' ? 'selected' : '' }}>A-</option>
                <option value="A+" {{old( 'groupe',$consultation->groupe)=='A+' ? 'selected' : '' }}>A+</option>
                <option value="AB-" {{old( 'groupe',$consultation->groupe)=='AB-' ? 'selected' : '' }}>AB-</option>
                <option value="AB+" {{old( 'groupe',$consultation->groupe)=='AB+' ? 'selected' : '' }}>AB+</option>
            </select>
        </td>
    </tr>
@endif
<tr>
    <td>
        <h5 class="text-primary">EXAMENS</h5></td>
    <td></td>
</tr>
<tr>
    <input name="patient_id" value="{{ $patient->id }}" type="hidden">
</tr>
<tr>
    <td><b>Examens physiques :</b> <span class="text-danger">*</span></td>
    <td>
        <textarea class="splitLines form-control" name="examen_p" cols="55" rows="3" placeholder="Examens physiques" required>{{ old('examen_p', $consultation->examen_p) }}</textarea>
    </td>
</tr>
<tr>
    <td><b>Examens compléméntaires:</b> <span class="text-danger">*</span></td>
    <td>
        <textarea class="splitLines form-control" name="examen_c" cols="55" rows="3" placeholder="Examens compléméntaires" required>{{ old('examen_c', $consultation->examen_c) }}</textarea>
    </td>
</tr>
<tr>
    <td><b>Diagnostic médical :</b> <span class="text-danger">*</span></td>
    <td>
        <textarea class="splitLines form-control" name="diagnostic" cols="55" rows="3" placeholder="Votre premier avis" required>{{ old('diagnostic', $consultation->diagnostic) }}</textarea>
    </td>
</tr>
<tr>
    <td><b>Proposition thérapeutique :</b> <span class="text-danger">*</span></td>
    <td>
        <textarea class="splitLines form-control" name="proposition_therapeutique" cols="55" rows="3" required>{{ old('proposition_therapeutique', $consultation->proposition_therapeutique) }}</textarea>
    </td>
</tr>
<tr>
    <td><b>Proposition de suivi :</b> <span class="text-danger">*</span></td>
    <td class="form-group small">
        <div class="form-check">
            <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="proposition[]" id="decision1" value="Hospitalisation" {{old( 'proposition',$consultation->proposition)=='Hospitalisation' ? 'checked' : '' }}> Hospitalisation
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="proposition[]" id="decision2" value="Intervention chirurgicale" {{old( 'proposition',$consultation->proposition)=='Intervention chirurgicale' ? 'checked' : '' }}> Intervention chirurgicale
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="proposition[]" id="decision3" value="Consultation" {{old( 'proposition',$consultation->proposition)=='Consultation' ? 'checked' : '' }}> Consultation
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="proposition[]" id="decision4" value="Actes à réaliser" {{old( 'proposition',$consultation->proposition)=='Actes à réaliser' ? 'checked' : '' }}> Actes à réaliser
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" tabIndex="1" onClick="ckChange(this)" type="checkbox" name="proposition[]" id="decision5" value="Consultation d'anesthésiste" {{old( 'proposition',$consultation->proposition)=='Consultation d\'anesthésiste' ? 'checked' : '' }}> Consultation d'anesthésiste
            </label>
        </div>
    </td>
</tr>
<tr id="type_intervention" style='display:none;'>
    <td><b>Type d'intervention :</b></td>
    <td>
        <textarea class="splitLines form-control" name="type_intervention" cols="55" rows="3">{{ old('type_intervention', $consultation->type_intervention) }}</textarea>
    </td>
</tr>
<tr>
    <td><b>Date intervention :</b></td>
    <td>
        <input type="date" class="form-control col-md-6" name="date_intervention" value="{{ old('date_intervention', $consultation->date_intervention) }}">
    </td>
</tr>
<tr id="type_acte" style='display:none;'>
    <td><b>Type d'actes à réaliser :</b></td>
    <td>
        <div class="form-check">
            <input type="checkbox" name="acte[]" {{old( 'acte',$consultation->acte)=='Echographie de l\'arbre urinaire' ? 'checked' : '' }} value="Echographie de l'arbre urinaire" class="form-check-input"> Echographie de l'arbre urinaire
        </div>
        <div class="form-check">
            <input type="checkbox" name="acte[]" {{old( 'acte',$consultation->acte)=='Cystoscopie' ? 'checked' : '' }} value="Cystoscopie" class="form-check-input"> Cystoscopie
        </div>
        <div class="form-check">
            <input type="checkbox" name="acte[]" {{old( 'acte',$consultation->acte)=='Biopsie prostatique' ? 'checked' : '' }} value="Biopsie prostatique" class="form-check-input"> Biopsie prostatique
        </div>
        <div class="form-check">
            <input type="checkbox" name="acte[]" {{old( 'acte',$consultation->acte)=='Débitmétrie' ? 'checked' : '' }} value="Débitmétrie" class="form-check-input"> Débitmétrie
        </div>
        <div class="form-check">
            <input type="checkbox" name="acte[]" {{old( 'acte',$consultation->acte)=='Echographie prostatique sous rectale' ? 'checked' : '' }} value="Echographie prostatique sous rectale" class="form-check-input"> Echographie prostatique sous rectale
        </div>
    </td>
</tr>
<tr>
    <td><b>Devis prévisionnel :</b></td>
    <td>
        <select class="form-control" name="devis_p">
            <option value=""> Sélectionnez un devis</option>
            @foreach ($devis as $devi)
                <option value="{{ $devi->nom }} &nbsp; ({{ $devi->montant10 }} FCFA)" {{old( "devis_p", $consultation->devis_p) ?: '' ? "selected": ""}}>{{ $devi->nom }} &nbsp;({{ $devi->montant10 }} FCFA )
                </option>
            @endforeach
        </select>

    </td>
</tr>
<tr id="anesthesiste" style='display:none;'>
    <td><b>Date consultation anesthésiste :</b></td>
    <td>
        <input type="date" class="form-control col-md-6" name="date_consultation_anesthesiste" value="{{ old('date_consultation_anesthesiste', $consultation->date_consulation_anesthesiste) }}">
    </td>
</tr>
<tr>
    <td></td>
    <td></td>
</tr>
<tr id="consultation" style='display:none;'>
    <td><b>Date de consultation :</b></td>
    <td>
        <input type="date" class="form-control col-md-6" name="date_consultation" value="{{ old('date_consultation', $consultation->date_consultation) }}">
    </td>
</tr>
<tr>
    <td>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </td>
    <td></td>
</tr>
{{ Form::close() }}
