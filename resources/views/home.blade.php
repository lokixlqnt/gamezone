@extends('layouts.app')

@section('title', 'Home')

@push('styles')
<link rel="stylesheet" href="{{ url ('css/home.css')}}">
@endpush

@section('content')
<header>
    @include('layouts.nav')

    <div class="bloc_header">
        <!-- <div class="reservation">
            <div class="border_yellow">
                <a href="#">Réserver
                    ma place</a>
            </div>
        </div> -->
        <div class="titre">LE PREMIER
            PARC D’ATTRACTIONS
            ENTIÈREMENT DÉDIÉ
            AUX JEUX-VIDÉOS !</div>
    </div>

</header>

<main>

    <section id="presentation">
        <div class="blocg">
            <img src="{{ url('img/logo_gamezone.png') }}" alt="GameZone">
        </div>
        <div class="blocd">
            <p>Dans la lignée de <em class="italique">BATTLE KART VR, FORTNITE ADVENTURE</em> et <em
                    class="italique">PUBG SURVIVOR</em>, <em class="yellow">GAME ZONE</em> est le quatrième concept créé
                par le groupe <em class="yellow">GEEK CYBERCENTER.</em></p>
            <p>Il sera le premier parc d’attraction au monde entièrement dédié à l’univers des jeux-vidéo.</p>
            <p>L’OUVERTURE DU PARC EST PRÉVUE POUR SEPTEMBRE 2019.</p>
        </div>
    </section>

    <div class="chiffre">
        <div class="box">
            <em class="number">9</em>
            <span class="title">Attractions</span>
        </div>
        <div class="box">
            <em class="number">5</em>
            <span class="title">Restaurants</span>
        </div>
        <div class="box">
            <em class="number">500k</em>
            <span class="title">Visiteurs</span>
        </div>
        <div class="box">
            <em class="number">9k</em>
            <span class="title">Hectares</span>
        </div>
    </div>

    <div class="bar_attractions">
        <h2>DÉCOUVREZ NOS ATTRACTIONS INSOLITES</h2>
    </div>
    <section id="attractions">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="box1">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_champions_league.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>Dans ce jeu vous bénéficiez de la toute dernière technologie hologramme pour
                                    affronter les légendes du football !</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="box2">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_fighter_hard.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>Dans ce jeu, il n’y a plus de règle. Vous êtes équipé de la dernière armure sensitive
                                    et vous ressentirez tous les coups que vos adversaires vont vous porter !</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="box3">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_contagion_vr.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>Vous dirigez une équipe de soldats en charge de découvrir ce qui est arrivé aux
                                    scientifiques du laboratoire minier Omega Centuri B !</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="box4">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_fighter_league.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>Vous aimez les jeux de combat alors bienvenue dans ce grand 8 aux couleurs des plus
                                    grands combattants de l’histoire du jeu-vidéo !</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="box5">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_game_center.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>Un espace de 3000 m2 dédié au Retro Gaming. Vous retrouverez toute l’ambiance des
                                    salles d’arcade pour défier vos amis dans les meilleurs jeux retro !</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="box6">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_heroes.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>L’attraction ultime de notre parc, un univers entièrement consacré aux super héros
                                    Marvel !</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="box7">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_awesome_heroes.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>Une plongée épique dans l’univers des vikings et des chevaliers. Vous retrouverez
                                    l’ambiance du célèbre jeu For Honor du studio français Ubisoft.</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="box8">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_battle_kart.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>BattleKart, c’est la quintessence du jeu vidéo, de la réalité augmentée et du karting
                                    électrique, ré-unis pour vous procurer des sensations inédites !</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="box9">
                    <figure class="effect-sadie">
                        <figcaption>
                            <div class="background_img">
                                <img src="{{ url('img/logo_champions_league_survivor.png') }}" />
                            </div>
                            <div class="background_attractions">
                                <p>Dans cette version alternative du jeu Champions League, les joueurs de foot sont
                                    remplacès par des vampires, des loups garous et des zombies.</p>
                                <a href="#"><button class="button position">En savoir +</button></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <div class="bloc_dot">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div id="button_footer">
        <button>Réserver
            ma place</button>
    </div>

</main>
<script src="{{ url('js/slide.js') }}"></script>
@endsection
