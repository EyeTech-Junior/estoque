@extends('layouts.main')
@section('title','apagar usuário')
@section('content')
<h1>apagar usuario</h1>
<form action="{{ route('deletar', ['id' => $users->id])}}" method="POST">
    @csrf

        <div>
            <label for="name"  values="">Confirma apagar o usuario:</label><br>
            <label for="name"  values="">{{$users->name}}</label><br>
            <label for="name"  values="">{{$users->email}}</label><br>
            
        </div>

    <button type="submit">sim</button><br>
</form>
@endsection