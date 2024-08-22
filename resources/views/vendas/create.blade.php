@extends('layouts.app')

@section('content')
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <h1>Registrar Nova Venda</h1>
    </header>

    <form action="{{ route('vendas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-control" required>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="produto_id" class="form-label">Produto (Opcional)</label>
            <select name="produto_id" id="produto_id" class="form-control">
                <option value="">N/A</option>
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="servico_id" class="form-label">Serviço (Opcional)</label>
            <select name="servico_id" id="servico_id" class="form-control">
                <option value="">N/A</option>
                @foreach ($servicos as $servico)
                    <option value="{{ $servico->id }}">{{ $servico->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="valor_total" class="form-label">Valor Total</label>
            <input type="number" name="valor_total" id="valor_total" class="form-control" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('vendas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 border-top">
        <p>&copy; {{ date('Y') }} Gestão de Farmácia. Todos os direitos reservados.</p>
    </footer>
</div>
@endsection
