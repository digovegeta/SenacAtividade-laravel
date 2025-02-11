<x-layout>
    <h1 class="text-center">Lista de Abastecimentos</h1>
    <div class="grid">
        <div class="row">
        @foreach($veiculos as $veiculo)
                <div class="card col">
                    <div class="card-body">
                        <h2 class="card-title">{{$veiculo->placa}}</h2>
                        <h3>{{$veiculo->placa}}</h3>
                        <p class="card-text">{{$veiculo->placa}}</p>
                        <a class="card-link" href="{{route("veiculo.show", ['id'=>$veiculo->id])}}">Ver veiculo</a>
                        <form method="post" action="{{route('veiculo.destroy', ["id"=>$veiculo->id])}}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Deletar</button>                           
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>