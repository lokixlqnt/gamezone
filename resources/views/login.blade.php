@extends('layouts.app')

@section('title', 'Logging')

@push('styles')
<link rel="stylesheet" href="{{ url ('css/log.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>

    <div class="bloc">

        <div class="bloc_titre">
            <span>Connectez-vous</span>
        </div>

        <div class="bloc_form">

            <form method="POST" action="{{ route('login') }}"> @csrf

                <div id="form">
                    <span><img src="{{ url ('img/log/icon_email.png') }}" alt="Email"></span>
                    <input id="email" type="email" class="bloc_champ" placeholder="Email" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div id="form">

                    <span><img src="{{ url ('img/log/icon_password.png') }}" alt="Password"></span>
                    <input id="password" type="password" class="bloc_champ" placeholder="Mot de passe" name="password"
                        required autocomplete="current-password">

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="checkbox">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <div class="login">
                    <button type="submit">
                        {{ __('Login') }}
                    </button>
                </div>

                <div class="inscription">
                    <span>Pas encore inscrit ?<a href="{{ route('register') }}">Inscription</a></span>
                </div>
                @if (Route::has('password.request'))
                <div class="inscription">
                    <a href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
                </div>
                @endif
            </form>
        </div>
    </div>
</main>
@endsection
