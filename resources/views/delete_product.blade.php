@extends('layouts.main')
@section('title','apagar produto')
@section('content')
<h1>apagar produto</h1>
<form action="{{ route('apagar', ['id' => $products->id])}}" method="POST">
    @csrf

        <div>
            <label for="name"  values="">Confirma deletar produto?</label><br><br>
            <label for="name"  values="">Nome do produto: {{$products->nome}}</label><br>
            <label for="name"  values="">Preço de custo: {{$products->preco_custo}}</label><br>
            <label for="name"  values="">Preço de venda: {{$products->preco_venda}}</label><br>
        </div>

    <button type="submit">sim</button><br>
</form>
@endsection