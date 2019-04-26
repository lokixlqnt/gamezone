@extends('layouts.app')

@section('title', 'A propos')

@push('styles')
<link rel="stylesheet" href="{{ url ('css/about.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>
    <section>
        <div class="box1">
            <div class="title"><span>Presentation</span></div>
            <p><span>GEEK CYBERCENTER</span> est une SAS au capital de 45 824 123 euros. Il s’agit d’un groupe possédant
                plusieurs parcs d’attractions dans le monde comme :
                BATTLE KART VR, FORTNITE ADVENTURE, PUBG SURVIVOR.</p>
        </div>

        <div class="box2">
            <div class="title"><span>Information</span></div>
            <p>En septembre
                2019, le groupe ouvrira un nouveau parc :
                <span>GAME ZONE</span>. Ce dernier sera le premier parc
                d’attraction au monde entièrement dédié à
                l’univers des jeux-vidéo.</p>
        </div>

    </section>

    <div class="container">
        <div class="box3">
            <div class="title"><span>Origine du Parc</span></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa <span>qui officia deserunt mollit anim</span> id est laborum.</p>
        </div>
        <div class="box3">
            <div class="title"><span>Notre Equipe</span></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <span>incididunt ut
                    labore et dolore magna aliqua.</span> Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
        </div>
    </div>
</main>
        @endsection
