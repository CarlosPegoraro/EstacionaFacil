<x-layout title="Home">
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex flex-column justify-content-center align-items-center">
            <img  src="{{ asset('assets/logoSlim.png') }}" class="mb-5" alt="logo" height="100">
            <form action="{{ route('home.create') }}">
                @csrf
                <div class="search-bar px-3 border-dark-subtle">
                    <i class="bi bi-search"></i>
                    <input list="datalistOptions" id="exampleDataList" placeholder="Busque sua vaga">
                    <datalist id="datalistOptions">
                        <option value="Shopping Abc">
                        <option value="Shopping Atrium">
                        <option value="Shopping Plaza">
                    </datalist>
                </div>
                <button type="submit" hidden>Enviar</button>
            </form>
        </div>
        <div class="col-4">
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
