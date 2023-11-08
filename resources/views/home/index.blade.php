<x-layout title="Home">
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-6 col-md-4 d-flex flex-column justify-content-center align-items-center">
            <img  src="{{ asset('assets/logoSlim.png') }}" class="mb-5" alt="logo" height="100">
            <a class="btn btn-primary" href="{{ route('home.create') }}">Reservar Nova vaga</a>
        </div>
    </div>
    <h1 class="fs-4 text-secondary fw-bold mt-4 line">Suas Vagas</h1>
    <div class="row mt-3">
        <x-parkingcard />
    </div>
</x-layout>

<style>
    .line::after {
        content: '';
        width: "100px";
        background-color: #252525;
    }
</style>
