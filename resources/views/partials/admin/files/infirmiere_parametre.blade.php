@can('infirmier', \App\Patient::class)
    <div class="col-md-6  offset-md-0  toppad">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Prise des paramètres du patient
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
                            <td>TA :</td>
                            <td>
                                <input name="ta" type="text" value='{{ old(' ta ') }}' placeholder=" mmHg">
                            </td>
                        </tr>
                        <tr>
                            <td>Température : <span class="text-danger">*</span></td>
                            <td>
                                <Input name="temperature" type="text" value='{{ old(' temperature ') }}' placeholder=" °C" required>
                            </td>
                        </tr>
                        <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                        <tr>
                            <td>FR :</td>
                            <td>
                                <Input name="fr" type="text" value='{{ old(' fr ') }}' placeholder=" Mvts/min">
                            </td>
                        </tr>
                        <tr>
                            <td>FC :</td>
                            <td>
                                <Input name="fc" type="text" value='{{ old(' fc ') }}' placeholder=" Pls/min">
                            </td>
                        </tr>
                        <tr>
                            <td>Gly : <span class="text-danger">*</span></td>
                            <td>
                                <Input name="glycemie" type="text" value='{{ old(' glycemie ') }}' placeholder=" g/l" required>
                            </td>
                        </tr>
                        <tr>
                            <td>SPO2 :</td>
                            <td>
                                <Input name="spo2" type="text" value='{{ old(' spo2 ') }}' placeholder=" %">
                            </td>
                        </tr>
                        <tr>
                            <td>Poids :</td>
                            <td>
                                <Input name="poids" type="text" value='{{ old(' poids ') }}'  placeholder=" Kgs">
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
