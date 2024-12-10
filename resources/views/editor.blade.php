<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo_sirotar.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

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
                <li class="nav-item">
                    <a href="#sekcie"><i class="fa-solid fa-section" style="color: #35A0CE7F;"></i> Sekcie</a>
                </li>

                <li class="nav-item">
                    <a href="#foto"><i class="fa-solid fa-image" style="color: #35A0CE7F;"></i> Fotky</a>
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
<section id="sekcie" style="margin-top: 100px">
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
                    <p style="font-size: 16px"><span><b>Veľkosť textu: </b></span> {{$sekcia->velkost_textu}}</p>
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
                    <p style="font-size: 14px"><span><b>Veľkosť Podtextu: </b></span> {{$sekcia->velkost_podtextu}}</p>
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

<section id="foto" style="margin-top: 100px">
    <div class="container mt-5 custom-section white-section">
        <div>
            <a href="{{ route('foto.create')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Pridať fotografiu</a>
        </div>

        <div>
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editOrderModal">
                <i class="fa-solid fa-sort"></i> Upraviť poradie
            </button>
        </div>


        <form method="GET" action="{{ route('editor') }}#foto">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="sekcia_id">Vyber sekciu:</label>
                    <select name="sekcia_id" id="sekcia_id" class="form-select">
                        <option value="">Všetky sekcie</option>
                        <option value="2">Herňa/Átrium</option>
                        <option value="7">Program</option>
                        <option value="8">Galéria</option>
                        <option value="9">Tím</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="order_by">Zoradiť podľa:</label>
                    <select name="order_by" id="order_by" class="form-select">
                        <option value="created_at" @if(request('order_by') == 'created_at') selected @endif>Pridané</option>
                        <option value="updated_at" @if(request('order_by') == 'updated_at') selected @endif>Upravené</option>
                        <option value="poradie" @if(request('order_by') == 'poradie') selected @endif>Poradie</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="order_direction">Smer zoradenia:</label>
                    <select name="order_direction" id="order_direction" class="form-select">
                        <option value="desc" @if(request('order_direction') == 'desc') selected @endif>Zostupne</option>
                        <option value="asc" @if(request('order_direction') == 'asc') selected @endif>Vzostupne</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Zoradiť</button>

            <a href="{{ route('editor') }}#foto" id="reset-filters" class="btn btn-secondary ms-2">Resetovať filtre</a>
        </form>
        <div class="modal fade" id="editOrderModal" tabindex="-1" aria-labelledby="editOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editOrderModalLabel">Upraviť poradie fotografií</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <label for="sectionSelect">Vyber sekciu:</label>
                        <select id="sectionSelect" class="form-select">
                            <option value="2">Herňa/Átrium</option>
                            <option value="7">Program</option>
                            <option value="8">Galéria</option>
                            <option value="9">Tím</option>
                        </select>

                        <div id="sortable" class="row mt-3"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvoriť</button>
                        <button id="saveOrder" class="btn btn-success">Uložiť poradie</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 10px">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide hidden" data-interval="false">
                    <div class="carousel-inner">
                        @foreach($foto->chunk(3) as $index => $imageGroup)
                            <div class="carousel-item @if($index === 0) active @endif">
                                <div class="row">
                                    @foreach($imageGroup as $image)
                                        <div class="col-md-4 mb-3">
                                            <div class="card d-flex flex-column">
                                                <img src="{{ asset($image->cesta_k_suboru) }}" class="img-fluid rounded" style="width: 640px; height: 360px; object-fit: cover;" alt="{{ $image->nadpis }}">
                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 20px; height: 20px">
                                                        {{ $image->nadpis }}
                                                    </p>
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 18px; height: 20px">
                                                        {{ $image->text }}
                                                    </p>
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 14px; height: 20px">
                                                        {{ $image->priradenaSekcia->nadpis }}
                                                    </p>
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 14px; height: 20px">
                                                        Poradie v sekcií: {{ $image->poradie }}
                                                    </p>
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 14px; height: 20px">
                                                        Pridané: {{ $image->created_at }}
                                                    </p>
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text text-center" style="font-weight: bold; font-size: 14px; height: 20px">
                                                        Upravené: {{ $image->updated_at }}
                                                    </p>
                                                </div>


                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text" style="font-weight: bold; font-size: 14px; height: 25px">
                                                        <a href="{{ route('foto.edit', ['id' => $image->id]) }}" class="btn btn-primary" style="margin-top: 20px;"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                                    </p>
                                                </div>

                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <form action="{{ route('foto.destroy', $image->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Odstrániť</button>
                                                    </form>
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

