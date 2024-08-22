@extends('layouts.app')

@section('content')
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <h1>Detalhes do Produto</h1>
    </header>

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <p>{{ $produto->nome }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <p>{{ $produto->descricao }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Preço</label>
        <p>{{ $produto->preco }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Quantidade em Estoque</label>
        <p>{{ $produto->quantidade_estoque }}</p>
    </div>

    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 border-top">
        <p>&copy; {{ date('Y') }} Gestão de Farmácia. Todos os direitos reservados.</p>
    </footer>
</div>
@endsection
