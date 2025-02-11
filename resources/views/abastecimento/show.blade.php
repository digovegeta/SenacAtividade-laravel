<x-layout>
    <h1> id: {{$abastecimento->veiculo_id}}</h1>
    <h2>Tipo combustível: {{$abastecimento->tipo_combustivel}}</h2>
    <p>Abastecimento: {{$abastecimento->quantidade_litros}}</p>
    <p>Data: {{$abastecimento->data_abastecimento}}</p>
    <p>KM {{$abastecimento->km}}</p>
    <p>Valor do Litro - R$ {{$abastecimento->preco_unitario}} </p>
    <p>Valor pago - R$ {{$abastecimento->preco_unitario * $abastecimento->quantidade_litros}}</p>
</x-layout>