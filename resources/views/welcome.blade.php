<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatibile" content="ie-edge" />
        <title>Progetto Voli</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
            crossorigin="anonymous"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Dettagli/1">Details</a>
            </li>
        </ul>
        <div class="container mt-5">
            <h1 class="mb-4 text-center">I voli disponibili</h1>
            <div class="row">
            @foreach ($flights as $flight)
                    <div class="col-3 mb-4">
                        <div class="card">
                        <img src="{{ $flight['cover'] }}" class="card-img-top" alt="Foto di {{ $flight['destination'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $flight['destination'] }}</h5>
                        <p class="card-text">
                            Partenza: {{ $flight['time']['departure'] }}<br>
                            Arrivo: {{ $flight['time']['arrival'] }}
                        </p>
                        <a href="/Dettagli/{{ $flight['id'] }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div> 
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
