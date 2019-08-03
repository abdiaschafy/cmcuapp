@extends('layouts.admin')

@section('title', 'CMCU | dossier patient')


@section('content')
<style>
        .grid-container {
            display: grid;
            grid-gap: 30px 60px;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 10px;
            font-size: 12px;
            margin-right: 1px;
        }
    </style>
    <body>


    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
        {{--<div class="col-md-12  toppad  offset-md-0 ">--}}


                    {{--<a href="{{ route('patients.index') }}" class="btn btn-success float-right">--}}
                        {{--<i class="fas fa-arrow-left"></i>  Retour--}}
                    {{--</a>--}}
                {{--</div>--}}
        {{--<h2 class="text-center mb-2">DETAILS DE LA CONSULATION</h2>--}}
        {{--<br>--}}
        {{--<div class="grid-container">--}}

    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-2"><u><b>diagnostic</b></u></h5>--}}
        {{--<p> {{("$consultations->diagnostic")}} </p>--}}

    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-2"><u><b>interrogatoire</b></u></h5>--}}
         {{--<p> {{("$consultations->interrogatoire")}} </p>--}}

    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-2"><u><b>antecedents médicaux</b></u></h5>--}}
        {{--<p> {{("$consultations->antecedent_m")}} </p>--}}
    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-2"><u><b>antecedents chirurgicaux</b></u></h5>--}}
        {{--<p> {{("$consultations->antecedent_c")}} </p>--}}

    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-2"><u><b>medecin</b></u></h5>--}}
        {{--<p> {{("$consultations->medecin_r")}} </p>--}}

    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-2"><u><b>allergie</b></u></h5>--}}
        {{--<p> {{("$consultations->allergie")}} </p>--}}
    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-2"><u><b>groupe</b></u></h5>--}}
        {{--<p> {{("$consultations->groupe")}} </p>--}}
    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-3"><u><b>proposition</b></u></h5>--}}
        {{--<p> {{("$consultations->proposition")}} </p>--}}

    {{--</div>--}}
    {{--<div class="grid-item">--}}
        {{--<h5 class="text-center mb-3"><u><b>motif de la consultation</b></u></h5>--}}
        {{--<p> {{("$consultations->motif_c")}} </p>--}}

    {{--</div>--}}


