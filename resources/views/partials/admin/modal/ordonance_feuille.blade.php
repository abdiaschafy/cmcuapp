<div class="modal fade" id="ordonanceModal" tabindex="-1" role="dialog" aria-labelledby="ordonanceModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ordonance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" class="btn btn-primary mr-5" href="#home">Ordonance</a></li>
                    <li><a data-toggle="tab" class="btn btn-primary" href="#menu1">Feuille d'examen complémentaire</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form action="{{ route('ordonances.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="summernote" class="col-form-label">Ordonance :
                                </label>
                                <textarea id="summary-ckeditor" name="description" rows="15" class="form-control">{{ old('description') }}</textarea>
                            </div>
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

<script>
function envoi()
{
	prepare("hematologie",  "s1");
	prepare("hemostase", "s2");
	return false;
}

function prepare(name1, name2)
{
	var node1 = document.getElementsByName(name1);
	var node2 = document.getElementsByName(name2)[0];
	var text = "";
	for (var i=0; i<node1.length; i++)
	{
		if (node1[i].checked)
			text += "O ";
		else	text += "N ";
	}
	node2.value = text;
}

</script>
 