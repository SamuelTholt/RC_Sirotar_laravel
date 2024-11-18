<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo_sirotar.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="{{asset('assets/js/java_script.js')}}"></script>

    <!-- Questrial font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Questrial&display=swap" rel="stylesheet">

    <!-- Inkut Antiqua -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Rodinné Centrum SIROTÁR</title>
</head>
<body>
<header class="bg-light shadow-sm">
    <nav class="navigationBar">
        <a href="#home" class="logo">
            <img src="{{asset('assets/images/logo_sirotar.png')}}" alt="RC SIROTÁR">
        </a>
        <input type="checkbox" id="toggler">
        <label for="toggler"><i class="fas fa-bars"></i></label>
        <div class="menuList">
            <ul class="list">
                <li class="nav-item">
                    <a href="#home"><i class="fa-solid fa-house" style="color: #35A0CE7F;"></i> HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#about_us"><i class="fa-solid fa-circle-info" style="color: #35A0CE7F;"></i> O nás</a>
                </li>
                <li class="nav-item">
                    <a href="#activities"><i class="fa-solid fa-dice" style="color: #35A0CE7F;"></i> Herňa a Átrium</a>
                </li>
                <li class="nav-item">
                    <a href="#program"><i class="fa-solid fa-gamepad" style="color: #35A0CE7F;"></i> Program</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery"><i class="fa-solid fa-camera" style="color: #35A0CE7F;"></i> Galéria</a>
                </li>
                <li class="nav-item">
                    <a href="#team"><i class="fa-solid fa-users" style="color: #35A0CE7F;"></i> Náš tím</a>
                </li>
                <li class="nav-item">
                    <a href="#kontakt"><i class="fa-solid fa-phone" style="color: #35A0CE7F;"></i> Kontakt</a>
                </li>

                @if(Auth::user())
                    <div class="dropdown" style="margin-top: 10px">
                        <button class="btn btn-secondary dropdown-toggle" type="text" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-right-to-bracket"></i> {{ Auth::user()->name }}
                            <span class="text-sm text-gray-500">
                            [{{ Auth::user()->role->nazov_role }}]
                        </span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    {{ __('Profil') }}
                                </a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Odhlásiť sa
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @else
                    <div class="dropdown" style="margin-top: 10px">
                        <button class="btn btn-secondary dropdown-toggle" type="text" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-right-to-bracket"></i> Login/Register
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{url('login')}}">Prihlásiť sa</a></li>
                            <li><a class="dropdown-item" href="{{url('register')}}">Zaregistrovať sa</a></li>
                        </ul>
                    </div>
                @endif
            </ul>
        </div>
    </nav>
</header>

<section id="home" class="container-fluid p-0">
    <div style="position: relative; width: 100%; height: 100vh; overflow: hidden;">
        <img src="{{asset('assets/images/family_logo_v3.jpg')}}"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    </div>
</section>


