@extends('layouts.app')

@section('title', 'Attraction')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/attraction.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>
<header>
</header>
<section class="attraction">
<div class="sidebar">
    <img src="../img/attractions/contagion_vr.png">
    <div class="sidebar-content">
    <a href="https://youtu.be/frqDT4bD-OE">Vidéo&nbsp;</a>
    <a href="http://www.virtual-games-park.fr/">+ d'infos et photos</a>
    <hr>
    <p>+ XP : 1500 XP / partie</p>
    <hr>
    <p>Accessibilité : <br/>
        minimum 130 cm </p>
        <a href="#" class="button">RÉSERVER MA PLACE</a>
    </div>
</div>
<div class="description">
    <h2>Contagion VR</h2>
    <hr>
    <p>Vous dirigez une équipe de soldats en charge de découvrir ce qui est arrivé aux scientifiques du laboratoire minier Omega Centuri B.
            Une fois à bord, vous apprenez qu’un terrible virus a fait muter tout l’équipage, et que la station spatiale est maintenant infestée par d’horribles zombies !
            Vous devez donc évacuer votre équipe en tentant de survivre le plus longtemps possible.</p>
    <a href="#" class="back">Retour à la liste des attractions</a>
</div>
</section>
</main>

@endsection
