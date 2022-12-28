@extends('layouts.theme.app')

@section('content')

<h1>Cadastro de categorias</h1>
<!-- conteúdo aqui -->

<form class="row g-3" action="{{ route('category.change', ['id' => $category->id])}}" method="POST">
  @csrf
    <div class="col-12">
        <label for="inputAddress" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" id="inputAddress" value="{{$category->name}}">
      </div>
    
    <div class="col-12"><br>
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
    
  </form>
@endsection