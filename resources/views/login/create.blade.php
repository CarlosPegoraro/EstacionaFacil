<x-layout title="Login">
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
        <h1 class="fw-bold mb-5">Criar conta</h1>
        <form action="{{ route('login.store') }}" method="post">
            @csrf
            <div class="d-flex flex-column mb-5">
                <label for="user">usuário</label>
                <input type="text" name="user" id="user" class="rounded mb-3 p-2" class="user" placeholder="user">
                <label for="email">email</label>
                <input type="email" name="email" id="email" class="rounded mb-3 p-2" placeholder="email">
                <label for="password">senha</label>
                <input type="password" name="password" id="password" class="rounded mb-3 p-2" placeholder="password">
                <button type="submit" class="btn btn-primary">criar conta</button>
            </div>
        </form>
        <a href={{ route('login.index') }}>não possui conta cadastre-se</a>
    </div>
</x-layout>
