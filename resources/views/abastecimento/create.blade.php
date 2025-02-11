<x-layout>

    <h1 class="text-center">Abastecimento</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    
    <form class="m-4" method="post" action="{{route('abastecimento.store')}}">
        @csrf

        <div class="form-group">
            <label for="veiculo_id">Veiculo</label>
            <input type="text" class="form-control" id="veiculo_id" name="veiculo_id" required>
        </div>
        <div class="form-group">
            <label for="tipo_combustivel">Tipo combustível:</label>
            <select name="tipo_combustivel" id="tipo_combustivel">
                <option value="G">Gasolina</option>
                <option value="E">Etanol</option>
                <option value="GA">Gasolina Aditivada</option>
                <option value="EA">Etanos Aditivado</option>
            </select>
            <label for="quantidade_litros">Total Litros</label>
            <input type="number" step="0.001" id="quantidade_litros" name="quantidade_litros" required>
            <label for="preco_unitario">Valor Litro</label>
            <input type="number" step="0.01"id="preco_unitario" name="preco_unitario" required>
            <label for="km">KM</label>
            <input type="number" id="km" name="km" rows="5" required>
        </div>
        <div class="form-group">
            <label for="data_abastecimento">Data</label>
            <input type="date" id="data_abastecimento" name="data_abastecimento" required>
        </div>
        {{-- botão submit --}}
        <button type="submit" class="mt-2 btn btn-primary">Salvar</button>
    </form>
</x-layout>