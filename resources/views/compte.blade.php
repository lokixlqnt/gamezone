@extends('layouts.app')

@section('title', 'Compte')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/compte.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>
  <div class="zonebleu">
    <h1>MON AVATAR</h1>
    <div class="rondavatar">
      <div class="rond">
        <a href="#"><img class="imgavatar" src="{{ url('img/avatar_snake.png') }}" /></a>
      </div>
      <!-- Mettre active si sélectionné (avatar user) -->
      <div class="rond active">
        <a href="#"><img class="imgavatar" src="{{ url('img/avatar-aigle.png') }}" /></a>
      </div>
      <div class="rond">
        <a href="#"><img class="imgavatar" src="{{ url('img/avatar-loup.png') }}" /></a>
      </div>
      <div class="rond">
        <a href="#"><img class="imgavatar" src="{{ url('img/avatar-skull.png') }}" /></a>
      </div>
    </div>
  </div>
  <div class="divform">
    <form>
      <h2 class="formtitre">PROFIL</h2>
      <label for="pseudo">Pseudo</label>
      <input type="text" name="pseudo" required/>
      <label for="pseudo">Nom</label>
      <input type="text" name="nom"/>
      <label for="pseudo">Prenom</label>
      <input type="text" name="prenom"/>
      <label for="pseudo">Ville</label>
      <input type="text" name="ville"/>
      <input type="submit" name="submit" class="submit" value="Valider" />
    </form>
  </div>
</main>  
@endsection
