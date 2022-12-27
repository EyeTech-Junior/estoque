@extends('layouts.theme.app')

@section('content')

<!-- conteúdo aqui -->
<div class="container-fluid">
<div class="text-center">
    <form action="{{ route('user.delete', ['id' => $item->id])}}" method="POST">
    <div>
        <h1>Deletar usuário?</h1>
        <p>{{$item->name}}</p>
        <button type="submit" class="btn btn-danger text-white ">Sim</button>
        <a href="/home"><button type="button" class="btn btn-success text-white">voltar</button></a>
        
    </div>
    </form>
</div>
</div>
@endsection


