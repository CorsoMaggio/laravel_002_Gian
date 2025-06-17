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
                <a href="/Dettagli/1" class="btn btn-primary">Torna ad Inizio</a>
          @else
                <a href="/Dettagli/{{$flight['id'] + 1}}" class="btn btn-primary">Successivo</a>
          @endif
      </p>
    </div>
</div>