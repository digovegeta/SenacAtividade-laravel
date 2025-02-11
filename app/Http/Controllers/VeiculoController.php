<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veiculos = Veiculo::all();

        return view('veiculo.index', [
           'veiculos' => $veiculos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("veiculo.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();
        $veiculo->marca = $request->input("marca");
        $veiculo->modelo = $request->input("modelo");
        $veiculo->ano = $request->input("ano");
        $veiculo->save();
        return redirect()->route("veiculo.create")->with('message', 'Veículo Cadastrado Com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculo.show', [
           'veiculo' => $veiculo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();
        return redirect()->route("veiculo.index")->with('message', 'Veículo Deletado Com Sucesso!');
    }
}
