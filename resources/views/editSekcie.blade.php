<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo_sirotar.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Editor Rodinné Centrum SIROTÁR</title>

</head>
<body>
<section>
    <div class="container mt-5">
        <div class="custom-section green-section">
            <h1 style="text-align: center;">Upraviť Sekciu</h1>
            <h4 style="text-align: center;"><a href="{{url('/editor/fontList')}}">List fontov</a></h4>
            <form action="{{ route('sekcia.update', $sekcia->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Názov sekcie -->
                @if(!is_null($sekcia->nazov_sekcie))
                    <div class="form-group">
                        <label for="nazov_sekcie">Názov sekcie:</label>
                        <input type="text" class="form-control" name="nazov_sekcie" value="{{ $sekcia->nazov_sekcie }}">
                    </div>
                @endif

                <!-- Nadpis sekcie -->
                @if(!is_null($sekcia->nadpis))
                    <div class="form-group">
                        <label for="nadpis">Nadpis:</label>
                        <input type="text" class="form-control" name="nadpis" value="{{ $sekcia->nadpis }}">
                    </div>
                @endif

                @if(!is_null($sekcia->typografia_nadpisu))
                    <div class="form-group">
                        <label for="typografia_nadpisu">Typografia nadpisu:</label>
                        <input type="text" class="form-control" name="typografia_nadpisu" value="{{ $sekcia->typografia_nadpisu }}">
                        <p>Viac info o typoch: <a href="https://bootstrapshuffle.com/classes/typography/display-%23+%281-4%29">https://bootstrapshuffle.com/classes/typography/display-%23+%281-4%29</a></p>
                        <p>Ak je tam px -> napísať veľkosť v px (napr. 20px)</p>
                    </div>
                @endif

                @if(!is_null($sekcia->farba_nadpisu))
                    <div class="form-group">
                        <label for="farba_nadpisu">Farba nadpisu:</label>
                        <input type="color" class="form-control" name="farba_nadpisu" value="{{ $sekcia->farba_nadpisu }}">
                    </div>
                @endif

                @if(!is_null($sekcia->font_nadpisu))
                    <div class="form-group">
                        <label for="font_nadpisu">Font nadpisu:</label>
                        <input type="text" class="form-control" name="font_nadpisu" value="{{ $sekcia->font_nadpisu }}">
                    </div>
                @endif

                <!-- Ikonka nadpisu -->
                @if(!is_null($sekcia->ikonka_nadpisu))
                    <div class="form-group">
                        <label for="ikonka_nadpisu">Ikonka nadpisu:</label>
                        <input type="text" class="form-control" name="ikonka_nadpisu" value="{{ $sekcia->ikonka_nadpisu }}">
                    </div>
                @endif

                <!-- Farba ikonky nadpisu -->
                @if(!is_null($sekcia->farba_ikonky_nadpisu))
                    <div class="form-group">
                        <label for="farba_ikonka_nadpisu">Farba ikonky nadpisu:</label>
                        <input type="color" class="form-control" name="farba_ikonka_nadpisu" value="{{ $sekcia->farba_ikonka_nadpisu }}">
                    </div>
                @endif

                <!-- Text -->
                @if(!is_null($sekcia->text))
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <textarea class="form-control" name="text">{{ $sekcia->text }}</textarea>
                    </div>
                @endif

                <!-- Velkosť textu -->
                @if(!is_null($sekcia->velkost_textu))
                    <div class="form-group">
                        <label for="velkost_textu">Veľkosť textu:</label>
                        <input type="number" class="form-control" name="velkost_textu" value="{{ $sekcia->velkost_textu }}">
                    </div>
                @endif

                <!-- farba textu -->
                @if(!is_null($sekcia->farba_textu))
                    <div class="form-group">
                        <label for="farba_textu">Farba textu:</label>
                        <input type="color" class="form-control" name="farba_textu" value="{{ $sekcia->farba_textu }}">
                    </div>
                @endif

                <!-- font textu -->
                @if(!is_null($sekcia->font_textu))
                    <div class="form-group">
                        <label for="font_textu">Font textu:</label>
                        <input type="text" class="form-control" name="font_textu" value="{{ $sekcia->font_textu }}">
                    </div>
                @endif

                <!-- Podtext -->
                @if(!is_null($sekcia->podtext))
                    <div class="form-group">
                        <label for="podtext">Podtext:</label>
                        <textarea class="form-control" name="podtext">{{ $sekcia->podtext }}</textarea>
                    </div>
                @endif


                <!-- Velkosť textu -->
                @if(!is_null($sekcia->velkost_podtextu))
                    <div class="form-group">
                        <label for="velkost_podtextu">Veľkosť podtextu:</label>
                        <input type="number" class="form-control" name="velkost_podtextu" value="{{ $sekcia->velkost_podtextu }}">
                    </div>
                @endif

                <!-- farba podtextu -->
                @if(!is_null($sekcia->farba_podtextu))
                    <div class="form-group">
                        <label for="farba_podtextu">Farba podtextu:</label>
                        <input type="color" class="form-control" name="farba_podtextu" value="{{ $sekcia->farba_podtextu }}">
                    </div>
                @endif

                <!-- font podtextu -->
                @if(!is_null($sekcia->font_podtextu))
                    <div class="form-group">
                        <label for="font_podtextu">Font podtextu:</label>
                        <input type="text" class="form-control" name="font_podtextu" value="{{ $sekcia->font_podtextu }}">
                    </div>
                @endif

                <!-- Tlačidlo na uloženie -->
                <button type="submit" class="btn btn-primary mt-3">Uložiť</button>

                <span style="margin-right: 10px;"></span>
                <button type="button" class="btn btn-warning mt-3" onclick="window.history.back();">Naspäť</button>
            </form>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $("form").on("submit", function(event){
            event.preventDefault();

            $.ajax({
                url: '{{ route('sekcia.update', $sekcia->id) }}',
                type: 'POST',
                data: $(this).serialize(),
                success: function(){
                    alert('Úprava sekcie bola úspešná!');
                    window.history.back();
                },
                error: function(){
                    alert('Úprava zlyhala!');
                }
            });
        });
    });

</script>

</body>
</html>



