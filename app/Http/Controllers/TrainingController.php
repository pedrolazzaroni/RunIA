<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        //Criando lógica de enviar pro ChatGPT

        $response = Http::post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'user', 'content' => $validated['description']]
            ]
        ]);

        if ($response->successful()) {
            // Processar a resposta do ChatGPT
            $data = $response->json();
            // Fazer algo com os dados retornados
        } else {
            return redirect()->back()->withErrors(['Error' => 'Falha ao se comunicar com o ChatGPT']);
        }
    }
}
