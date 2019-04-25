{{-- @extends('layouts.app')

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

      <p>Expérience : {{ Auth::user()->experience }}</p>

  <div class="divform">
    <form method ="POST" action="">  @csrf
      <h2 class="formtitre">PROFIL</h2>
      <label for="pseudo">Votre Pseudo : {{ Auth::user()->nickname }}</label>
      {{-- <input type="text" name="pseudo" /> --}}
      {{-- <input type="submit" name="submit" class="submit" value="Modifier" />

      <label for="pseudo">Votre Nom : {{ Auth::user()->name  }}</label>
      {{-- <input type="text" name="nom" /> --}}
      {{-- <input type="submit" name="submit" class="submit" value="Modifier" />


      <label for="pseudo"> Votre Prénom : {{ Auth::user()->firstname }}</label>
      {{-- <input type="text" name="prenom" /> --}}
      {{-- <input type="submit" name="submit" class="submit" value="Modifier" /> --}}

      {{-- <label for="pseudo">Votre ville : {{ Auth::user()->city }}</label> --}}
      {{-- <input type="text" name="ville"/> --}}
      {{-- <input type="submit" name="submit" class="submit" value="Modifier" /> --}}

{{--
</form>
</div>
</main>
@endsection  --}} --}}


@extends('layouts.app')

@section('title', 'Compte')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/compte.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<body>
    <section id="account">
        <div class="card">
            <div class="inside-card">
                <div class="card-head">
                    <a href="#">
                        <div class="avatar">
                            <img src="img/avatar1.png">
                        </div>
                    </a>
                    <div class="user">
                        <h1> Bienvenue {{ Auth::user()->nickname }}<a class="edit" href="#"><img src="./img/iconfinder_15.Pencil_290135.svg"></a></h1>

                        <h2> Administrateur </h2>
                    </div>

                </div>
                <div class="xp">
                    <hr>
                    <p> {{ Auth::user()->experience }} XP</p>
                    <hr>
                </div>
                <div class="info-box">
                    <ul>
                        <li><span class="input-name">Nom : </span>  <span class="input-user-info"> {{ Auth::user()->firstname }}</span><a class="edit" href="#"><img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                        <li><span class="input-name">Prénom : </span> <span class="input-user-info"> {{ Auth::user()->name }}</span><a class="edit" href="#"><img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                        <li><span class="input-name">Ville : </span> <span class="input-user-info"> {{ Auth::user()->city }}</span><a class="edit" href="#"><img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                        <li><span class="input-name">Email : </span> <span class="input-user-info"> {{ Auth::user()->email }}</span><a class="edit" href="#"><img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                    </ul>
                </div>
           </div>
        </div>
    </section>
</body>






{{-- @extends('layouts.top')

@section('content')
<div class="col-md-9">
    <div class="card rounded-0">

        <div class="card-body">

            <h4></h4>
            <div class="row">
                <div class="col-12 col-sm-12">
                <h4></h4>
                    {{ Form::model($users, ['url'=>$users->id ? URL::action('UsersController@update', $users ) : URL::action('UsersController@edit', $users), 'method'=>$users->id ? 'POST' : 'GET'])}}
                    <div class="form-row">
                        <div class="form-group col">
                        {{ Form::label('name', 'Titre') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group col">
                        {{ Form::label('nickname', 'Pseudo') }}
                        {{ Form::text('nickname', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                    {{ Form::label('firstname', 'Prenom') }}
                    {{ Form::text('firstname', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                        {{ Form::label('city', 'Ville') }}
                        {{ Form::text('city', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group col">
                        {{ Form::label('email', 'Mail') }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    {{ Form::submit(null, ['class' => 'btn btn-primary']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
