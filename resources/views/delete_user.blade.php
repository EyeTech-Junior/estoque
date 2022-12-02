@extends('layouts.main')
@section('title','apagar usuário')
@section('content')
<h1>apagar usuario</h1>
<form action="{{ route('deletar', ['id' => $usuario->id])}}" method="POST">
    @csrf

        <div>
            <label for="name"  values="">Confirma apagar o usuario:</label><br>
            <label for="name"  values="">{{$usuario->name}}</label><br>
            <label for="name"  values="">{{$usuario->email}}</label><br>
            
        </div>

    <button type="submit">sim</button><br>
</form>
@endsection