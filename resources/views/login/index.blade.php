<x-layout title="Login" :successMessage="$successMessage">
    <div class="container-fluid d-flex justify-content-center align-center flex-column gap-5">
        <img src="{{ asset('assets/logo.svg') }}" alt="">
        <h1 class="fs-4 text-center text-bold" style="color: 494949">Welcome Back</h1>
    </div>
    <form action="{{ route('login.login') }}" method="post">
        @csrf
        <div class="d-flex flex-column mb-5">
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="{{ old('user') }}" class="rounded mb-3 p-2"
                placeholder="user">
            <label for="password">senha</label>
            <input type="password" name="password" id="password" class="rounded mb-3 p-2" placeholder="password">
            <button type="submit" class="btn btn-primary">logar</button>
        </div>
    </form>
    <a href="{{ route('login.create') }}">não possui conta cadastre-se</a>
</x-layout>
  