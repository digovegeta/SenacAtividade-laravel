<x-layout>
    <h1 class="text-center">Lista de Abastecimentos</h1>
    <div class="grid">
        <div class="row">
        @foreach($abastecimentos as $abastecimento)
                <div class="card col">
                    <div class="card-body">
                        <h2 class="card-title">{{$abastecimento->km}}</h2>
                        <h3>{{$abastecimento->km}}</h3>
                        <p class="card-text">{{$abastecimento->km}}</p>
                        <a class="card-link" href="{{route("abastecimento.show", ['id'=>$abastecimento->id])}}">Ver Publicação</a>
                        <form method="post" action="{{route('abastecimento.destroy', ["id"=>$abastecimento->id])}}">
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