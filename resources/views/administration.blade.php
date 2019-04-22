@extends('layouts.app')

@section('title', 'Administration')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/cgv.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>
 <div class="administration">
      <h1>ADMINISTRATION</h1>
</div>

<form method="POST" action="">
<label>
    <input>
    
</form>
</main>
@endsection
