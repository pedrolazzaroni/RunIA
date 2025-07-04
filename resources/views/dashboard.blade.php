@extends('components.layout')
@section('title', 'Dashboard')
@section('content')

<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 py-8">
    <div class="container mx-auto px-6">
        <!-- Header Section -->
        <div class="text-center mb-12 relative">
            <div class="absolute top-0 right-0">
                <form action="{{route('logout')}}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md cursor-pointer">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            <span>Logout</span>
                        </div>
                    </button>
                </form>
            </div>
            <h1 class="text-4xl font-bold text-amber-800 mb-4">Bem Vindo ao RunIA</h1>
            <p class="text-lg text-amber-700 max-w-2xl mx-auto">
                RunIA é uma plataforma de IA que permite que você crie e execute modelos de IA de forma rápida e fácil.
            </p>
        </div>

        <!-- Dashboard Card -->
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="bg-amber-600 text-white p-6">
                <h2 class="text-2xl font-bold text-center">Dashboard</h2>
            </div>

            <div class="p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Quick Stats -->
                    <div class="bg-amber-50 rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-amber-800 mb-4">Seus Treinos</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-amber-700">Treinos Ativos:</span>
                                <span class="font-semibold text-amber-800">0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-amber-700">Treinos Concluídos:</span>
                                <span class="font-semibold text-amber-800">0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="bg-amber-50 rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-amber-800 mb-4">Ações Rápidas</h3>
                        <div class="space-y-4">
                            <a href="{{route('new_training')}}" class="block w-full">
                                <button class="w-full bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                                    <div class="flex items-center justify-center space-x-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span>Novo Treino</span>
                                    </div>
                                </button>
                            </a>

                            <button class="w-full bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    <span>Ver Histórico</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
