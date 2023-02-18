@extends('layouts.admin')
@section('title', 'Itens da venda')
@section('content-header', 'Itens da venda')
@section('content-actions')
    <a href="{{route('cart.index')}}" class="btn btn-primary">Abrir venda</a>
    <a href="{{route('orders.index')}}" class="btn btn-primary">Voltar para a listagem</a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Valor total</th>
                    <th>Valor unitário</th>
                    <th>Criado em</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                @foreach ($order as $orders)
                @if ($product->id == $orders->product_id)
                <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$orders->quantity}}</td>
                    <td>{{config('settings.currency_symbol')}} {{number_format($orders->price, 2)}}</td>
                    <td>{{config('settings.currency_symbol')}} {{number_format($product->price, 2)}}</td>
                    <td>{{$orders->created_at}}</td>
                </tr>
                @endif
                @endforeach
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

