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
                        <th>Permissão</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>===</th>
                        <th>===</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->profile}}</td>
                        <td>{{$usuario->phone}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->status}}</td>
                        <td><a href="/user_change/{{$usuario->id}}">editar</a></td>
                        <td><a href="/user_delete/{{$usuario->id}}">apagar</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection