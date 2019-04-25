@extends('layouts.app')

@section('title', 'Register')

@push('styles')
<link rel="stylesheet" href="{{ url ('css/log.css')}}">
@endpush

@section('content')
@include('layouts.nav')

<main>
<div class="bloc">
    <div class="bloc_titre">
        <span>Inscription</span>
    </div>

    <div class="bloc_form">
        <form method="POST" action="{{ route('register') }}"> @csrf

            <div id="form">
                <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="Nom"></span>
                <input id="name" type="text" class="bloc_champ"
                    name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nom" autofocus>

            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
            </div>

            <div id="form">
            <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="Prenom"></span>
            <input id="firstname" type="text" class="bloc_champ"
                name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" placeholder="Prénom" autofocus>

            @if ($errors->has('firstname'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
            @endif
            </div>

            <div id="form">
            <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="Pseudo"></span>
            <input id="nickname" type="text" class="bloc_champ"
                name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" placeholder="Pseudo" autofocus>

            @if ($errors->has('nickname'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('nickname') }}</strong>
            </span>
            @endif
            </div>

            <div id="form">
            <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="Ville"></span>
            <input id="city" type="text" class="bloc_champ" name="city"
                value="{{ old('city') }}" required autocomplete="city" placeholder="Ville" autofocus>
            @if ($errors->has('city'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
            @endif
            </div>

            <div id="form">
            <span><img src="{{ url ('img/log/icon_email.png') }}" alt="Email"></span>
            <input id="email" type="email" class="bloc_champ" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email">

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            </div>

            <div id="form">
            <span><img src="{{ url ('img/log/icon_password.png') }}" alt="Password"></span>
            <input id="password" type="password" class="bloc_champ" placeholder="Mot de passe"
                name="password" required autocomplete="new-password">

            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            </div>

            <div id="form">
            <span><img src="{{ url ('img/log/icon_password.png') }}" alt="Password"></span>
            <input id="password-confirm" type="password" class="bloc_champ" placeholder="Confirme mot de passe" name="password_confirmation" required
                autocomplete="new-password">

            </div>
            <div class="login">
            <button type="submit">
                {{ __('Inscription') }}
            </button>
            </div>
        </form>
    </div>
</div>
</main>
@endsection
