@extends('layouts.app')
@section('title', 'Compte')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/compte.css')}}">
@endpush

@section('content')
@include('layouts.nav')

<body>
<form method ="POST" action="{{ route('comptedetails') }}">  @csrf
    <h2 class="formtitre">MODIFICATION</h2>
    <label for="pseudo">Modifier votre pseudo puis valider : {{ Auth::user()->nickname }}</label>
    <input type="text" name="pseudo" />
    <input type="submit" name="submit" class="submit" value="Modifier" />


    <div class="end">
            <a href="{{ route('compte') }}">Retourner à mon profil</a>
        </div>
<body>

