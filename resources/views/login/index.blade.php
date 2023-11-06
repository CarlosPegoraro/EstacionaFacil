<x-layout title="Login" :successMessage="$successMessage">
    <div class="container-fluid d-flex justify-content-center align-center flex-column gap-5">
        <img src="{{ asset('assets/logo.svg') }}" alt="logo" height="100">
        <h1 class="fs-4 text-center text-bold main-font" style="color: 494949">Welcome Back</h1>
    </div>
    <form action="{{ route('login.login') }}" method="post">
        @csrf
        <div class="container d-flex flex-column gap-2 login-form-container">
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="rounded mb-3 p-2"
                placeholder="email">
            <label for="password">senha</label>
            <input type="password" name="password" id="password" class="rounded mb-5 p-2" placeholder="password">
            <button type="submit" class="btn btn-primary mb-3 text-light text-uppercase">entrar</button>
            <p style="color: #686868" class="d-flex justify-content-center align-center with-lines text-nowrap">ainda
                não tem conta?</p>
            <a href="{{ route('login.create') }}" class="link d-flex justify-content-center align-center">cadastre-se
                agora</a>
        </div>
    </form>
</x-layout>
