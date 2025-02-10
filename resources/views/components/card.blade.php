@props(['mensagem' => "mensagem padrão", 'imagem' => "", 'class'=>""])

<div {{$attributes->merge(['class'=>'card mb-2 ' . $class])}} style="width:15rem;">
    @if(strlen($imagem) > 0)
        <img class="card-img-top" src="{{$imagem}}" alt="place holder">
    @endif
    <div class="card-body">
        <h2 class="card-title">{{$mensagem}}</h2>
    </div>
</div>