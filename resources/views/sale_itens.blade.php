@extends('layouts.theme.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de vendas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome do produto</th>
                        <th>Código</th>
                        <th>Preço</th>
                        <th>Preço total</th>
                        <th>Quantidade total</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Realiza a separação dos produtos que estão na venda -->
                    @foreach ($products as $product)
                    <tr>@foreach ($itens as $item)
                        @if($product->id == $item->product_id)
                        <td>{{$loop->index}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->code}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{(number_format($product->price * $item->quantity, 2, '.', ''))}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->created_at}}</td>
                        @endif
                        @endforeach
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection