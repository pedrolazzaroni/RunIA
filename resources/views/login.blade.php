@extends('components.layout')
@section('title', 'Login')
@section('content')
    <div class="mx-auto h-screen bg-amber-200">
        <div class="container">
            <h1 class="p-4 rounded-lg">Bem Vindo ao RunIA</h1>
        </div>
        <div class="container">
            <p class="p-4 rounded-lg">RunIA é uma plataforma de IA que permite que você crie e execute modelos de IA de forma rápida e fácil.</p>
        </div>

        <form action="{{route('login')}}" method="POST" class="p-4 bg-amber-50 w-auto rounded-lg flex flex-col gap-4 items-center justify-center">
            @csrf
            Faça login:
            <label for="email">Email:</label>
            <input class="outline-red-300 bg-amber-300" type="email" name="email" id="email">
            <label for="password">Senha</label>
            <input class="outline-red-300 bg-amber-300" type="password" name="password" id="password">
            <button class="rounded-lg bg-amber-700 p-4 w-20 items-center" type="submit">Entrar</button>
        </form>
        <div class="bg-red-500 h-2">

        </div>
        <form action="{{route('register')}}" method="POST" class="p-4 bg-amber-50 w-auto rounded-lg flex flex-col gap-4 items-center justify-center">
            @csrf
            Faça Registro:
            <label for="email">Email:</label>
            <input class="outline-red-300 bg-amber-300" type="email" name="email" id="email">
            <label for="name">Nome:</label>
            <input class="outline-red-300 bg-amber-300" type="name" name="name" id="name">
            <label for="password">Senha</label>
            <input class="outline-red-300 bg-amber-300" type="password" name="password" id="password">
            <label for="password_confirmation">Confirmação de Senha</label>
            <input class="outline-red-300 bg-amber-300" type="password" name="password_confirmation" id="password_confirmation">

            <button class="rounded-lg bg-amber-700 p-4 w-20 items-center" type="submit">Registrar</button>
        </form>
    </div>
@endsection
