<div class="modal fade" id="consultationAll" tabindex="-1" role="dialog" aria-labelledby="consultationAll" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabe">LISTE DES CONSULTATIONS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (count($patient->consultations))

                    <h3>consultation</h3>
                    <br>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordred table-striped">
                            <thead>
                            <th>DIAGNOSTIQUE</th>
                            <th>PROPOSITION</th>
                            <th>DATE</th>
                            <th>IMPPRIMER</th>
                            </thead>
                            <tbody>

                            @foreach($patient->consultations as $consultation)

                                <tr>
                                    <td>{{ $consultation->diagnostic }}</td>
                                    <td>{{ $consultation->proposition }}</td>
                                    <td>{{ $consultation->created_at->toFormattedDateString() }}</td>
                                    <td>
                                        <a class="btn btn-success btn-xs" title="Imprimer la consultation" href="#">
                                            <i class="fas fa-print"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        

                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
