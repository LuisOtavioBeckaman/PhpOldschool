@extends('layouts.app')

@section('content')
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <h1>Detalhes do Serviço</h1>
    </header>

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <p>{{ $servico->nome }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <p>{{ $servico->descricao }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Preço</label>
        <p>{{ $servico->preco }}</p>
    </div>

    <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Voltar</a>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 border-top">
        <p>&copy; {{ date('Y') }} Gestão de Farmácia. Todos os direitos reservados.</p>
    </footer>
</div>
@endsection
