@extends('layouts.login_layout')

@section('content')

<div class="mid-class">
    <div class="art-right-w3ls">
        <h2>Page de connexion</h2>
        @include('partials.flash_form')
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="main">
                <div class="form-left-to-w3l">
                    <input type="text" id="login" name="login" value="{{ old('login') }}" placeholder="Nom d'utilisateur" required="">
                </div>
                <div class="form-left-to-w3l ">
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required="required">
                    <div class="clear"></div>
                </div>
            </div>
            <div class="left-side-forget">
                <input type="checkbox" class="checked" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="remenber-me">Se souvenir de moi </span>
            </div>
            <div class="clear"></div>
            <div class="btnn">
                <button type="submit">Connexion</button>
            </div>
        </form>
        <div class="w3layouts_more-buttn">
            <h3>Problème de connexion ?
                <a href="#">Contact
                </a>
            </h3>
        </div>
    </div>
    <div class="art-left-w3ls">
        <img class="header-w3ls img" src="{{ asset('admin/images/logo.jpg') }}" alt="">
        <p class="text-center">
        <h1 align="center"> CENTRE MEDICO-CHIRURGICAL d'UROLOGIE et de CHIRURGIE MINI-INVASIVE</h1>
        <h3 align="center"> VALLEE MANGA BELL</h3>
        <h3 align="center"> DOUALA-BALI</h3>
        <h4 align="center"> TEL: (+ 237) 233 423 389 / 674 068 988 / 698 873 945</h4>
        <h4 align="center"> www.cmcu-cm.com</h4>
        </p>
    </div>
    @include('flashy::message')
</div>
@endsection
