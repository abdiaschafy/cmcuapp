<div class="modal fade" id="ordonanceModal" tabindex="-1" role="dialog" aria-labelledby="ordonanceModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordonnance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" class="btn btn-primary mr-5" href="#home">Ordonnance</a></li>
                    <li><a data-toggle="tab" class="btn btn-primary" href="#menu1">Feuille d'examen complémentaire</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form action="{{ route('ordonances.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="summernote" class="col-form-label">Ordonnance :
                                </label>
                            </div>
                            <div class="container">
    <div class="row clearfix">
    	<div class="col-md-12 table-responsive">
			<table class="table table-bordered table-hover table-sortable" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Médicament
						</th>
						<th class="text-center">
							Quantité
						</th>
						<th class="text-center">
							posolologie
						</th>
    					
        				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
						</th>
					</tr>
				</thead>
				<tbody>
    				<tr id='addr0' data-id="0" class="hidden">
						<td data-name="medicament">
						    <input type="text" name='medicament'  placeholder='médicament' class="form-control"/>
						</td>
						<td data-name="quantite">
						    <input type="text" name='quantite' placeholder='quantite' class="form-control"/>
						</td>
						<td data-name="description">
						    <textarea name="description" name="description" placeholder="Posologie" class="form-control">{{ old('description') }}</textarea>
						</td>
    					
                        <td data-name="del">
                            <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                        </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<a id="add_row" class="btn btn-primary float-right">Ajouter</a>
</div>
<br>
<br>
<br>

                            <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                            </button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                    <form onsubmit="return envoi();" id="menu1" class="tab-pane fade" action="{{ route('prescriptions.store') }}" method="POST" >
                        <h3 class="text-center mb-4">Veuillez cocher les examens à prescrire</h3>
                        @csrf

                        @include('partials.admin.files.feuille_examen')

                        
                        <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                        <button type="button" class="btn btn-secondary btn-md mt-2" data-dismiss="modal">Fermer</button>
                        <button type="submit"class="btn btn-primary btn-md mt-2">Enregistrer</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 