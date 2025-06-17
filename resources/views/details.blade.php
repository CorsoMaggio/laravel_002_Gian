<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatibile" content="ie-edge" />
        <title>Dettagli Voli</title>
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
          <h1 class="mb-4 text-center">Dettagli volo per {{ $flight['destination'] }}</h1>
          <div class="card mx-auto" style="width: 24rem;">
            <img src="{{ $flight['cover'] }}" class="card-img-top" alt="Foto di {{ $flight['destination'] }}">
              <div class="card-body">
                <h5 class="card-title">{{ $flight['destination'] }}</h5>
                <p class="card-text">
                  <strong>Partenza:</strong> {{ $flight['time']['departure'] }}<br>
                  <strong>Arrivo:</strong> {{ $flight['time']['arrival'] }}
                </p>
                <p class="card-text">
                  <strong><em>Economy:</em></strong> 
                  {{ $flight['type']['economy'] }}
                  @if(is_numeric($flight['type']['economy']))€
                  @endif
                  <br>
                  <strong><em>Economy premium:</em></strong> {{ ($flight['type']['economy_premium']) }}
                  @if(is_numeric($flight['type']['economy_premium']))€
                  @endif
                  <br>
                  <strong><em>Business class:</em></strong> 
                  {{ $flight['type']['business_class'] }}
                  @if(is_numeric($flight['type']['business_class']))€
                  @endif
                  <br>
                  <strong><em>Prima classe:</em></strong>
                  {{ $flight['type']['prima_classe'] }}
                  @if(is_numeric($flight['type']['prima_classe']))€
                  @endif
                  <br>
                  <hr>
                  <a href="/" class="btn btn-primary">Torna alla homepage</a>
                    @if($flight['id'] == 4)
                          <a href="Dettaglio/1" class="btn btn-primary">Torna ad Inizio</a>
                    @else
                          <a href="Dettaglio/{{$flight['id'] + 1}}" class="btn btn-primary">Torna ad Inizio</a>
                    @endif
                </p>
             </div>
          </div>
        </div>
 
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