<!-- O nás -->
<section id="about_us" class="section py-5 text-white simple_waves-shape_divider-top" style="background-color: #C95546;">
    <div class="container grow-animation">

        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-8">
                <h2 class="display-4 text-shadow hidden" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 50px;">
                    <span style="font-weight:bold; color:#F4FEFD;"><i class="fa-solid fa-puzzle-piece fa-lg" style="color: #ffffff;"></i><span> O nás - Aktivity</span></span>
                </h2>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-10">
                <p class="lead hidden"  style="font-family: 'Inknut Antiqua', serif; font-size:25px; line-height:1.8em; text-align:center; color: black">
                    Rodinné centrum <strong><b><em>Sirotár</em></b></strong> pod sebou združuje rôzne aktivity.
                    V rámci neho sme otvorili <strong><b><em>herňu Rodinného centra a Átrium</em></b></strong>, ktoré sú určené mamičkám s menšími deťmi.
                    Cieľom je vytvoriť priestor pre lepšie prežívanie materstva, osobný aj duchovný rozvoj a sebarealizáciu mamičiek. Rovnako aj vytvoriť priestor pre zdravú socializáciu ich ratolestí.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section py-5 dripping_paint-shape_divider-btm">
    <section id="activities" class="section py-5">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Herňa -->
                <div class="col-md-6">
                    <h2 class="display-4 text-shadow hidden" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039)">
                        <span style="font-weight:bold; color:#34A0CE;">Herňa</span></span>
                    </h2>
                    <p class="lead hidden"  style="font-family: 'Inknut Antiqua', serif; font-size:20px; line-height:1.8em; text-align:justify; color: black">
                        Herňa je otvorená pre mamičky a deti každú stredu (okrem prázdnin a sviatkov) od 9:00 h do 12:00 h, program (detská aktivita alebo prednáška) začína o 10:00 h spoločnou modlitbou. Počas programu je k dispozícii spovedná služba a knižnica.
                    </p>
                    <p class="lead hidden"  style="font-family: 'Inknut Antiqua', serif; font-size:20px; line-height:1.8em; text-align:justify; color: black">
                        <b><u>Aktivity pre deti:</u></b>
                    </p>
                    <ul class="lead hidden"  style="font-family: 'Inknut Antiqua', serif; font-size:20px; line-height:1.8em; text-align:justify; color: black">
                        <li>Hravá angličtina</li>
                        <li>Montessori hernička</li>
                        <li>Detské tvorivé dielne</li>
                        <li>Klavírna víla – Boinka</li>
                        <li>Katechézy Dobrého pastiera</li>
                    </ul>

                    <p class="lead hidden"  style="font-family: 'Inknut Antiqua', serif; font-size:20px; line-height:1.8em; text-align:justify; color: black">
                        <b><u>Prednášky pre mamičky:</u></b>
                    </p>
                    <ul class="lead hidden"  style="font-family: 'Inknut Antiqua', serif; font-size:20px; line-height:1.8em; text-align:justify; color: black">
                        <li>Fyzioterepeutka Radka</li>
                        <li>Učíme sa rozprávať s pani logopedičkou</li>
                        <li>Svedectvá mnohodetných rodín</li>
                        <li>Príprava na pôrod s dulou</li><li>Staráme sa o seba s kozmetičkou</li>
                        <li>Ženský cyklus – ako sa v ňom dobre vyznať</li>
                        <li>Zdravie našich detí s pani pediatričkou</li>
                        <li>O domácom vzdelávaní</li>
                        <li>O kváskovaní a iné…</li>
                    </ul>
                </div>
                <!--  Átrium -->
                <div class="col-md-6">
                    <h2 class="display-4 text-shadow hidden" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039)">
                        <span style="font-weight:bold; color:#34A0CE;">Átrium</span></span>
                    </h2>
                    <p class="lead hidden"  style="font-family: 'Inknut Antiqua', serif; font-size:20px; line-height:1.8em; text-align:justify; color: black">
                        Átrium je miesto, kde sa deti zoznamujú so základnými pravdami viery cez koncept Katechéz Dobrého pastiera, ktorý je postavený na pedagogických princípoch Márie Montessori a teologických znalostiach Sofie Cavalletti. Deti sú privádzané k modlitbe a poznávaniu Boha.
                    </p>

                    <p class="lead hidden" style="font-family: 'Inknut Antiqua', serif; font-size:30px; line-height:1.8em; text-align:left; color: #D9534F; margin-top: 10px">
                        <b>Stretnutia sú pre vekovú skupinu 6-9+ rokov a bývať budú pondelky v čase od 15:30 do 17:30.
                            <br>
                            Prihláška: <a href="https://forms.gle/j6wfJjf1ebfjaFr56" style="color: #93B660;">https://forms.gle/j6wfJjf1ebfjaFr56</a>
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </section>
</section>

