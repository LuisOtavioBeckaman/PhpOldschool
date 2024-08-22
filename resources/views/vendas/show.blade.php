@extends('layouts.app')

@section('content')
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <h1>Detalhes da Venda</h1>
    </header>

    <div class="mb-3">
        <label class="form-label">Cliente</label>
        <p>{{ $venda->cliente->nome }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Produto</label>
        <p>{{ $venda->produto ? $venda->produto->nome : 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Serviço</label>
        <p>{{ $venda->servico ? $venda->servico->nome : 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Data</label>
        <p>{{ $venda->data }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Valor Total</label>
        <p>{{ $venda->valor_total }}</p>
    </div>

    <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('vendas.index') }}" class="btn btn-secondary">Voltar</a>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 border-top">
        <p>&copy; {{ date('Y') }} Gestão de Farmácia. Todos os direitos reservados.</p>
    </footer>
</div>
@endsection
