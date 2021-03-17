<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DVKS</title>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <script src="/js/wow.min.js"></script>
    <script src="/js/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>

<header class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-9">
                <a href="{{route('home')}}" class="logo">
                    <img src="/img/logo.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-8 col-3">
                {!! \Cache::get('navbar') !!}
                <!-- <ul class="header-nav">
                    <li><a href="{{route('home')}}">Startseite</a></li>
                    <li class="hasSubMenu">
                        <a href="">weiterbildungsprogramme</a>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="">Vertriebsleiterausbildung (IHK)</a></li>
                                <li><a href="">Geprüfter Vertriebsleiter (CEA)</a></li>
                                <li><a href="">Trainer für betriebliche Weiterbildung (IHK)</a></li>
                                <li><a href="">Management- und Führungstrainer (IHK)</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Seminare</a></li>
                    <li><a href="">Über die dvks</a></li>
                    <li><a href="">partner</a></li>
                    <li><a href="">bÜcher & medien</a></li>
                    <li><a href="">kontakt</a></li>
                </ul> -->
                <div class="burger-btn">
                    <span class="icon-menu-square-button"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_menu">
        <div class="icon-cross"></div>
    </div>
</header>


@yield('content')


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-6 col-12 mob-col">
                <p class="text">
                    Die starke Kooperation in der Ausbildung
                    von Verkaufs- und Vertriebsleitern
                </p>
                <div class="logos-wrap">
                    <a href=""><img src="/img/footer-1.png" alt=""></a>
                    <a href=""><img src="/img/footer-2.png" alt=""></a>
                </div>
                <strong class="strong-text">NUTZEN SIE IHRE CHANCE!</strong>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                <div class="text label">Info</div>
                <ul>
                    <li><a href="" class="text">Kontakt </a></li>
                    <li><a href="" class="text">Impressum</a></li>
                    <li><a href="" class="text">Datenschutz</a></li>
                    <li><a href="" class="text">AGB</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                <div class="text label">WEITERBILDUNGSPROGRAMME</div>
                <ul>
                    <li><a href="" class="text">Vertriebsleiterausbildung (IHK) </a></li>
                    <li><a href="" class="text">Geprüfter Vertriebsleiter (CEA)</a></li>
                    <li><a href="" class="text">Trainer für betriebliche Weiterbildung (IHK)</a></li>
                    <li><a href="" class="text">Management- und Führungstrainer (IHK)</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="text label">KONTAKT</div>
                <ul>
                    <li><a href="" class="text">DVKS Deutsche Verkäuferschule® </a></li>
                    <li><a href="" class="text">Mehrhooger Straße 1c</a></li>
                    <li><a href="" class="text">D-46499 Hamminkeln</a></li>
                    <li><a href="tel:4961044099846" class="text">Fon: +49 6104 4099846</a></li>
                    <li><a href="mailto:willkommen@verkaeuferschule.de" class="text">willkommen@verkaeuferschule.de</a></li>
                </ul>
            </div>
            <div class="col-12">
                <div class="rights">
                    <div class="text">© DVKS 2019. Alle Rechte vorbehalten.</div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>