<section id="activities-gallery" class="section py-5 waves-shape_divider-top" style="background-color: #B3D9E5;">
    <div class="container" style="margin-top: 200px;">
        <div class="row justify-content-center hidden">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card ms-auto">
                    <img src="{{asset('assets/images/1.jpg')}}" class="card-img-top" alt="Detské tvorivé dielne">
                    <div class="card-body">
                        <p class="card-text text-center" style=" font-weight:bolder; font-size: 20px; 'Questrial', sans-serif">Detské tvorivé dielne</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4 hidden">
                <div class="card ms-auto">
                    <img src="{{asset('assets/images/2.jpg')}}" class="card-img-top" alt="Klavírna víla – Boinka">
                    <div class="card-body">
                        <p class="card-text text-center" style=" font-weight:bolder; font-size: 20px; 'Questrial', sans-serif">Klavírna víla – Boinka</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4 hidden">
                <div class="card ms-auto">
                    <img src="{{asset('assets/images/3.jpg')}}" class="card-img-top" alt="Montessori hernička">
                    <div class="card-body">
                        <p class="card-text text-center" style=" font-weight:bolder; font-size: 20px; 'Questrial', sans-serif">Montessori hernička</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Program -->
<section id="program" class="section py-5 text-white waves-shape_divider-btm">
    <div class="container">

        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-8">
                <h2 class="display-4 text-shadow hidden1" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 200px;">
                    <span style="font-weight:bold; color:#C75646;">Aktuálny Program HERNE</span>
                </h2>
                <h2 class="display-4 text-shadow hidden1" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039)">
                    <span style="font-weight:bold; color:#C75646;"><i class="fa-solid fa-gamepad fa-lg" style="color: #c75646;"></i></span>
                </h2>
            </div>
        </div>

        <div class="mb-4 hidden1">
            <img src="{{asset('assets/images/program.jpg')}}"
                 alt="Program herne" class="img-fluid image-style shadow-community" style="object-fit: cover;">
        </div>
    </div>
</section>


<!-- Galéria -->
<section id="gallery" class="pt-5 pb-5 paint-shape_divider-top" style="background-color: #93B660">
    <h2 class="display-4 text-shadow text-center hidden" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 50px; margin-bottom: 50px">
        <span style="font-weight:bold; color:#F4FEFD;"><span>Galéria <i class="fa-solid fa-camera fa-lg" style="color: #ffffff;"></i></span></span>
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide hidden" data-interval="false">
                    <div class="carousel-inner" id="carousel-inner-container">
                    </div>
                </div>
            </div>
            <div class="text-center hidden">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Tím -->
<section id="team" class="shapedividers_com-5827">
    <h2 class="display-4 text-shadow text-center hidden1" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 150px; margin-bottom: 50px">
        <span style="font-weight:bold; color:#80BA42;"><i class="fa-solid fa-users fa-lg"></i><span> Náš tím</span></span>
    </h2>
    <div class="container hidden1" style="margin-top: 100px">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" style="width: 130px; height: 130px; object-fit: cover;" src={{asset('assets/images/Miroslav-Uhrina_1-480x300.jpg')}}>
                    </div>
                    <div class="team-content">
                        <h3 class="name">Miroslav Uhrina</h3>
                        <h4 class="title">Koordinátor Rodinného Centra</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture1">
                        <img class="img-fluid" style="width: 130px; height: 130px; object-fit: cover;" src={{asset('assets/images/Katarína-Sopková-480x300.jpg')}}>
                    </div>
                    <div class="team-content">
                        <h3 class="name">Katarína Sopková</h3>
                        <h4 class="title">Zodpovedná za Herňu</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture2">
                        <img class="img-fluid" style="width: 130px; height: 130px; object-fit: cover;" src="{{asset('assets/images/Mária-Sroková-480x300.jpg')}}">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Mária Sroková</h3>
                        <h4 class="title">Zodpovedná za Átrium</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="our-team">
                    <div class="picture3">
                        <img class="img-fluid" style="width: 130px; height: 130px; object-fit: cover;" src={{asset('assets/images/Magdaléna-Uhrinová-Brezániová-480x300.jpg')}}>
                    </div>
                    <div class="team-content">
                        <h3 class="name">Magdaléna Uhrinová Brezániová</h3>
                        <h4 class="title">Dobrovoľníčka v herni</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Kontakt -->
