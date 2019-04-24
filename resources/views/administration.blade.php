@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Administration')
=======
@section('title', 'Panel administrateur')
>>>>>>> 164fdd189804d246230d8900172f1fe8eaf14701

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/cgv.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<<<<<<< HEAD
<main>
 <div class="administration">
      <h1>ADMINISTRATION</h1>
</div>

<form method="POST" action="">
<label>
    <input>
    
</form>
</main>
=======

<form method="POST" action=""> {{@csrf}}
    <label for="email">E-mail de l'utilisateur</label>
    <input name="email" id="email" type="text">
    <label for="Role" id="role" type="select">
    <input name="1" id="1">
</form>

>>>>>>> 164fdd189804d246230d8900172f1fe8eaf14701
@endsection
