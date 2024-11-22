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

    <style>
        .current-photo {
            display: block;
            margin: 20px auto;
            width: 640px;
            height: 360px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<section>
    <div class="container mt-5">
        <div class="custom-section blue-section">
            <h1 style="text-align: center;">Upraviť fotografiu</h1>
            <!-- Zobrazenie aktuálnej fotografie -->
            <div class="text-center">
                <img src="{{ asset($foto->cesta_k_suboru) }}" alt="Aktuálna fotografia" class="current-photo">
            </div>
            <form action="{{ route('foto.update', $foto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nadpis">Nadpis:</label>
                    <input type="text" class="form-control" name="nadpis" id="nadpis" value="{{ $foto->nadpis }}">
                </div>

                <div class="form-group">
                    <label for="text">Text:</label>
                    <input type="text" class="form-control" name="text" id="text" value="{{ $foto->text }}">
                </div>

                <div class="form-group">
                    <label for="subor">Obrázok:</label>
                    <input type="file" class="form-control" name="subor" id="subor" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="priradena_sekcia_id">Priraď fotografiu k sekcií:</label>
                    <select class="form-control" name="priradena_sekcia_id" id="priradena_sekcia_id" required>
                        <option value="2" @if($foto->priradenaSekcia->id == 2) selected @endif>Herňa/Átrium</option>
                        <option value="7" @if($foto->priradenaSekcia->id == 7) selected @endif>Program</option>
                        <option value="8" @if($foto->priradenaSekcia->id == 8) selected @endif>Galéria</option>
                        <option value="9" @if($foto->priradenaSekcia->id == 9) selected @endif>Tím</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Upraviť fotografiu</button>

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

            let formData = new FormData(this);

            $.ajax({
                url: '{{ route('foto.update', $foto->id) }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(){
                    alert('Úprava fotografie bolo úspešná!');
                    window.history.back();
                },
                error: function(xhr){
                    alert('Úprava zlyhala!');
                }
            });
        });
    });


</script>

</body>
</html>





