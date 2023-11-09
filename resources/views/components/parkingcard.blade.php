<div class="container-parking-lot d-flex p-4 text-light gap-5">
    @php($coordenates = "@" . $coordenate)
    <a target="_blank" href="https://www.google.com.br/maps/{{ $coordenates }},15z?entry=ttu">Ver no mapa</a>
    <div class="flex-column info">
        <p class="text-light px-5 fs-2 adress ">{{ $place }}</p>
        <p class="text-light px-5 fs-2 adress ">{{ $address }}</p>
        <p class="text-light px-5 fs-4 date">{{ $date }}</p>
        <p class="text-light px-5 fs-4 hour">{{ $interval }}</p>
    </div>
</div>
