<div class="modal fade" id="SurveillancePre" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SURVEILLANCE RAPPROCHEE PRE-OPERATOIRE</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('surveillance_rapproche_param') }}" method="post">
                    @csrf
                    <div class="container">
                        <div class="col-md-10  toppad">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label for=""><b>PATIENT :</b></label>
                                                <input type="text" class="form-control" name="nom_patient" value="{{ old('nom_patient') }}" disabled="disabled">
                                            </td>
                                            <td>
                                                <label for=""><b>AGE :</b></label>
                                                <input type="text" class="form-control" name="age_patient" value="{{ old('age_patient') }}" disabled="disabled">
                                            </td>
                                            <td>
                                                <label for=""><b>INFIRMIER(E) :</b></label>
                                                <input type="text" class="form-control" name="infirmier" value="{{ old('infirmier') }}" disabled="disabled">
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <label for=""><b>INDICATION(S) CHIRURGICALE(S) :</b></label>
                                                <input type="text" class="form-control" name="indication_chirurgicale" value="{{ old('indication_chirurgicale') }}" disabled="disabled">
                                            </td>
                                            <td>
                                                <label for=""><b>INTERVENTION(S)</b></label>
                                                <input type="text" class="form-control" name="intevention" value="{{ old('intevention') }}" disabled="disabled">
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for=""><b>DATE / HEURE :</b></label>
                                                <input type="datetime-local" class="form-control" name="date_heure" value="{{ old('date_heure') }}">
                                            </td>
                                            <td>
                                                <label for=""><b>T.A :</b></label>
                                                <input type="text" class="form-control" name="ta" value="{{ old('ta') }}">
                                            </td>
                                            <td>
                                                <label for=""><b>F.R :</b></label>
                                                <input type="number" class="form-control" name="fr" value="{{ old('fr') }}">
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <label for=""><b>POULS :</b></label>
                                                <input type="number" class="form-control" name="pouls" value="{{ old('pouls') }}">
                                            </td>
                                            <td>
                                                <label for=""><b>SPO2 :</b></label>
                                                <input type="number" class="form-control" name="spo2" value="{{ old('spo2') }}">
                                            </td>
                                            <td>
                                                <label for=""><b>T° :</b></label>
                                                <input type="number" class="form-control" name="temperature" step="any" value="{{ old('temperature') }}">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label for=""><b>DIURESE :</b></label>
                                                <input type="text" class="form-control" name="diurese" value="{{ old('diurese') }}">
                                            </td>
                                            <td>
                                                <label for=""><b>CONSCIENCE :</b></label>
                                                <input type="text" class="form-control" name="conscience" value="{{ old('conscience') }}">
                                            </td>
                                            <td>
                                                <label for=""><b>DOULEUR :</b></label>
                                                <input type="text" class="form-control" name="douleur" value="{{ old('douleur') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 1000px;">
                                                <label for=""><b>OBSERVATIONS / PLAINTES</b></label>
                                                <textarea class="form-control" name="observation_plainte" cols="100" rows="3">{{ old('observation_plainte') }}</textarea>
                                            </td>
                                            <td>
                                                <label><b>Période :</b></label>
                                                <select name="type" class="form-control" required>
                                                    <option value=""><b>Période :</b></option>
                                                    <option value="preoperatoire">Pré-opératoire</option>
                                                    <option value="postoperatoire">Post-opératoire</option>
                                                </select>
                                            </td>
                                            <td></td>
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
