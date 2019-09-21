@can('infirmier', \App\Patient::class)
    <div class="col-md-6  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-uppercase text-primary"><b>Prise des paramètres du patient</b>
                    <small><strong></strong></small>
                </div>
                <small class="text-info" title="La prise des paramètres du patient doit être quotidienne"><i
                        class="fas fa-info-circle"></i></small>
                <form action="{{ route('parametres.store') }}" method="post">
                    @csrf
                    @include('partials.flash_form')
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <b>Date de naissance / Age : <span class="text-danger">*</span></b>
                            </td>
                            <td>
                                <label for="date_naissance">Date de naissance :</label>
                                <input type="date" name="date_naissance" class="form-control" placeholder="Date de naissance" required>
                                <label for="age">Age :</label>
                                <input type="number" name="age" class="form-control col-md-5" required>
                            </td>
                        </tr>
                        <tr>
                            <td><b>TA :</b> <span class="text-danger">*</span></td>
                            <td>
                                <label for="bras_gauche">Bras gauche :</label>
                                <input name="bras_gauche" class="form-control" type="text" value='{{ old(' bras_gauche ') }}' placeholder=" mmHg" required>
                                <label for="bras_droit">Bras droit :</label>
                                <input name="bras_droit" class="form-control" type="text" value='{{ old(' bras_droit ') }}' placeholder=" mmHg" required>
                            </td>
                        </tr>
                        <tr>
                            <td><b>IMC / BMI :</b> </td>
                            <td>
                                <Input name="inc_bmi" class="form-control" type="text" value='{{ old(' inc_bmi ') }}' >
                            </td>
                        </tr>
                        <tr>
                            <td><b>Température :</b> <span class="text-danger">*</span></td>
                            <td>
                                <Input name="temperature" class="form-control col-md-5" type="text" value='{{ old(' temperature ') }}' placeholder=" °C" required>
                            </td>
                        </tr>
                        <input type="hidden" class="form-control" value="{{ $patient->id }}" name="patient_id">
                        <tr>
                            <td><b>FR :</b> <span class="text-danger">*</span></td>
                            <td>
                                <Input name="fr" class="form-control" type="text" value='{{ old(' fr ') }}' placeholder=" Mvts/min" required>
                            </td>
                        </tr>
                        <tr>
                            <td><b>FC :</b> <span class="text-danger">*</span></td>
                            <td>
                                <Input name="fc" class="form-control" type="text" value='{{ old(' fc ') }}' placeholder=" Pls/min" required>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Gly :</b> </td>
                            <td>
                                <Input name="glycemie" class="form-control" type="text" value='{{ old(' glycemie ') }}' placeholder=" g/l">
                            </td>
                        </tr>
                        <tr>
                            <td><b>SPO2 :</b></td>
                            <td>
                                <Input name="spo2" class="form-control" type="text" value='{{ old(' spo2 ') }}' placeholder=" %">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Poids :</b> <span class="text-danger">*</span></td>
                            <td>
                                <Input name="poids" class="form-control" type="text" value='{{ old(' poids ') }}'  placeholder=" Kgs" required>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Taille :</b> </td>
                            <td>
                                <Input name="taille" class="form-control" type="text" value='{{ old(' taille ') }}'  placeholder=" M">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Ajouter au dossier</button>
                </form>
            </div>
        </div>
    </div>
@endcan
