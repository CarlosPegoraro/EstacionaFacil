<div class="container-parking-lot p-4 mb-5">
    @php($coordenates = "@$coordenate")
    <div class="row d-flex flex-column">
        <p class="text-light fs-5 fw-bold">{{ $place }}</p>
        <p class="text-light fs-6">{{ $address }}</p>
        <p class="text-light fs-6">{{ $date }}</p>
        <p class="text-light fs-6">{{ $interval }}</p>
        <a class="text-light" target="_blank" href="https://www.google.com.br/maps/{{ $coordenates }},15z?entry=ttu">
            Ver no mapa
        </a>
    </div>
</div>
