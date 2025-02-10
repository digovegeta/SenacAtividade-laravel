<x-layout>
    <h1 class="text-center">Lista de Publicações</h1>
    <div class="grid">
        <div class="row">
            @foreach($publications as $publication)
                <div class="card col">
                    <div class="card-body">
                        <h2 class="card-title">{{$publication->title}}</h2>
                        <h3>{{$publication->description}}</h3>
                        <p class="card-text">{{$publication->content}}</p>
                        <a class="card-link" href="{{route("publication.show", ['id'=>$publication->id])}}">Ver Publicação</a>
                        <form method="post" action="{{route('publication.destroy', ["id"=>$publication->id])}}">
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