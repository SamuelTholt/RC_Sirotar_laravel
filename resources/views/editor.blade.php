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

    <title>Editor Rodinné Centrum SIROTÁR</title>

</head>
<body class="editor_body">
<header class="bg-light shadow-sm">
    <nav class="navigationBar">
        <a href="{{url('/home')}}" class="logo">
            <img src="{{asset('assets/images/logo_sirotar.png')}}" alt="RC SIROTÁR">
        </a>
        <input type="checkbox" id="toggler">
        <label for="toggler"><i class="fas fa-bars"></i></label>
        <div class="menuList">
            <ul class="list">
                <li class="nav-item">
                    <a href="{{url('/home')}}"><i class="fa-solid fa-house" style="color: #35A0CE7F;"></i> HOME</a>
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
<section style="margin-top: 140px">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-5">
        @php
            $colors = ['blue-section', 'green-section', 'red-section', 'orange-section'];
        @endphp
        @foreach($vsetky_sekcie as $index => $sekcia)
            <div class="custom-section {{ $colors[$index % 4] }}">
                <h1>{{$sekcia->id}}. {!! $sekcia->nazov_sekcie !!}</h1>

                @if($sekcia->nadpis)
                    <h2><span><b>Nadpis :</b></span> {!! $sekcia->nadpis !!}</h2>
                @endif

                @if($sekcia->typografia_nadpisu)
                    <p style="font-size: 18px"><span><b>Typografia nadpisu: </b></span> {{$sekcia->typografia_nadpisu}}</p>
                @endif

                @if($sekcia->farba_nadpisu)
                    <p style="font-size: 18px"><span><b>Farba nadpisu: </b></span> {{$sekcia->farba_nadpisu}}</p>
                @endif

                @if($sekcia->font_nadpisu)
                    <p style="font-size: 18px"><span><b>Font nadpisu: </b></span> {{$sekcia->font_nadpisu}}</p>
                @endif

                @if($sekcia->ikonka_nadpisu)
                    <p style="font-size: 18px">
                        <span><b>Ikonka nadpisu: </b></span> {{$sekcia->ikonka_nadpisu}} <i class="{{$sekcia->ikonka_nadpisu}}"></i>
                    </p>
                @endif

                @if($sekcia->farba_ikonky_nadpisu)
                    <p style="font-size: 18px"><span><b>Farba ikonky nadpisu: </b></span> {{$sekcia->farba_ikonky_nadpisu}}</p>
                @endif

                @if($sekcia->text)
                    <p style="font-size: 16px"><span><b>Text: </b></span> {{$sekcia->text}}</p>
                @endif

                @if($sekcia->velkost_textu)
                    <p style="font-size: 16px"><span><b>Velkosť textu: </b></span> {{$sekcia->velkost_textu}}</p>
                @endif

                @if($sekcia->farba_textu)
                    <p style="font-size: 16px"><span><b>Farba textu: </b></span> {{$sekcia->farba_textu}}</p>
                @endif

                @if($sekcia->font_textu)
                    <p style="font-size: 16px"><span><b>Font textu: </b></span> {{$sekcia->font_textu}}</p>
                @endif

                @if($sekcia->podtext)
                    <p style="font-size: 14px"><span><b>Podtext: </b></span> {{$sekcia->podtext}}</p>
                @endif

                @if($sekcia->velkost_podtextu)
                    <p style="font-size: 14px"><span><b>Velkosť Podtextu: </b></span> {{$sekcia->velkost_podtextu}}</p>
                @endif

                @if($sekcia->farba_podtextu)
                    <p style="font-size: 14px"><span><b>Farba Podtextu: </b></span> {{$sekcia->farba_podtextu}}</p>
                @endif

                @if($sekcia->font_podtextu)
                    <p style="font-size: 14px"><span><b>Font Podtextu: </b></span> {{$sekcia->font_podtextu}}</p>
                @endif

                <a href="{{ route('sekcia.edit', ['id' => $sekcia->id]) }}" class="btn btn-primary" style="margin-top: 20px;"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            </div>
        @endforeach
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

