@extends('components.layout')
@section('title', 'Login')
@section('content')

<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 py-8">
    <div class="container mx-auto px-6">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-amber-800 mb-4">Bem Vindo ao RunIA</h1>
            <p class="text-lg text-amber-700 max-w-2xl mx-auto">
                RunIA é uma plataforma de IA que permite que você crie e execute modelos de IA de forma rápida e fácil.
            </p>
        </div>

        <!-- Login and Registration Forms -->
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Login Form -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-amber-600 text-white p-6">
                        <h2 class="text-2xl font-bold text-center">Faça Login</h2>
                    </div>

                    <form action="{{route('login')}}" method="POST" class="p-8">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-amber-700 mb-2">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    required
                                    class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                    placeholder="Digite seu email"
                                >
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-amber-700 mb-2">Senha</label>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    required
                                    class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                    placeholder="Digite sua senha"
                                >
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md"
                            >
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Registration Form -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-amber-600 text-white p-6">
                        <h2 class="text-2xl font-bold text-center">Faça Registro</h2>
                    </div>

                    <form action="{{route('register')}}" method="POST" class="p-8">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label for="reg_name" class="block text-sm font-medium text-amber-700 mb-2">Nome</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="reg_name"
                                    required
                                    class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                    placeholder="Digite seu nome"
                                >
                            </div>

                            <div>
                                <label for="reg_email" class="block text-sm font-medium text-amber-700 mb-2">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="reg_email"
                                    required
                                    class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                    placeholder="Digite seu email"
                                >
                            </div>

                            <div>
                                <label for="reg_password" class="block text-sm font-medium text-amber-700 mb-2">Senha</label>
                                <input
                                    type="password"
                                    name="password"
                                    id="reg_password"
                                    required
                                    class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                    placeholder="Digite sua senha"
                                >
                            </div>

                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-amber-700 mb-2">Confirmação de Senha</label>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    required
                                    class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                    placeholder="Confirme sua senha"
                                >
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md"
                            >
                                Registrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
