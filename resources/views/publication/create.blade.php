<x-layout>

    <h1 class="text-center">Cadastro de publicação</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    
    <form class="m-4" method="post" action="{{route('publication.store')}}">
        @csrf
        {{-- campo titulo --}}
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        {{-- campo descrição --}}
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>
        {{-- campo conteudo --}}
        <div class="form-group">
            <label for="content">Conteúdo</label>
            <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
        </div>
        {{-- botão submit --}}
        <button type="submit" class="mt-2 btn btn-primary">Salvar</button>
    </form>
</x-layout>