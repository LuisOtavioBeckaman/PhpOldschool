@extends('layouts.app')

@section('content')
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <h1>Lista de Vendas</h1>
        <a href="{{ route('vendas.create') }}" class="btn btn-success">Registrar Venda</a>
    </header>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Serviço</th>
                <th>Data</th>
                <th>Valor Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendas as $venda)
            <tr>
                <td>{{ $venda->cliente->nome }}</td>
                <td>{{ $venda->produto ? $venda->produto->nome : 'N/A' }}</td>
                <td>{{ $venda->servico ? $venda->servico->nome : 'N/A' }}</td>
                <td>{{ $venda->data }}</td>
                <td>{{ $venda->valor_total }}</td>
                <td>
                    <a href="{{ route('vendas.show', $venda->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Footer -->
    <footer class="text-center py-4 mt-5 border-top">
        <p>&copy; {{ date('Y') }} Gestão de Farmácia. Todos os direitos reservados.</p>
    </footer>
</div>
@endsection
