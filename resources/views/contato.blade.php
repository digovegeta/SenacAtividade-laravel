<x-layout>
    <h1>Olá {{$nome}}</h1>
    <div class="grid">
        <div class="row">
            @foreach($comidas as $chave=>$valor)
                <x-card class="col" :mensagem="$chave" :imagem="$valor"></x-card>
            @endforeach
        </div>
    </div>
</x-layout>