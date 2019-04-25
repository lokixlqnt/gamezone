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
    <img src="{{ $attraction->photo }}">
    <div class="sidebar-content">
    <a href="https://youtu.be/frqDT4bD-OE">Vidéo&nbsp;</a>
    <a href="http://www.virtual-games-park.fr/">+ d'infos et photos</a>
    <hr>
    <p>+ XP : {{ $attraction->experience }}"> XP / partie</p>
    <hr>
    <p>Accessibilité :  <br/>
        {{ $attraction->minheight }}"> </p>
        <a href="#" class="button">RÉSERVER MA PLACE</a>
    </div>
</div>
<div class="description">
    <h2>{{ $attraction->name }}</h2>
    <hr>
    <p>{{ $attraction->description }}"></p>
</div>
<div class="end">
    <a href="#">Retour à la liste des attractions</a>
</div>
</section>
</main>

@endsection
