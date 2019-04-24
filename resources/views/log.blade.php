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
                <form>

                    <div id="form">
                        <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="Utilisateur"></span>
                        <input type="text" class="bloc_champ" placeholder="Nom de compte">
                    </div>

                    <div id="form">
                        <span><img src="{{ url ('img/log/icon_password.png') }}" alt="Password"></span>
                        <input type="password" class="bloc_champ" placeholder="Mot de passe">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox">Se souvenir de moi
                    </div>
                    <div class="login">
                        <input type="submit" value="Se connecter">
                    </div>

                </form>
            </div>

            <div class="inscription">
                <span>Pas encore inscrit ?<a href="#">Inscription</a></span>
            </div>
            <div class="inscription">
                <a href="#">Mot de passe oublié ?</a>
            </div>
        </div>
</main>
@endsection