@extends('components.layout')
@section('title', 'Novo Treino')
@section('content')

<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 py-8">
    <div class="container mx-auto px-6">
        <!-- Header Section -->
        <div class="mb-12">
            <div class="flex justify-between items-center mb-8">
                <a href="{{route('dashboard')}}" class="bg-amber-600 hover:bg-amber-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Voltar</span>
                    </div>
                </a>
                <div></div> <!-- Empty div for spacing -->
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold text-amber-800 mb-4">Criar Novo Treino</h1>
                <p class="text-lg text-amber-700 max-w-2xl mx-auto">
                    Configure seu treino de IA preenchendo as informações abaixo
                </p>
            </div>
        </div>

        <!-- Training Form -->
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-amber-600 text-white p-6">
                    <h2 class="text-2xl font-bold text-center">Dados do Treino</h2>
                </div>

                <form action="{{route('create.training')}}" method="POST" class="p-8">
                    @csrf

                    <!-- Display Errors -->
                    @if ($errors->any())
                        <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-red-800">Erro na validação</h3>
                                    <div class="mt-2 text-sm text-red-700">
                                        <ul class="list-disc list-inside space-y-1">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="space-y-6">
                        <!-- Nome do Treino -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-amber-700 mb-2">
                                Nome do Treino <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                required
                                value="{{ old('name') }}"
                                class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                placeholder="Digite o nome do treino"
                            >
                        </div>

                        <!-- Tipo do Treino -->
                        <div>
                            <label for="type" class="block text-sm font-medium text-amber-700 mb-2">
                                Tipo do Treino <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="type"
                                id="type"
                                required
                                value="{{ old('type') }}"
                                class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200"
                                placeholder="Digite o tipo do treino"
                            >
                        </div>

                        <!-- Descrição -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-amber-700 mb-2">
                                Descrição do Treino <span class="text-red-500">*</span>
                            </label>
                            <textarea
                                name="description"
                                id="description"
                                required
                                rows="5"
                                class="w-full px-4 py-3 border border-amber-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 resize-none"
                                placeholder="Descreva detalhadamente o que você deseja treinar, os objetivos e qualquer informação relevante..."
                            >{{ old('description') }}</textarea>
                            <p class="mt-2 text-sm text-amber-600">
                                Forneça uma descrição detalhada para obter melhores resultados da IA.
                            </p>
                        </div>

                        {{-- Submit Button  --}}
                        <div class="pt-4">
                            <button
                                type="submit"
                                class="w-full bg-amber-600 hover:bg-amber-700 text-white font-semibold py-4 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md cursor-pointer"
                            >
                                <div class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    <span>Criar Treino</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
