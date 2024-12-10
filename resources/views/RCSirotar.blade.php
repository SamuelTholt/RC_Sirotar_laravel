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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Playfair+Display:wght@400;500;600;700&family=Libre+Baskerville:wght@400;700&family=Crimson+Text:wght@400;600;700&family=Roboto+Slab:wght@300;400;500;700&family=EB+Garamond:wght@400;500;600;700&family=Slabo+27px&family=Lora:wght@400;500;600;700&family=Zilla+Slab:wght@300;400;500;600;700&family=Vollkorn:wght@400;500;600;700&family=PT+Serif:wght@400;700&family=Amiri:wght@400;700&family=Domine:wght@400;500;600;700&family=Cardo:wght@400;700&family=Spectral:wght@400;500;600;700&family=Abril+Fatface&family=Alegreya:wght@400;500;700&family=Faustina:wght@400;500;600;700&family=Noticia+Text:wght@400;700&display=swap" rel="stylesheet">

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
                            @if(Auth::user()->isAdmin())
                                <li><a class="dropdown-item" href="{{ url('/editor') }}">
                                        {{ __('Editor') }}
                                    </a></li>
                            @endif

                            @if(Auth::user()->isHlavnyAdmin())
                                <li><a class="dropdown-item" href="{{ url('/users') }}">
                                        {{ __('Users') }}
                                    </a></li>
                            @endif
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
    <div style="position: relative; width: 100%; height: 200vh; overflow: hidden;">
        <img src="{{asset('assets/images/family_logo_v3.jpg')}}"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
    </div>
</section>


