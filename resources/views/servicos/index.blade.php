@extends('layouts.app')

@section('content')
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <h1>Lista de Serviços</h1>
        <a href="{{ route('servicos.create') }}" class="btn btn-success">Adicionar Serviço</a>
    </header>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicos as $servico)
            <tr>
                <td>{{ $servico->nome }}</td>
                <td>{{ $servico->descricao }}</td>
                <td>{{ $servico->preco }}</td>
                <td>
                    <a href="{{ route('servicos.show', $servico->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display:inline;">
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
