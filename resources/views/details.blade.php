<x-main>
  <x-slot name="Titolo">
    Dettagli Voli
  </x-slot>
  <h1 class="mb-4 text-center">Dettagli volo per {{ $flight['destination'] }}</h1>
  <x-cardDetails :flight="$flight"></x-cardDetails>
</x-main>
