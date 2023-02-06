@extends('layouts.theme.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de produtos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Código</th>
                        <th>Custo</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Validade</th>
                        <th>Categoria</th>
                        <th>===</th>
                        <th>===</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$produto->name}}</td>
                        <td>{{$produto->code}}</td>
                        <td>{{$produto->cost}}</td>
                        <td>{{$produto->price}}</td>
                        <td>{{$produto->stock}}</td>
                        @if ($produto->validate == 0 || $produto->validate == null)
                        <td>Sem validade</td>
                        @else
                        <td>{{$produto->validate}}</td>
                        @endif

                        @foreach($categorias as $categoria)
                        @if ($produto->category_id == $categoria->id)
                        <td>{{$categoria->name}}</td>
                        @endif
                        @endforeach
                        <td><a href="/product_change/{{$produto->id}}"><i class="fas fa-pen"></i></a></td>
                        <td><a href="/product_delete/{{$produto->id}}"><i class="fas fa-trash text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection