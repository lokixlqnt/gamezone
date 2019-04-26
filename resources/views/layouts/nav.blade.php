<nav>
        <a href="./"><img class="logo" src="{{ url('img/logo_gamezone.png') }}" alt="gamezone"></a>
        <ul id="menu">
            <li><a class="border" href="{{ route('attractions') }}">Attractions</a></li>
            <li><a class="border" href="#">Préparer ma visite</a>
                <ul>
                    {{-- <li><a href="#">Se rendre au parc</a></li> --}}
                    <li><a href="{{ route('ticket') }}">Tarif et billetterie</a></li>
                    <li><a href="{{ route('events') }}">Horaires & calendrier</a></li>
                </ul>
            </li>
            <li><a class="border" href="#">Plan</a></li>
            <li><a class="game" href="#">My game</a></li>

            @if(Auth::user())
            <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    <input  type="submit" value="Déconnexion">
                @csrf
            </li>
            @else ()
            <li>
                <form id="login-form" action="{{ route('login') }}" method="POST">
                <input  type="submit" value="Connexion">
                @csrf
            </li>
            @endif


        </ul>
        <ul id="langue">
            <li><a href="#"><img src="{{ url('img/flags/fr.png') }}" alt="Français"></a>
                <ul>
                    <li><a href="#"><img src="{{ url('img/flags/en.png') }}" alt="Anglais"></a></li>
                    <li><a href="#"><img src="{{ url('img/flags/es.png') }}" alt="Espagnol"></a></li>
            </li>
        </ul>
        </ul>
        <div class="avatar">

            <span><a href="{{ route('compte') }}">
            @if(Auth::user()){{ Auth::user()->nickname}} @endif</a></span>
                <a href="{{ route('compte') }}">
            <img src="{{ url('img/avatar_snake.png') }}" alt="Snake">
                </a>


        </div>
</nav>
