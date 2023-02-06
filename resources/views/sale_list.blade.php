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
                        <th>Total da venda</th>
                        <th>Total entregue</th>
                        <th>Total devolvido</th>
                        <th>Itens totais</th>
                        <th>Dia da venda</th>
                        <th>Estado</th>
                        <th>====</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$sale->total}}</td>
                        <td>{{$sale->cash}}</td>
                        @if ($sale->change == 0 || $sale->change == null)
                        <td>====</td>
                        @else
                        <td>{{$sale->change}}</td>
                        @endif
                        
                        <td>{{$sale->user_id}}</td>
                        <td>{{$sale->created_at}}</td>
                        @if ($sale->status == "PAID")
                        <td>PAGO</td>
                        @else
                        <td>PENDENTE</td>
                        @endif

                        <td><a href="/sale_itens/{{$sale->id}}">itens da venda</a></td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection