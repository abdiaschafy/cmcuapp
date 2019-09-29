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
                <form action="{{ route('fiche_intervention.store') }}" method="post">
                    @csrf
                    <div class="container">
                        <div class="col-md-10  toppad">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
                                            </td>
                                            <td>
                                                <label for="">XXXXXXX</label>
                                                <input type="text" class="form-control" name="periode" value="{{ old('periode') }}">
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
