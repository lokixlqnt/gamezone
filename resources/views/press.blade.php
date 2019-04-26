@extends('layouts.app')

@section('title', 'A propos')

@push('styles')
<link rel="stylesheet" href="{{ url ('css/about.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>

    <div class="boite">
        <p>Se qu'on pense de nous: </p>
        <p>Lorem ipsum dolor sit amet,<span> consectetur adipisicing elit, sed do eiusmod tempor incididunt</span> ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui <span>officia
                deserunt mollit anim id est laborum.</span></p>

    </div>
    <section>
        <div class="boite1">
            <p>Voici Quelque photo :</p>

            <img src="{{ url ('img/run_kart.jpg') }}">
        </div>
        <img src="{{ url ('img/fond_battle_kart.png') }}">
    </section>
</main>
@endsection
