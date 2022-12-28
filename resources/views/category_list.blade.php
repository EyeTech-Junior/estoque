@extends('layouts.theme.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listagem de funcionários</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>===</th>
                        <th>===</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$categoria->name}}</td>
                        <td><a href="/category_change/{{$categoria->id}}">editar</a></td>
                        <td><a href="/category_delete/{{$categoria->id}}">apagar</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection