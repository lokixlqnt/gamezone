@extends('layouts.app')

@section('title', 'Attractions')

@push('styles')
<link rel="stylesheet" href="{{ url ('css/attraction.css')}}">
@endpush

@section('content')

@include('layouts.nav')

<main>
    <div class="message">
        Sorry, your browser does not support CSS Grid. 😅
    </div>
    <section class="section">
        <div class="grid">
            <!-- img 1 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_fighter_league.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">SUPER FIGHTER LEAGUE</span><br />
                        1 000 XP / partie <br />
                        Interdit aux moins d'1m10<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 2 -->
            <div class="item item--large animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_heroes.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">HEROES TEAM</span><br />
                        2 500 XP / partie <br />
                        Accessible à tous<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 3 -->
            <div class="item item--long animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_contagion_vr.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">CONTAGION VR</span><br />
                        1 500 XP / partie <br />
                        Interdit aux moins d'1m30<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 4 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_fighter_hard.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">FIGHTER HARD TEAM</span><br />
                        1 000 XP / partie <br />
                        Interdit aux moins d'1m10<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 5 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_battle_kart.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">BATTLE KART</span><br />
                        1 000 XP / partie <br />
                        Accessible à tous<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 6 -->
            <div class="item item--long animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_game_center.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">GAME CENTER</span><br />
                        500 XP / partie <br />
                        Accessible à tous<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 7 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_awesome_heroes.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">AWSOME HEROES</span><br />
                        1 200 XP / partie <br />
                        Interdit aux moins d'1m30<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 8     -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_champions_league.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">CHAMPIONS LEAGUE</span><br />
                        1 300 XP / partie <br />
                        Accessible à tous<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>
            <!-- img 9 -->
            <div class="item item--medium animated zoomIn">
                <img class="item__image" src="{{ url ('img/logo_champions_league_survivor.png') }}">
                <div class="txt">
                    <p>
                        <span class="bold">CHAMPIONS LEAGUE SURVIVOR </span><br />
                        1 400 XP / partie <br />
                        Interdit au moins d’1m10<br />
                    </p>
                    <a href="#">EN SAVOIR +</a>
                </div>
            </div>


        </div>
</main>
@endsection
