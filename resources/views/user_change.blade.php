@extends('layouts.theme.app')

@section('content')
<h1>Cadastro de usuário</h1>
<!-- conteúdo aqui -->

<form class="row g-3" action="{{ route('user.change', ['id' => $user->id])}}" method="POST">
  @csrf
    <div class="col-12">
        <label for="inputAddress" class="form-label">Nome</label>
        <input type="text" value="{{$user->name}}" name="name" class="form-control" id="inputAddress">
      </div>
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" value="{{$user->email}}" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Senha</label>
      <input type="password" name="password1" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Repita a senha</label>
        <input type="password"  name="password2" class="form-control" id="inputPassword4">
      </div>
    <div class="col-md-6">
        <label for="inputAddress" class="form-label">Nível de permissão</label><br>
        <select name="permissao" class="form-select form-label">
          @if ($user->profile == "ADMIN")
            <option value="ADMIN" selected>Administrador</option>
            <option value="USUARIO" >Usuário</option>
          @else
            <option value="ADMIN" >Administrador</option>
            <option value="USUARIO" selected>Usuário</option>
          @endif
          </select>
      </div>
      <div class="col-md-6">
        <label for="inputAddress" class="form-label">telefone</label><br>
        <input type="text" value="{{$user->phone}}" name="telefone" class="form-control" id="inputAddress">
      </div>
    <div class="col-12"><br>
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
    
  </form>
@endsection