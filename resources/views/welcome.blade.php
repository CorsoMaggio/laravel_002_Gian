 <x-main>       
    <h1 class="mb-4 text-center">I voli disponibili</h1>
    <div class="row equal-height-cards">
    @foreach ($flights as $flight)
        <div class="col-3 mb-4">
            <div class="card h-100" >
                <img src="{{ $flight['cover'] }}" class="card-img-top" style="height: 200px !important;object-fit: cover;" alt="Foto di {{ $flight['destination'] }}">
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
</x-main>
