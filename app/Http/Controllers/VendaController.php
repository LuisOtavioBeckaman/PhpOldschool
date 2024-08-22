<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        return view('vendas.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'data_venda' => 'required|date',
            'total' => 'required|numeric|min:0',
        ]);

        // Criação da venda
        Venda::create($validatedData);

        return redirect()->route('vendas.index')->with('success', 'Venda registrada com sucesso!');
    }

    public function show(Venda $venda)
    {
        return view('vendas.show', compact('venda'));
    }

    public function edit(Venda $venda)
    {
        return view('vendas.edit', compact('venda'));
    }

    public function update(Request $request, Venda $venda)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'data_venda' => 'required|date',
            'total' => 'required|numeric|min:0',
        ]);

        // Atualização da venda
        $venda->update($validatedData);

        return redirect()->route('vendas.index')->with('success', 'Venda atualizada com sucesso!');
    }

    public function destroy(Venda $venda)
    {
        $venda->delete();
        return redirect()->route('vendas.index')->with('success', 'Venda removida com sucesso!');
    }
}
