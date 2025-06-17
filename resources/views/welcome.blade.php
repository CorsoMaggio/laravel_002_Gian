 <x-main>  
    <x-slot name="css">
    <style>
      .card-img-top{
        height: 200px !important;
        object-fit cover;
      }
    </style>
    </x-slot>     
    <h1 class="mb-4 text-center">I voli disponibili</h1>
    <div class="row equal-height-cards">
        @foreach ($flights as $flight)
            <x-cardHomepage :flight="$flight"></x-cardHomepage>
        @endforeach
    </div> 
</x-main>
