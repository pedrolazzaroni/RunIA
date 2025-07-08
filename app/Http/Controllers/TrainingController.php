<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    public function new(){
        return view('training.new');
    }

    public function create(Request $request){

        $validated = $request->validate(([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'type' => 'required|string|max:1000',
        ]));

        if(!$validated){
            return redirect()->back()->withErrors(['Error' => 'Dados inválidos']);
        }

        $prompt = "Você é um especialista em {$validated['type']}.
        Crie um treinamento sobre {$validated['name']} com a seguinte descrição: {$validated['description']}";

        //Criando lógica de enviar pro ChatGPT

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'max_tokens' => 1000,
            'messages' => [
            ['role' => 'user', 'content' => $prompt]
            ]
        ]);

        if ($response->successful()) {
            // Processar a resposta do ChatGPT
            $data = $response->json();
            // Fazer algo com os dados retornados
        } else {
            return redirect()->back()->withErrors(['Error' => 'Falha ao se comunicar com o ChatGPT']);
        }
        // Aqui você pode salvar o treinamento no banco de dados, se necessário
        Training::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'type' => $validated['type'],
            'content' => $data['choices'][0]['message']['content'] ?? 'Conteúdo não disponível',
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Treinamento criado com sucesso!');
    }

    public function history(){
        $trainings = Training::where('user_id', Auth::id())->get();
        return view('training.history', compact('trainings'));
    }

    public function delete($id){
        $training = Training::find($id);
        if($training && $training->user_id === Auth::id()){
            $training->delete();
            return redirect()->route('training.history')->with('success', 'Treinamento excluído com sucesso!');
        }
        return redirect()->route('training.history')->withErrors(['Error' => 'Treinamento não encontrado ou acesso negado']);   
    }
}
