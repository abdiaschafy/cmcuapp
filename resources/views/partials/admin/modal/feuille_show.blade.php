<div class="modal fade" id="feuilleAll" tabindex="-1" role="dialog" aria-labelledby="feuilleAll" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LISTE DES EXAMENS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            @if (count($patient->prescriptions))

                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordred table-striped">
                            <thead>
                            <th>DESCRIPTION</th>
                            <th>DATE</th>
                            <th>IMPPRIMER</th>
                            </thead>
                            <tbody>

                            @foreach($patient->prescriptions as $prescription)

                                <tr>
                                    <td>{{ $prescription->pluck('hemostase','hematologie','biochimie') }}</td>
                                    <td>{{ $prescription->created_at->toFormattedDateString() }}</td>
                                    <td>
                                        <a class="btn btn-success btn-xs" title="Imprimer l'ordonance" href="{{ route('prescription_examens.pdf', $prescription->id) }}">
                                            <i class="fas fa-print"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{ $ordonances->links() }}

                    </div>
            @endif
            </div>
        </div>
    </div>
</div>
