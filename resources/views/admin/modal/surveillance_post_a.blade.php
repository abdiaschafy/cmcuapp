<div class="modal fade" id="SpostAnesth" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SURVEILLANCE POST ANESTHESIQUE</h5>
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
                                            <td><b>Surveillance :</b> <span class="text-danger">*</span></td>
                                            <td>
                                                <textarea name="vpa" class="form-control" id="vpa" cols="55" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Traitement(s) :</b> </td>
                                            <td>
                                                <textarea name="vpa" class="form-control" id="vpa" cols="55" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Examen(s) paraclinique(s) post opératoire :</b> </td>
                                            <td>
                                                <textarea name="vpa" class="form-control" id="vpa" cols="55" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Observation(s) :</b> <span class="text-danger">*</span></td>
                                            <td>
                                                <textarea name="vpa" class="form-control" id="vpa" cols="55" rows="3"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for=""><b>Date de sortie :</b></label>
                                                <input type="date" class="form-control" name="date_s" required>
                                            </td>
                                            <td>
                                                <label for=""><b>Heure de sortie :</b></label>
                                                <input type="time" class="form-control col-md-5" name="heur_s" required>
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