<!-- O nás -->
<section id="about_us" class="section py-5 text-white simple_waves-shape_divider-top" style="background-color: #C95546;">
    <div class="container grow-animation">

        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-8">
                <h2 class="{{$sekcia_about_us->typografia_nadpisu}} text-shadow hidden" style="font-family: {{$sekcia_about_us->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 50px;">
                    <span style="font-weight:bold; color:{{$sekcia_about_us->farba_nadpisu}};"><i class="{{$sekcia_about_us->ikonka_nadpisu}}" style="color: {{$sekcia_about_us->farba_ikonky_nadpisu}};"></i><span> {!!$sekcia_about_us->nadpis!!} </span></span>
                </h2>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-10">
                <p class="lead hidden"  style="font-family: {{$sekcia_about_us->font_textu}}; font-size:{{$sekcia_about_us->velkost_textu}}px; line-height:1.8em; text-align:center; color: {{$sekcia_about_us->farba_textu}}">
                    {!! $sekcia_about_us->text  !!}
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
                    <h2 class="{{$sekcia_act_herna->typografia_nadpisu}} text-shadow hidden" style="font-family: {{$sekcia_act_herna->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039)">
                        <span style="font-weight:bold; color:{{$sekcia_act_herna->farba_nadpisu}};"><i class="{{$sekcia_act_herna->ikonka_nadpisu}}" style="color: {{$sekcia_act_herna->farba_ikonky_nadpisu}};"></i><span> {!!$sekcia_act_herna->nadpis!!} </span></span>
                    </h2>
                    <p class="lead hidden"  style="font-family: {{$sekcia_act_herna->font_textu}}; font-size:{{$sekcia_act_herna->velkost_textu}}px; line-height:1.8em; text-align:justify; color: {{$sekcia_act_herna->farba_textu}}">
                        {!! $sekcia_act_herna->text  !!}
                    </p>
                    <p class="lead hidden"  style="font-family: {{$sekcia_act_herna_deti->font_nadpisu}}; font-size:{{$sekcia_act_herna_deti->typografia_nadpisu}}; line-height:1.8em; text-align:justify; color: {{$sekcia_act_herna_deti->farba_nadpisu}}">
                        {!! $sekcia_act_herna_deti->nadpis  !!}
                    </p>
                    <ul class="lead hidden"  style="font-family: {{$sekcia_act_herna_deti->font_textu}}; font-size:{{$sekcia_act_herna_deti->velkost_textu}}px; line-height:1.8em; text-align:justify; color: {{$sekcia_act_herna_deti->farba_textu}}">
                        {!! $sekcia_act_herna_deti->text  !!}
                    </ul>

                    <p class="lead hidden"  style="font-family: {{$sekcia_act_herna_prednasky->font_nadpisu}}; font-size:{{$sekcia_act_herna_prednasky->typografia_nadpisu}}; line-height:1.8em; text-align:justify; color: {{$sekcia_act_herna_prednasky->farba_nadpisu}}">
                        {!! $sekcia_act_herna_prednasky->nadpis  !!}
                    </p>
                    <ul class="lead hidden"  style="font-family: {{$sekcia_act_herna_prednasky->font_textu}}; font-size:{{$sekcia_act_herna_prednasky->velkost_textu}}px; line-height:1.8em; text-align:justify; color: {{$sekcia_act_herna_prednasky->farba_textu}}">
                        {!! $sekcia_act_herna_prednasky->text  !!}
                    </ul>
                </div>

                <!--  Átrium -->
                <div class="col-md-6">
                    <h2 class="{{$sekcia_act_atrium->typografia_nadpisu}} text-shadow hidden" style="font-family: {{$sekcia_act_atrium->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039)">
                        <span style="font-weight:bold; color:{{$sekcia_act_atrium->farba_nadpisu}};"><i class="{{$sekcia_act_atrium->ikonka_nadpisu}}" style="color: {{$sekcia_act_atrium->farba_ikonky_nadpisu}};"></i><span> {!!$sekcia_act_atrium->nadpis!!} </span></span>
                    </h2>
                    <p class="lead hidden"  style="font-family: {{$sekcia_act_atrium->font_textu}}; font-size:{{$sekcia_act_atrium->velkost_textu}}px; line-height:1.8em; text-align:justify; color: {{$sekcia_act_atrium->farba_textu}}">
                        {!! $sekcia_act_atrium->text  !!}
                    </p>

                    <p class="lead hidden" style="font-family: {{$sekcia_act_atrium_stretnutia->font_nadpisu}}; font-size:{{$sekcia_act_atrium_stretnutia->typografia_nadpisu}}; line-height:1.8em; text-align:left; color: {{$sekcia_act_atrium_stretnutia->farba_nadpisu}}; margin-top: 10px">
                        {!! $sekcia_act_atrium_stretnutia->nadpis  !!}
                        {!! $sekcia_act_atrium_stretnutia->text  !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
</section>

<section id="activities-gallery" class="section py-5 waves-shape_divider-top" style="background-color: #B3D9E5;">
    <div class="container" style="margin-top: 200px;">
        <div class="row justify-content-center hidden">

            @foreach($foto_aktivity as $fotka)
                    <div class="col-md-4 mb-4">
                        <div class="card ms-auto">
                            <img src="{{asset($fotka->cesta_k_suboru)}}" class="card-img-top" alt="{{$fotka->nadpis}}">
                            <div class="card-body">
                                <p class="card-text text-center" style=" font-weight:bolder; font-size: 20px; 'Questrial', sans-serif">{{$fotka->nadpis}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Program -->
<section id="program" class="section py-5 text-white waves-shape_divider-btm">
    <div class="container">

        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-8">
                <h2 class="{{$sekcia_program->typografia_nadpisu}} text-shadow hidden1" style="font-family: {{$sekcia_program->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 200px;">
                    <span style="font-weight:bold; color:{{$sekcia_program->farba_nadpisu}};">{!!$sekcia_program->nadpis!!}</span>
                </h2>
                <h2 class="{{$sekcia_program->typografia_nadpisu}} text-shadow hidden1" style="font-family: {{$sekcia_program->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039)">
                    <span style="font-weight:bold; color:{{$sekcia_program->farba_ikonky_nadpisu}};"><i class="{{$sekcia_program->ikonka_nadpisu}}" style="color: {{$sekcia_program->farba_ikonky_nadpisu}}"></i></span>
                </h2>
            </div>
        </div>

        @if($program)
            <div class="mb-4 hidden1">
                <img src="{{asset($program->cesta_k_suboru)}}"
                     alt="Program herne" class="img-fluid image-style shadow-community" style="object-fit: cover;">
            </div>
        @endif
    </div>
</section>


<!-- Galéria -->
<section id="gallery" class="pt-5 pb-5 paint-shape_divider-top" style="background-color: #93B660">
    <h2 class="{{$sekcia_galeria->typografia_nadpisu}} text-shadow text-center hidden" style="font-family: {{$sekcia_galeria->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 50px; margin-bottom: 50px">
        <span style="font-weight:bold; color:{{$sekcia_galeria->farba_nadpisu}};"><span>{!! $sekcia_galeria->nadpis !!} <i class="{{$sekcia_galeria->ikonka_nadpisu}}" style="color: {{$sekcia_galeria->farba_ikonky_nadpisu}};"></i></span></span>
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide hidden" data-interval="false">
                    <div class="carousel-inner">
                        @foreach($images->chunk(3) as $index => $imageGroup)
                            <div class="carousel-item @if($index === 0) active @endif">
                                <div class="row">
                                    @foreach($imageGroup as $image)
                                        <div class="col-md-4 mb-3">
                                            <div class="card d-flex flex-column">
                                                <img src="{{ asset($image->cesta_k_suboru) }}" class="img-fluid rounded" style="width: 640px; height: 360px; object-fit: cover;" alt="{{ $image->nadpis }}">
                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 20px; height: 25px">
                                                        {{ $image->nadpis }}
                                                    </p>
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 18px; height: 25px">
                                                        {{ $image->text }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center hidden">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- Tím -->
<section id="team" class="shapedividers_com-5827">
    <h2 class="{{$sekcia_tim->typografia_nadpisu}} text-shadow text-center hidden1" style="font-family: {{$sekcia_tim->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 150px; margin-bottom: 50px">
        <span style="font-weight:bold; color:{{$sekcia_tim->farba_nadpisu}};"><i class="{{$sekcia_tim->ikonka_nadpisu}}" style="color: {{$sekcia_tim->farba_ikonky_nadpisu}}"></i><span> {!! $sekcia_tim->nadpis !!}</span></span>
    </h2>
    <div class="container hidden1" style="margin-top: 100px">
        <div class="row">
            @php
                $pictures = ['picture', 'picture1', 'picture2', 'picture3'];
            @endphp
            @foreach($team as $index => $member)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="{{ $pictures[$index % 4] }}">
                            <img class="img-fluid" style="width: 130px; height: 130px; object-fit: cover;" src={{ asset($member->cesta_k_suboru) }}>
                        </div>
                        <div class="team-content">
                            <h3 class="name">{{$member->nadpis}}</h3>
                            <h4 class="title">{{$member->text}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Kontakt -->
<section id="kontakt" class="section py-5 text-white vlnky-shape_divider-end" style="background-color: #eb8c4a; margin-top: 100px;">
    <div class="container">

        <div class="row justify-content-center text-center mb-4">
            <div class="col-md-8">
                <h2 class="{{$sekcia_kontakt->typografia_nadpisu}} text-shadow hidden" style="font-family: {{$sekcia_kontakt->font_nadpisu}}; text-shadow: 1px 1px 0px #c8c8c8, 0px 2px 0px #b4b4b4, 0px 3px 0px #a0a0a0, 0px 4px 0px rgba(140, 140, 140, 0.498039), 0px 0px 0px #787878, 0px 5px 10px rgba(0, 0, 0, 0.498039); margin-top: 50px;">
                    <span style="font-weight:bold; color:{{$sekcia_kontakt->farba_nadpisu}};"><span>{!! $sekcia_kontakt->nadpis !!}</span></span>
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
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 50px; font-family: {{ $sekcia_kontakt_adresa->font_nadpisu }}"><i class="{{ $sekcia_kontakt_adresa->ikonka_nadpisu }}"></i></p>
                        <p class="card-text text-center" style="color:{{ $sekcia_kontakt_adresa->farba_nadpisu }};font-weight: bolder; font-size: {{ $sekcia_kontakt_adresa->typografia_nadpisu }}; font-family: {{ $sekcia_kontakt_adresa->font_nadpisu }}">{!! $sekcia_kontakt_adresa->nadpis !!}</p>
                        <p class="card-text text-center" style="color:{{ $sekcia_kontakt_adresa->farba_textu }};font-weight:normal; font-size: {{$sekcia_kontakt_adresa->velkost_textu}}px; font-family: {{ $sekcia_kontakt_adresa->font_textu }}">
                            {!! $sekcia_kontakt_adresa->text !!}</p>
                    </div>
                </div>
            </div>

            <!-- FB -->
            <div class="col-md-4 mb-4 hidden">
                <div class="card ms-auto">
                    <div class="card-body" style="height: 280px;">
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 91px; font-family: {{ $sekcia_kontakt_fb->font_textu }}">
                            <a href="{{ $sekcia_kontakt_fb->text }}" target="_blank" style="color: {{ $sekcia_kontakt_fb->farba_ikonky_nadpisu }};">
                                <i class="{{ $sekcia_kontakt_fb->ikonka_nadpisu }}"></i>
                            </a>
                        </p>
                        <p class="card-text text-center" style="color: {{ $sekcia_kontakt_fb->farba_nadpisu }};font-weight: bolder; font-size: {{ $sekcia_kontakt_fb->typografia_nadpisu }}; font-family: {{ $sekcia_kontakt_fb->font_nadpisu }}">Facebook</p>
                    </div>
                </div>
            </div>


            <!-- Kontakt -->
            <div class="col-md-4 mb-4">
                <div class="card ms-auto">
                    <div class="card-body" style="height: 280px;">
                        <p class="card-text text-center" style="font-weight: bolder; font-size: 50px; font-family: {{ $sekcia_kontakt_mail->font_nadpisu }}"><i class="{{ $sekcia_kontakt_mail->ikonka_nadpisu }}" style="color: {{ $sekcia_kontakt_mail->farba_ikonky_nadpisu }}"></i></p>
                        <p class="card-text text-center" style="font-weight: bolder; font-size: {{ $sekcia_kontakt_mail->typografia_nadpisu }}; font-family: {{ $sekcia_kontakt_mail->font_nadpisu }}"> {!! $sekcia_kontakt_mail->nadpis !!}</p>
                        <p class="card-text text-center" style="font-weight:normal; font-size: {{ $sekcia_kontakt_mail->velkost_textu }}px; font-family: {{ $sekcia_kontakt_mail->font_textu }}">
                            {!! $sekcia_kontakt_mail->text !!}</p>
                        <p class="card-text text-center" style="font-weight:normal; font-size: {{ $sekcia_kontakt_mail->velkost_podtextu }}px; font-family: {{ $sekcia_kontakt_mail->font_podtextu }}">
                            <a href="mailto:{{ $sekcia_kontakt_mail->podtext }}" style="text-decoration: underline; color: {{ $sekcia_kontakt_mail->farba_podtextu }};">{{ $sekcia_kontakt_mail->podtext }}</a>
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
                        <iframe src="{{$sekcia_kontakt_map->text}}" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
