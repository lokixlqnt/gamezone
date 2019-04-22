@extends('layouts.app')

@section('title', 'Panel administrateur')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/cgv.css')}}">
@endpush

@section('content')
@include('layouts.nav')

<form method="POST" action=""> {{@csrf}}
    <label for="email">E-mail de l'utilisateur</label>
    <input name="email" id="email" type="text">
    <label for="Role" id="role" type="select">
    <input name="1" id="1">
</form>

@endsection
