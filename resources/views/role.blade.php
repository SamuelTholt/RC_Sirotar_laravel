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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Úprava Rolí - Rodinné Centrum SIROTÁR</title>
    <script>

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body class>
<div class="editor_body">
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
                            @if(Auth::user()->isAdmin())
                                <li><a class="dropdown-item" href="{{ url('/editor') }}">
                                        {{ __('Editor') }}
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

    <header class="py-5 bg-image-full bg-center" style=" margin-top: 50px; background-image: url({{asset('assets/images/users.jpg')}}">
        <div class="my-5 text-center">
            <h1 class=" text-white fs-2 fw-bolder">Users - Úprava rolí</h1>
        </div>
    </header>



    <div class="container-xl">
        <section class="py-5">
        </section>
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="search-box">
                                <form action="{{ route('role.index') }}" method="get" class="d-flex align-items-center">
                                    <input type="text" class="form-control me-2" name="search" placeholder="Hľadaj..." style="width: 500px;">
                                    <select class="form-select me-2" name="column" style="width: 500px;">
                                        <option value="name">Username</option>
                                        <option value="email">E-mail</option>
                                        <option value="role.nazov_role">Rola</option>
                                    </select>
                                    <select class="form-select me-2" name="direction" style="width: 500px;">
                                        <option value="asc">Vzostupne</option>
                                        <option value="desc">Zostupne</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    <a href="{{route('role.index')}}" id="reset-filters" class="btn btn-secondary ms-2">Resetovať filtre</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tabuľka  --}}
                <table class="table table-striped table-hover table-bordered equal-width">
                    <thead>
                    <tr>
                        {{-- User ID --}}
                        <th><a href="{{ route('role.index', ['column' => 'id', 'direction' => $direction == 'asc' ? 'desc' : 'asc']) }}">
                                User ID
                                @if ($column == 'id')
                                    <i class="fa fa-sort-{{ $direction == 'asc' ? 'up' : 'down' }}"></i>
                                @endif
                            </a></th>

                        {{-- Username --}}
                        <th><a href="{{ route('role.index', ['column' => 'name', 'direction' => $direction == 'asc' ? 'desc' : 'asc']) }}">
                                Username
                                @if ($column == 'name')
                                    <i class="fa-solid fa-arrow-{{ $direction == 'asc' ? 'down-a-z' : 'down-z-a' }}"></i>
                                @endif
                            </a></th>

                        {{-- E-mail --}}
                        <th><a href="{{ route('role.index', ['column' => 'email', 'direction' => $direction == 'asc' ? 'desc' : 'asc']) }}">
                                E-mail
                                @if ($column == 'email')
                                    <i class="fa-solid fa-arrow-{{ $direction == 'asc' ? 'down-a-z' : 'down-z-a' }}"></i>
                                @endif
                            </a></th>

                        {{-- Rola --}}
                        <th><a href="{{ route('role.index', ['column' => 'role.nazov_role', 'direction' => $direction == 'asc' ? 'desc' : 'asc']) }}">
                                Rola
                                @if ($column == 'role.nazov_role')
                                    <i class="fa-solid fa-arrow-{{ $direction == 'asc' ? 'down-a-z' : 'down-z-a' }}"></i>
                                @endif
                            </a></th>

                        @if(Auth::user() && Auth::user()->isHlavnyAdmin())
                            <th>Actions</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->role->nazov_role }}</td>
                            <td>
                                <form action="{{ route('role.assign', $u) }}" method="POST" class="assign-role-form" data-url="{{ route('role.assign', $u) }}">
                                    @csrf
                                    <input type="hidden" name="role" value="1">
                                    <input type="hidden" name="user_id" value="{{ $u->id }}">
                                    <input type="hidden" name="user_name" value="{{ $u->name }}">
                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-user-secret"></i> Dať rolu Hl.Admina</button>
                                </form>


                                <form action="{{ route('role.assign', $u) }}" method="POST" class="assign-role-form" data-url="{{ route('role.assign', $u) }}">
                                    @csrf
                                    <input type="hidden" name="role" value="2">
                                    <input type="hidden" name="user_id" value="{{ $u->id }}">
                                    <input type="hidden" name="user_name" value="{{ $u->name }}">
                                    <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-user-tie"></i> Dať rolu Admina</button>
                                </form>

                                <form action="{{ route('role.assign', $u) }}" method="POST" class="assign-role-form" data-url="{{ route('role.assign', $u) }}">
                                    @csrf
                                    <input type="hidden" name="role" value="3">
                                    <input type="hidden" name="user_id" value="{{ $u->id }}">
                                    <input type="hidden" name="user_name" value="{{ $u->name }}">
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Vymazať práva</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->appends(['column' => $column, 'direction' => $direction, 'search' => request('search')])->links() }}
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".assign-role-form").on("submit", function(event){
            event.preventDefault();

            let userId = $(this).find('input[name="user_id"]').val();
            let userName = $(this).find('input[name="user_name"]').val();
            let roleValue = $(this).find('input[name="role"]').val();
            let roleName;
            let url = $(this).data('url');

            switch(roleValue) {
                case "1":
                    roleName = "Hlavný Admin";
                    break;
                case "2":
                    roleName = "Admin";
                    break;
                case "3":
                    roleName = "Guest";
                    break;
                default:
                    roleName = "Unknown";
            }

            console.log(userId);
            console.log(userName);
            console.log(roleValue);
            console.log(roleName);
            console.log(url);

            $.ajax({
                url: url,
                type: 'POST',
                data: $(this).serialize(),
                success: function(){
                    alert(`Používateľovi "${userId} - ${userName}" BOLA úspešne priradená rola - "${roleName}"!`);
                    location.reload();
                },
                error: function(){
                    alert(`Používateľovi "${userId} - ${userName}" NEBOLA priradená rola - "${roleName}"!`);
                    location.reload();
                }
            });
        });
    });

    // Uloženie hodnôt pri zmene výberového poľa, vyhľadávacieho poľa alebo smeru
    document.querySelector('select[name="column"]').addEventListener('change', function() {
        localStorage.setItem('role_column', this.value);
    });

    document.querySelector('input[name="search"]').addEventListener('input', function() {
        localStorage.setItem('role_search', this.value);
    });

    document.querySelector('select[name="direction"]').addEventListener('change', function() {
        localStorage.setItem('role_direction', this.value);
    });

    // Načítanie uložených hodnôt pri načítaní stránky
    window.addEventListener('DOMContentLoaded', function() {
        var column = localStorage.getItem('role_column');
        var search = localStorage.getItem('role_search');
        var direction = localStorage.getItem('role_direction');

        if (column) {
            document.querySelector('select[name="column"]').value = column;
        }

        if (search) {
            document.querySelector('input[name="search"]').value = search;
        }

        if (direction) {
            document.querySelector('select[name="direction"]').value = direction;
        }
    });

    // Vymazanie hodnôt pri kliknutí na tlačidlo na resetovanie filtrov
    document.querySelector('#reset-filters').addEventListener('click', function() {
        localStorage.removeItem('role_column');
        localStorage.removeItem('role_search');
        localStorage.removeItem('role_direction');
    });
</script>
</body>
</html>
