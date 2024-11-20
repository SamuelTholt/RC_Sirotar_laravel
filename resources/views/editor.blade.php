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

    <style>
        .custom-section {
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .blue-section {
            background-color: #001a66;
            color: white;
        }
        .green-section {
            background-color: #004d00;
            color: white;
        }
    </style>
</head>
<body>
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
    <div class="container mt-5">
        @foreach($vsetky_sekcie as $sekcia)
            <div class="custom-section blue-section">
                <h1>{{$sekcia->id}}. {!! $sekcia->nazov_sekcie !!}</h1>
                <h2><span><b>Nadpis :</b></span> {!! $sekcia->nadpis !!}</h2>
                <br>
                <p style="font-size: 18px"><span><b>Typografia nadpisu: </b></span> {{$sekcia->typografia_nadpisu}}</p>
                <p style="font-size: 18px"><span><b>Farba nadpisu: </b></span> {{$sekcia->farba_nadpisu}}</p>
                <p style="font-size: 18px"><span><b>Font nadpisu: </b></span> {{$sekcia->font_nadpisu}}</p>
                <br>
                <p style="font-size: 18px"><span><b>Ikonka nadpisu: </b></span> {{$sekcia->ikonka_nadpisu}}</p>
                <p style="font-size: 18px"><span><b>Farba ikonky nadpisu: </b></span> {{$sekcia->farba_ikonky_nadpisu}}</p>
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