<script>
    // Uloženie hodnôt pri zmene výberového poľa, vyhľadávacieho poľa alebo smeru
    document.querySelector('select[name="sekcia_id"]').addEventListener('change', function() {
        localStorage.setItem('editor_sekcia_id', this.value);
    });

    document.querySelector('select[name="order_by"]').addEventListener('change', function() {
        localStorage.setItem('editor_order_by', this.value);
    });

    document.querySelector('select[name="order_direction"]').addEventListener('change', function() {
        localStorage.setItem('editor_order_direction', this.value);
    });

    // Načítanie uložených hodnôt pri načítaní stránky
    window.addEventListener('DOMContentLoaded', function() {
        var sekcia_id = localStorage.getItem('editor_sekcia_id');
        var order_by = localStorage.getItem('editor_order_by');
        var order_direction = localStorage.getItem('editor_order_direction');

        if (sekcia_id) {
            document.querySelector('select[name="sekcia_id"]').value = sekcia_id;
        }

        if (order_by) {
            document.querySelector('select[name="order_by"]').value = order_by;
        }

        if (order_direction) {
            document.querySelector('select[name="order_direction"]').value = order_direction;
        }
    });

    // Vymazanie hodnôt pri kliknutí na tlačidlo na resetovanie filtrov
    document.querySelector('#reset-filters').addEventListener('click', function() {
        localStorage.removeItem('editor_sekcia_id');
        localStorage.removeItem('editor_order_by');
        localStorage.removeItem('editor_order_direction');
    });

    if(localStorage.getItem('reload') && localStorage.getItem('reload') === 'true') {
        localStorage.removeItem('reload');
        location.reload();
    }


    document.addEventListener("DOMContentLoaded", function () {
        const sectionSelect = document.getElementById("sectionSelect");
        const sortableContainer = document.getElementById("sortable");

        sectionSelect.addEventListener("change", function () {
            const sectionId = sectionSelect.value;

            fetch(`/get-images/${sectionId}`)
                .then((response) => response.json())
                .then((data) => {
                    sortableContainer.innerHTML = "";
                    data.forEach((image) => {
                        const imageCard = `
                        <div class="col-md-4 mb-3" data-id="${image.id}">
                            <div class="card d-flex flex-column">
                                <img src="${image.cesta_k_suboru}" class="img-fluid rounded" style="width: 240px; height: 160px; object-fit: cover" alt="${image.nadpis}">
                            </div>
                        </div>
                    `;
                        sortableContainer.insertAdjacentHTML("beforeend", imageCard);
                    });
                    new Sortable(sortableContainer, { animation: 150 });
                });
        });

        document.getElementById("saveOrder").addEventListener("click", function () {
            const order = Array.from(sortableContainer.querySelectorAll(".col-md-4"))
                .map((item, index) => ({
                    id: item.dataset.id,
                    poradie: index + 1,
                }));

            fetch("{{ route('update-order') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({ order }),
            })
                .then((response) => response.json())
                .then((data) => {
                    alert("Poradie uložené!");
                    window.location.href = '/editor#foto';
                    location.reload();
                })
                .catch((error) => console.error("Chyba:", error));
        });
    });
</script>
</html>

