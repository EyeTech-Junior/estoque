@extends('layouts.theme.app')

@section('content')

<h1>Cadastro de categorias</h1>
<!-- conteúdo aqui -->

<form class="row g-3" action="{{ route('categoria')}}" method="POST">
  @csrf
    <div class="inputsRegistro">
        <div class="col-12">
            <input type="text" name="name" class="form-control" id="inputAddress" required>
            <label for="inputAddress" class="form-label">Nome</label>
        </div>

        <div class="col-12"><br>
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </div>
    </div>

  </form>
@endsection
