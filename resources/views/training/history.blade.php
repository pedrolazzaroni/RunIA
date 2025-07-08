@extends('components.layout')
@section('title', 'Histórico de Treinos')
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
                <a href="{{route('new.training')}}" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Novo Treino</span>
                    </div>
                </a>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold text-amber-800 mb-4">Histórico de Treinos</h1>
                <p class="text-lg text-amber-700 max-w-2xl mx-auto">
                    Visualize todos os seus treinos de IA criados
                </p>
            </div>
        </div>

        <!-- Trainings List -->
        <div class="max-w-6xl mx-auto">
            @if($trainings->count() > 0)
                <div class="grid gap-6">
                    @foreach($trainings as $training)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="bg-amber-600 text-white p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold">{{ $training->name }}</h3>
                                    <div class="flex items-center space-x-4">
                                        <span class="bg-amber-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                            {{ ucfirst($training->type) }}
                                        </span>
                                        <span class="text-amber-100 text-sm">
                                            {{ $training->created_at->format('d/m/Y H:i') }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="grid md:grid-cols-2 gap-6">
                                    <!-- Description -->
                                    <div>
                                        <h4 class="font-semibold text-amber-800 mb-2">Descrição:</h4>
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            {{ $training->description }}
                                        </p>
                                    </div>

                                    <!-- Content Preview -->
                                    <div>
                                        <h4 class="font-semibold text-amber-800 mb-2">Conteúdo Gerado:</h4>
                                        <div class="bg-amber-50 rounded-lg p-4 max-h-40 overflow-y-auto">
                                            <p class="text-gray-700 text-sm leading-relaxed">
                                                {{ Str::limit($training->content, 300) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="mt-6 flex justify-end space-x-3">
                                    <button
                                        onclick="showFullContent('{{ $training->id }}')"
                                        class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg transition duration-200 text-sm cursor-pointer font-medium"
                                    >
                                        Ver Completo
                                    </button>
                                    <button
                                        onclick="deleteTraining('{{ $training->id }}')"
                                        class="bg-red-500 cursor-pointer hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-200 text-sm font-medium"
                                    >
                                        Excluir
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination if needed -->
                @if($trainings instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="mt-8">
                        {{ $trainings->links() }}
                    </div>
                @endif
            @else
                <!-- Empty State -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-12 text-center">
                        <div class="mx-auto w-24 h-24 bg-amber-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-12 h-12 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700 mb-2">Nenhum treino encontrado</h3>
                        <p class="text-gray-500 mb-6">Você ainda não criou nenhum treino de IA.</p>
                        <a href="{{route('new.training')}}" class="bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:scale-105 shadow-md inline-flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>Criar Primeiro Treino</span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Modal for Full Content -->
<div id="contentModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
            <div class="bg-amber-600 text-white p-6 flex justify-between items-center">
                <h3 id="modalTitle" class="text-xl font-bold"></h3>
                <button onclick="closeModal()" class="text-white cursor-pointer hover:text-amber-200 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 overflow-y-auto max-h-[70vh]">
                <div id="modalContent" class="prose max-w-none">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Training data for modal
const trainings = @json($trainings);

function showFullContent(trainingId) {
    const training = trainings.find(t => t.id == trainingId);
    if (training) {
        document.getElementById('modalTitle').textContent = training.name;
        document.getElementById('modalContent').innerHTML = `
            <div class="space-y-4">
                <div>
                    <h4 class="font-semibold text-amber-800 mb-2">Tipo:</h4>
                    <p class="text-gray-700">${training.type}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-amber-800 mb-2">Descrição:</h4>
                    <p class="text-gray-700">${training.description}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-amber-800 mb-2">Conteúdo Completo:</h4>
                    <div class="bg-amber-50 rounded-lg p-4">
                        <p class="text-gray-700 whitespace-pre-wrap">${training.content}</p>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-amber-800 mb-2">Criado em:</h4>
                    <p class="text-gray-700">${new Date(training.created_at).toLocaleString('pt-BR')}</p>
                </div>
            </div>
        `;
        document.getElementById('contentModal').classList.remove('hidden');
    }
}

function closeModal() {
    document.getElementById('contentModal').classList.add('hidden');
}

function deleteTraining(trainingId) {
    if (confirm('Tem certeza que deseja excluir este treino? Esta ação não pode ser desfeita.')) {
        // Here you would typically make an AJAX request to delete the training
        // For now, we'll just reload the page

        window.location.href = `/training/delete/${trainingId}`;
    }
}

// Close modal when clicking outside
document.getElementById('contentModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>

@endsection
