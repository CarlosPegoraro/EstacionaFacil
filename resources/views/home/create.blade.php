<x-layout title="Reservar Vaga">
    <div class="d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/logoSlim.png') }}" class="mb-5" alt="logo" width="100px" height="100">
    </div>
    <h1 class="fs-4 text-secondary fw-bold my-4 line">Comprar Vaga</h1>
    <form action="{{ route('home.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-4">
                <label class="form-label" for="address">Endereço</label>
                <input class="form-control" list="placeList" id="address" name="address"
                    placeholder="Selecione um lugar">
                <datalist id="placeList">
                    <option value="Shopping Abc">
                    <option value="Shopping Atrium">
                    <option value="Shopping Plaza">
                </datalist>
            </div>
            <div class="col-12 col-sm-4">
                <label class="form-label" for="date">Data</label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Data"
                    value="{{ old('date') }}">
            </div>
            <div class="col-12 col-sm-4">
                <label class="form-label" for="interval">Horário</label>
                <input class="form-control" list="intervalList" id="interval" name="interval"
                    placeholder="Qual o horário?">
                <datalist id="intervalList">
                    <option value="30 Minutos">
                    <option value="1 hora">
                    <option value="1 hora e meia">
                    <option value="2 horas">
                    <option value="2 hora e meia">
                    <option value="3 horas">
                    <option value="3 hora e meia">
                    <option value="Evento">
                </datalist>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="d-flex justify-content-center align-items-left mt-5">
                    <div class="container preço border">
                        <p>custo</p>
                        <p>Valor da Vaga: R$ 15,00</p>
                        <p>Taxa de Serviço: R$ 00,50</p>
                        <p>preço final: R$15,50</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <button class="btn btn-primary px-3" type="submit" style="max-width: fit-content;">Comprar
                        Vaga</button>
                </div>
            </div>
        </div>
        <input type="text" hidden id="value" name="value" value="R$15.00">
    </form>
</x-layout>
