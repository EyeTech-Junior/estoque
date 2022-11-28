@extends('layouts.main')
@section('title','apagar usuário')
@section('content')
<h1>apagar usuario</h1>
<form action="{{ route('apagar', ['id' => $products->id])}}" method="POST">
    @csrf

        <div>
            <label for="name"  values="">Confirma produto:</label><br>
            <label for="name"  values="">{{$products->name}}</label><br>
            <label for="name"  values="">{{$products->email}}</label><br>
            
        </div>

    <button type="submit">sim</button><br>
</form>
@endsection