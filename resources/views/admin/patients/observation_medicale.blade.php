@extends('layouts.admin')

@section('title', 'CMCU | Observations médicales')

@section('content')

<body>

    <div class="wrapper">
    @include('partials.side_bar')

        @include('partials.header')
        @can('show', \App\User::class)
            <div class="container">
                <div class="row">
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-success float-right"
                       title="Retour à la liste des patients">
                        <i class="fas fa-arrow-left"></i> Retour au dossier patient
                    </a>
                </div>
                <div><h2 class="text-center">OBSERVATIONS MEDICALES</h2></div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 5%">DATE</th>
                                <th class="text-center" style="width: 15%">MEDECIN</th>
                                <th class="text-center" style="width: 30%">OBSERVATIONS</th>

                            </tr>
                            </thead>
                            <tbody>
                            <form action="" method="post">
                                @csrf
                                <tr>
                                    <td><input name="fname" class="form-control" value="{{ Carbon\Carbon::now()->ToDateString() }}" required="required" type="date"></td>
                                    <td>
                                        <select name="" class="form-control mb-2">
                                            <option value="">Médecin / Chirurgien</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>

                                        <select name="" class="form-control">
                                            <option value="">Anesthésiste</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                    </td>
                                    <td><textarea name="" class="form-control" cols="100" rows="3"></textarea></td>
                                </tr>
                                <tr><td><input type="submit" class="btn btn-primary" value="Enregistrer"></td></tr>
                            </form>
                            <tr>
                                <td class="table-active"><b>DATE :</b></td>
                                <td class="table-active"></td>
                                <td class="table-active"></td>
                            </tr>
                            <tr>
                                <td>du texe ici</td>
                                <td>dsfsdf</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ex explicabo, hic inventore ipsa ipsum laudantium minus nam nemo neque nesciunt nisi non omnis pariatur perspiciatis qui recusandae rerum sapiente.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        @endcan

    </div>
</body>

@stop
