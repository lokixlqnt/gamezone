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
                <form action="{{ url('/contact')}}" method="post">

                    <div id="form">
                        <span><img src="{{ url ('img/log/icon_utilisateur.png') }}" alt="nom"></span>
                        <input type="text" class="bloc_champ" placeholder="Nom">
                    </div>

                    <div id="form">
                        <span><img src="{{ url ('img/log/icon_email.png') }}" alt="mail"></span>
                        <input type="text" class="bloc_champ" placeholder="Email">
                    </div>
                    <div id="form">
                        <textarea name="texte" rows="8" cols="80" placeholder="Votre message" class="message"></textarea>
                    </div>
                    <div class="login">
                        <input type="submit" value="Envoyer">
                    </div>

                </form>
            </div>
        </div>
</main>
@endsection
