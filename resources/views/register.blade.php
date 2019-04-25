<!-- @extends('layouts.app')

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
            <form>
                <div id="form">
                    <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="Utilisateur"></span>
                    <input type="text" class="bloc_champ" placeholder="Nom de compte">
                </div>

                <div id="form">
                    <span><img src="{{ url ('img/log/icon_email.png') }}" alt="Utilisateur"></span>
                    <input type="text" class="bloc_champ" placeholder="E-mail">
                </div>

                <div id="form">
                    <span><img src="{{ url ('img/log/icon_password.png') }}" alt="Password"></span>
                    <input type="password" class="bloc_champ" placeholder="Mot de passe">
                </div>

                <div id="form">
                    <span><img src="{{ url ('img/log/icon_password.png') }}" alt="Password"></span>
                    <input type="password" class="bloc_champ" placeholder="Confirmez votre mot de passe">
                </div>
                <div class="login">
                    <input type="submit" value="Valider">
                </div>
            </form>
        </div>

    </div>

</main>
@endsection -->