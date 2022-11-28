@extends('layouts.main')
@section('title','Cadastro de usuário')
@section('content')
<h1>Cadastro de usuario</h1>
<form action="{{ route('usuario')}}" method="POST">
    @csrf

        <div>
            <label for="name"  values="">Nome</label><br>
            <input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <label for="email" value="">Email</label><br>
            <input id="email" class="block mt-1 w-full" type="email" name="email"  required />
        </div>

        <div class="mt-4">
            <label for="password" value="">Senha</label><br>
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password1" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <label for="password_confirmation" value="">Confirme a senha</label><br>
            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password2" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
        
            <label for="password_confirmation" value="">Permissão de usuário</label><br>
            <select id="permissao" name="permissao" class="block mt-1 w-full">
                <option value="" selected>Funcionario</option>
                <option value="1">Administrador</option>
            </select>
        </div>

    <button type="submit">entrar</button><br>
</form>
@endsection