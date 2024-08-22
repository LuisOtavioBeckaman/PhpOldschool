@extends('layouts.app')

@section('content')
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <h1>Detalhes do Cliente</h1>
    </header>

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <p>{{ $cliente->nome }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <p>{{ $cliente->email }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <p>{{ $cliente->telefone }}</p>
    </div>

    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 border-top">
        <p>&copy; {{ date('Y') }} Gestão de Farmácia. Todos os direitos reservados.</p>
    </footer>
</div>
@endsection
