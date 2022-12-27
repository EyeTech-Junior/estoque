@extends('layouts.theme.app')

@section('content')

<h1>Cadastro de categorias</h1>
<!-- conteúdo aqui -->

<form class="row g-3" action="{{ route('categoria')}}" method="POST">
  @csrf
    <div class="col-12">
        <label for="inputAddress" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" id="inputAddress">
      </div>
    
    <div class="col-12"><br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    
  </form>
@endsection