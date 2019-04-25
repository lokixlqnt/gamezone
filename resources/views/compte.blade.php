


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

                        <li><span class="input-name">Nom : </span>
                            <span class="input-user-info"> {{ Auth::user()->firstname }}</span>
                                <a class="edit" href="{{ route('comptedetails', ['id' =>$users->id])}}">
                                <img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                        <li><span class="input-name">Prénom : </span>
                            <span class="input-user-info"> {{ Auth::user()->name }}</span>
                                <a class="edit" href="{{ route('comptedetails', ['id' =>$users->id])}}">
                                <img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                        <li><span class="input-name">Ville : </span>
                            <span class="input-user-info"> {{ Auth::user()->city }}</span>
                                <a class="edit" href="{{ route('comptedetails', ['id' =>$users->id])}}">
                                <img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                        <li><span class="input-name">Email : </span>
                            <span class="input-user-info"> {{ Auth::user()->email }}</span>
                                <a class="edit" href="{{ route('comptedetails', ['id' =>$users->id])}}">
                                <img src="./img/iconfinder_15.Pencil_290135.svg"></a></li>
                    </ul>
                </div>
           </div>
        </div>
    </section>
</body>

q



