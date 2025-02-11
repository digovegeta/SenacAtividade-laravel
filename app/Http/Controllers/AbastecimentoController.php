<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abastecimento;

class AbastecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abastecimentos = Abastecimento::all();

        return view('abastecimento.index', [
            'abastecimentos' => $abastecimentos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("abastecimento.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $abastecimento = new abastecimento();
        $abastecimento->veiculo_id = $request->input("veiculo_id");
        $abastecimento->data_abastecimento = $request->input("data_abastecimento");
        $abastecimento->quantidade_litros = $request->input("quantidade_litros");
        $abastecimento->preco_unitario = $request->input("preco_unitario");
        $abastecimento->tipo_combustivel = $request->input("tipo_combustivel");
        $abastecimento->km = $request->input("km");
        $abastecimento->save();
        return redirect()->route("abastecimento.create")->with('message', 'Publicação Criada Com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $abastecimento = abastecimento::findOrFail($id); // busca pelo registro no banco pelo id
        return view('abastecimento.show', [
            'abastecimento' => $abastecimento, 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abastecimento = abastecimento::findOrFail($id);
        $abastecimento->delete();
        return redirect()->route("abastecimento.index"); 
    }
}
