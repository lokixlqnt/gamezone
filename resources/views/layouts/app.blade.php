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
            <ul>
                <a href="#">
                    <li>A propos du Parc</li>
                </a>
                <a href="#">
                    <li>Dans la Presse</li>
                </a>
            </ul>
            <ul id="middle">
                <a href="#">
                    <li>On Recrute</li>
                </a>
                <a href="#">
                    <li>Nous Contacter</li>
                </a>
            </ul>
            <ul>
                <a href="#">
                    <li>Conditions de vente</li>
                </a>
                <a href="#">
                    <li>Conditions légales</li>
                </a>
            </ul>
        </div>

        <div class="right_footer">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil magni asperiores assumenda saepe sint libero
            qui facilis nam, optio deserunt provident laborum aut, architecto consequatur totam ipsa corrupti deleniti
            beatae!
        </div>
    </footer>
</body>

</html>
