@extends('layouts.theme.app')

@section('content')
<h1>Cadastro de usuário</h1>
<!-- conteúdo aqui -->

<form class="row g-3 inputsRegistro" action="{{ route('usuario')}}" method="POST">
  @csrf
    <div class="col-12">
        <input type="text" name="name" class="form-control" id="inputAddress" required>
        <label for="inputAddress" class="form-label">Nome</label>
      </div>
    <div class="col-md-12">
      <input type="email" name="email" class="form-control" id="inputEmail4" required>
      <label for="inputEmail4" class="form-label">Email</label>
    </div>
    <div class="col-md-6">
      <input type="password" name="password1" class="form-control" id="inputPassword4" required>
      <label for="inputPassword4" class="form-label">Senha</label>
    </div>
    <div class="col-md-6">
        <input type="password" name="password2" class="form-control" id="inputPassword4" required>
        <label for="inputPassword4" class="form-label">Repita a senha</label>
      </div>
    <div class="col-md-6">
        <select name="permissao" class="form-control form-select form-label" required>
            <option value="" selected></option>
            <option value="ADMIN">Administrador</option>
            <option value="USUARIO">Usuário</option>
        </select>
        <label for="inputAddress" class="form-label">Nível de permissão</label>
      </div>
      <div class="col-md-6">
        <input type="text" name="telefone" class="form-control" id="inputAddress" required>
        <label for="inputAddress" class="form-label">Telefone</label>
      </div>
    <div class="col-12"><br>
      <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </div>

  </form>
@endsection