</div>


        <div class="row">
            <div class="col-md-3"> <a href="mail-compose.html" class="btn btn-danger btn-block btn-compose-email">Compose Email</a>
                <ul
                    class="nav nav-pills flex-column nav-email shadow mb-20">
                    <li class="active nav-item"> <a href="#mail-inbox.html" class="nav-link">

                            <i class="fa fa-inbox"></i> Inbox  <span class="label float-right">7</span>

                        </a>
                    </li>
                    <li class="nav-item"> <a href="#mail-compose.html" class="nav-link"><i class="fa fa-envelope-o"></i> Send Mail</a>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link"><i class="fa fa-certificate"></i> Important</a>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link">

                            <i class="fa fa-file-text-o"></i> Drafts <span class="badge badge-info float-right inbox-notification">35</span>

                        </a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link"> <i class="fa fa-trash-o"></i> Trash</a>
                    </li>
                </ul>
                <!-- /.nav -->
                <h5 class="nav-email-subtitle">More</h5>
                <ul class="nav nav-pills flex-column nav-email mb-20 rounded shadow">
                    <li class="nav-item"> <a href="#" class="nav-link">

                            <i class="fa fa-folder-open"></i> Promotions  <span class="badge badge-danger float-right">3</span>

                        </a>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link">

                            <i class="fa fa-folder-open"></i> Job list

                        </a>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link">

                            <i class="fa fa-folder-open"></i> Backup

                        </a>
                    </li>
                </ul>
                <!-- /.nav -->
            </div>
            <div class="col-md-9">
                <!-- resumt -->
                <div class="card">
                    <div class="card-header resume-heading">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="col-12 col-md-4">
                                    <figure>
                                        <img class="rounded-circle img-fluid" alt="" src="http://placehold.it/300x300">
                                    </figure>
                                    <div class="row">
                                        <div class="col-12 social-btns">
                                            <div class="col-3 col-lg-1 col-xl-1 social-btn-holder"> <a href="#" class="btn btn-social btn-block btn-google">

                                                    <i class="fa fa-google"></i> </a>
                                            </div>
                                            <div class="col-3 col-lg-1 col-xl-1 social-btn-holder"> <a href="#" class="btn btn-social btn-block btn-facebook">

                                                    <i class="fa fa-facebook"></i> </a>
                                            </div>
                                            <div class="col-3 col-lg-1 col-xl-1 social-btn-holder"> <a href="#" class="btn btn-social btn-block btn-twitter">

                                                    <i class="fa fa-twitter"></i> </a>
                                            </div>
                                            <div class="col-3 col-lg-1 col-xl-1 social-btn-holder"> <a href="#" class="btn btn-social btn-block btn-linkedin">

                                                    <i class="fa fa-linkedin"></i> </a>
                                            </div>
                                            <div class="col-3 col-lg-1 col-xl-1 social-btn-holder"> <a href="#" class="btn btn-social btn-block btn-github">

                                                    <i class="fa fa-github"></i> </a>
                                            </div>
                                            <div class="col-3 col-lg-1 col-xl-1 social-btn-holder"> <a href="#" class="btn btn-social btn-block btn-stackoverflow">

                                                    <i class="fa fa-stack-overflow"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">John Doe</li>
                                        <li class="list-group-item">Software Engineer</li>
                                        <li class="list-group-item">Google Inc.</li>
                                        <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000</li>
                                        <li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Summary</h4>
                        <p>Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea
                            quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata
                            vis cu, te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod
                            aliquip mediocritatem, mei habemus persecuti mediocritatem ei.</p>
                        <p>Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet,
                            case nostrud nusquam an vis. Clita debitis apeirian et sit, integre iudicabit
                            elaboraret duo ex. Nihil causae adipisci id eos.</p>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Research Interests</h4>
                        <p>Software Engineering, Machine Learning, Image Processing, Computer Vision,
                            Artificial Neural Networks, Data Science, Evolutionary Algorithms.</p>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Prior Experiences</h4>
                        <ul class="list-group"> <a class="list-group-item inactive-link" href="#">

                                <h4 class="list-group-item-heading">

                                    Software Engineer at Twitter

                                </h4>

                                <p class="list-group-item-text">

                                    Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu,

                                    te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.

                                </p>

                            </a>
                            <a class="list-group-item inactive-link" href="#">

                                <h4 class="list-group-item-heading">Software Engineer at LinkedIn</h4>

                                <p class="list-group-item-text">

                                    Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur.

                                    Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola,

                                    nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.

                                </p>

                                <ul>

                                    <li>

                                        Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur.

                                        Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola,

                                        nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.

                                    </li>

                                    <li>

                                        Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur.

                                        Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola,

                                        nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.

                                    </li>

                                </ul>

                                <p></p>

                            </a>
                        </ul>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Key Expertise</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                            <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                            <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                            <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                            <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                            <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                        </ul>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Language and Platform Skills</h4>
                        <ul class="list-group"> <a class="list-group-item inactive-link" href="#">

                                <div class="progress">

                                    <div data-placement="top" style="width: 80%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success">

                                        <span class="sr-only">80%</span>

                                        <span class="progress-type">Java/ JavaEE/ Spring Framework </span>

                                    </div>

                                </div>

                                <div class="progress">

                                    <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">

                                        <span class="sr-only">70%</span>

                                        <span class="progress-type">PHP/ Lamp Stack</span>

                                    </div>

                                </div>

                                <div class="progress">

                                    <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">

                                        <span class="sr-only">70%</span>

                                        <span class="progress-type">JavaScript/ NodeJS/ MEAN stack </span>

                                    </div>

                                </div>

                                <div class="progress">

                                    <div data-placement="top" style="width: 65%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-warning">

                                        <span class="sr-only">65%</span>

                                        <span class="progress-type">Python/ Numpy/ Scipy</span>

                                    </div>

                                </div>

                                <div class="progress">

                                    <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">

                                        <span class="sr-only">60%</span>

                                        <span class="progress-type">C</span>

                                    </div>

                                </div>

                                <div class="progress">

                                    <div data-placement="top" style="width: 50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">

                                        <span class="sr-only">50%</span>

                                        <span class="progress-type">C++</span>

                                    </div>

                                </div>

                                <div class="progress">

                                    <div data-placement="top" style="width: 10%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-danger">

                                        <span class="sr-only">10%</span>

                                        <span class="progress-type">Go</span>

                                    </div>

                                </div>

                                <div class="progress-meter">

                                    <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I suck</span></div>

                                    <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I know little</span></div>

                                    <div style="width: 30%;" class="meter meter-right"><span class="meter-text">I&apos;m a guru</span></div>

                                    <div style="width: 20%;" class="meter meter-right"><span class="meter-text">I&apos;&apos;m good</span></div>

                                </div>

                            </a>
                        </ul>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Education</h4>
                        <table class="table table-striped table-responsive ">
                            <thead>
                            <tr>
                                <th>Degree</th>
                                <th>Graduation Year</th>
                                <th>CGPA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Masters in Computer Science and Engineering</td>
                                <td>2014</td>
                                <td>3.50</td>
                            </tr>
                            <tr>
                                <td>BSc. in Computer Science and Engineering</td>
                                <td>2011</td>
                                <td>3.25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- resume -->
        </div>

    </div>


    </body>

@stop
