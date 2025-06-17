<div class="col-3 mb-4">
  <div class="card h-100" >
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