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
                <span>Nous contacter</span>
            </div>

            <div class="bloc_form">
                <form action="{{ url('/contact')}}"> @csrf

                    <div id="form">
                        <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="nom"></span>
                        <input type="text" class="bloc_champ" placeholder="Nom" id="nom">
                    </div>

                    <div id="form">
                        <span><img src="{{ url ('img/log/icon_email.png') }}" alt="email"></span>
                        <input type="text" class="bloc_champ" placeholder="Email" id="email">
                    </div>
                    <div id="form">
                        <textarea name="texte" rows="8" cols="80" placeholder="Votre message" class="message" id="texte"></textarea>
                    </div>
                    <div class="login">
                        <input type="submit" value="Envoyer">
                    </div>

                </form>
            </div>
        </div>
</main>
@endsection
