@extends('components.layout')
@section('title', 'Dashboard')
@section('content')

<div class="mx-auto h-screen bg-amber-200">
    <div class="container">
        <h1 class="p-4 rounded-lg">Bem Vindo ao RunIA</h1>
    </div>
    <div class="container">
        <p class="p-4 rounded-lg">RunIA é uma plataforma de IA que permite que você crie e execute modelos de IA de forma rápida e fácil.</p>
    </div>

    <div class="p-4 bg-amber-50 w-auto rounded-lg flex flex-col gap-4 items-center justify-center">
        <h2 class="text-xl font-bold">Dashboard</h2>
        <p>Esta é a sua área de trabalho. Aqui você pode gerenciar seus modelos, executar tarefas e muito mais.</p>
    </div>

@endsection