<section id="kontakt" class="section py-5 text-white vlnky-shape_divider-end" style="background-color: #eb8c4a; margin-top: 100px;">
    <div class="container">

        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-8">
                <h2 class="display-4 text-shadow hidden" style="text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 50px;">
                    <span style="font-weight:bold; color:#F4FEFD;"><span>Kontaktujte nás</span></span>
                </h2>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center hidden">
            <!-- Adresa -->
            <div class="col-md-4 mb-4">
                <div class="card ms-auto">
                    <div class="card-body" style="height: 280px;">
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 50px; font-family: 'Questrial', sans-serif"><i class="fa-solid fa-location-dot fa-xl"></i></p>
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 25px; font-family: 'Questrial', sans-serif">Adresa</p>
                        <p class="card-text text-center" style="font-weight:normal; font-size: 15px; font-family: 'Inknut Antiqua', sans-serif">
                            Jezuitská 6, Žilina, Slovakia, 01001 (v priestoroch Fidélia)</p>
                    </div>
                </div>
            </div>

            <!-- FB -->
            <div class="col-md-4 mb-4 hidden">
                <div class="card ms-auto">
                    <div class="card-body" style="height: 280px;">
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 91px; font-family: 'Questrial', sans-serif">
                            <a href="https://www.facebook.com/rc.sirotar" target="_blank" style="color: #004070;">
                                <i class="fa-brands fa-facebook fa-xl"></i>
                            </a>
                        </p>
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 25px; font-family: 'Questrial', sans-serif">Facebook</p>
                    </div>
                </div>
            </div>


            <!-- Kontakt -->
            <div class="col-md-4 mb-4">
                <div class="card ms-auto">
                    <div class="card-body" style="height: 280px;">
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 50px; font-family: 'Questrial', sans-serif"><i class="fa-solid fa-phone fa-xl"></i></p>
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 25px; font-family: 'Questrial', sans-serif">Kontakt</p>
                        <p class="card-text text-center" style="font-weight:normal; font-size: 15px; font-family: 'Inknut Antiqua', sans-serif">
                            +421 907 175 211</p>
                        <p class="card-text text-center" style="font-weight:normal; font-size: 15px; font-family: 'Inknut Antiqua', sans-serif">
                            <a href="mailto:info@rcsirotar.sk" style="text-decoration: underline; color: orange;">info@rcsirotar.sk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid justify-content-center text-center g-0 hidden1">
        <div class="row g-0 justify-content-center">
            <div class="col-md-8 justify-content-center">
                <div class="lc-block overflow-hidden">
                    <div style="max-height:40vh" class="ratio ratio-1x1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.805470931671!2d18.733343057027465!3d49.22321619782527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47145ea65432012f%3A0x1adc0f9c4b5bd421!2sJezuitsk%C3%A1%206%2C%20010%2001%20%C5%BDilina!5e0!3m2!1ssk!2ssk!4v1729810453893!5m2!1ssk!2ssk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="text-white pt-4 pb-4" style="background-color:#b0cc8e">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between text-center">
            <!-- Prvý stĺpec - text "RODINNÉ" -->
            <h4 class="mb-0 text-right flex-grow-1" style="font-family:'Helvetica', 'Arial', sans-serif; font-weight: bold;">R O D I N N É</h4>

            <!-- Stredný stĺpec - logo -->
            <img src={{asset('assets/images/logo_2.png')}} alt="Logo" class="mx-3" style="width: 100px; height: auto;">

            <!-- Tretí stĺpec - text "CENTRUM" -->
            <h4 class="mb-0 text-left flex-grow-1" style="font-family:'Helvetica', 'Arial', sans-serif; font-weight: bold;">C E N T R U M</h4>
        </div>
    </div>
</footer>

</body>
</html>
