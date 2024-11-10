@extends('layouts.app')

@section('content')
<div class="container home-container">
    <h1>Bem-vindo, {{ Auth::user()->name }}!</h1>
    <p>Aqui você pode gerenciar seus serviços.</p>
    <div class="button-group">
        <a href="{{ route('services.create') }}" class="btn btn-primary">Criar Novo Serviço</a>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Ver Serviços</a>
    </div>
</div>
@endsection

@section('styles')
    <!-- Link para o arquivo CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
