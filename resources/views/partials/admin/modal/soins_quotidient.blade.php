<div class="modal fade" id="soinsModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Soins quotidiens</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('soins.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="col-form-label">Liste des
                            soins:</label>
                        <select class="form-control col-md-5" name="contexte" id="contexte" required>
                            <option value="">Veuillez choisir le contexte des soins</option>
                            <option value="Bloc opératoire">Bloc opératoire</option>
                            <option value="Hospitlisation">Hospitalisation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Liste des
                            soins:</label>
                        <textarea id="summary-ckeditor1" rows="15" name="content" class="form-control" required>{{ old('content') }}</textarea>
                    </div>
                    <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                    <button type="submit" class="btn btn-primary">Enegistrer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Fermer
                </button>
            </div>
        </div>
    </div>
</div>
