<x-layout title="Login">
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
        <h1 class="fw-bold mb-5">Login</h1>
        <form action="{{ route('login.login') }}" method="post">
            @csrf
            <div class="d-flex flex-column mb-5">
                <label for="email">email</label>
                <input type="email" name="email" id="email" class="rounded mb-3 p-2" placeholder="user">
                <label for="password">senha</label>
                <input type="password" name="password" id="password" class="rounded mb-3 p-2" placeholder="password">
                <button type="submit" class="btn btn-primary">logar</button>
            </div>
        </form>
        <a href="{{  route('login.create') }}">não possui conta cadastre-se</a>
    </div>
</x-layout>
