@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="service-form-container bg-dark p-5 rounded shadow-lg border-primary">
        <h1 class="text-center text-light mb-4">Cadastrar Serviço</h1>
        
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="company_name" class="form-label text-light">Nome da Empresa:</label>
                <input type="text" name="company_name" id="company_name" class="form-control bg-secondary text-light border rounded p-3" placeholder="Digite o nome da empresa" required>
            </div>

            <div class="mb-4">
                <label for="description" class="form-label text-light">Descrição do Serviço:</label>
                <textarea name="description" id="description" class="form-control bg-secondary text-light border rounded p-3" rows="4" placeholder="Descrição do serviço"></textarea>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="arrival_date" class="form-label text-light">Data de Chegada:</label>
                    <input type="date" name="arrival_date" id="arrival_date" class="form-control bg-secondary text-light border rounded p-3" required>
                </div>
                <div class="col-md-6">
                    <label for="delivery_date" class="form-label text-light">Data de Entrega:</label>
                    <input type="date" name="delivery_date" id="delivery_date" class="form-control bg-secondary text-light border rounded p-3">
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill" >Salvar</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary px-5 py-3 rounded-pill">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
