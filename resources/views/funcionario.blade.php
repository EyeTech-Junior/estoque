@extends('layouts.main')
@section('title','Lista Funcionário')
@section('content')
<h1>Lista de funcionários</h1>
<table class="table table-dark table-sm">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nome</th>
          <th scope="col">email</th>
          <th scope="col">permissão</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($users as $user)
        
        <tr>
            <th scope="row">{{$loop->index}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

            @if ($user->permissao == "1")
            <td>administrador</td>
            @else
            <td>Funcionário</td>
            @endif
            

            @if ($user->name == "admin")
            <td>não é possivel alterar</td>
            @else
            <td><a href="/change_users/{{$user->id}}">alterar</a></td>
            @endif

            @if ($user->name == "admin")
            <td>não é possivel deletar</td>
            @else
            <td><a href="/delete_user/{{$user->id}}">deletar</a></td>
            @endif
            
            
            
        </tr>
        @endforeach
      </tbody>
  </table>


@endsection