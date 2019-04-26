<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GameZone - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    @stack('styles')
</head>

<body>
    @yield('content')

    <footer>
        <div class="left_footer">
        <p>Rejoignez nous sur nos réseaux</p>
            <div class="social">
                <a href="#"><img src="{{ url('img/social/insta.svg') }}" alt="Instagram"></a>
                <a href="#"><img src="{{ url('img/social/youtube.svg') }}" alt="Youtube"></a>
                <a href="#"><img src="{{ url('img/social/facebook.svg') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ url('img/social/twitter.svg') }}" alt="Twitter"></a>
            </div>
            <p class="number">08 59 62 08 59</p>
            <hr />
            <div class="hour">Du lundi au jeudi : 9h-19h
                Du vendredi au samedi : 9h-20h
                Le dimanche : 9h – 18h
            </div>
        </div>

        <div class="right_footer">
        <ul>
                <a href="./about">
                    <li>A propos du Parc</li>
                </a>
                <a href="./presse">
                    <li>Dans la Presse</li>
                </a>
            </ul>
            <ul id="middle">
                <a href="{{ route('recrute') }}">
                    <li>On Recrute</li>
                </a>
                <a href="contact">
                    <li>Nous Contacter</li>
                </a>
            </ul>
            <ul>
                <a href="{{ route('cgv') }}">
                    <li>Conditions de vente</li>
                </a>
                <a href="{{ route('mentionslegales') }}">
                    <li>Mentions légales</li>
                </a>
            </ul>
        </div>
    </footer>
</body>

</html>
