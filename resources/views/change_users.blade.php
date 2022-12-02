@extends('layouts.main')
@section('title','alterar usuário')
@section('content')
<h1>Alterar Cadastro</h1>
<form action="{{ route('alterar', ['id' => $users->id])}}" method="POST">
    @csrf

        <div>
            <label for="name"  value="">Nome</label><br>
            <input id="name" value="{{$users->name}}" type="text" name="name" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <label for="email" value="">Email</label><br>
            <input id="email"  value="{{$users->email}}" type="email" name="email"  required />
        </div>

        <div class="mt-4">
            <label for="password" value="">nova senha</label><br>
            <x-jet-input id="password"  values=""  type="password" name="password1"/>
        </div>

        <div class="mt-4">
            <label for="password_confirmation" value="">Confirme a senha</label><br>
            <input id="password_confirmation"  value="" type="password" name="password2"/>
        </div>

        <div class="mt-4">
        
            <label for="password_confirmation" value="">Permissão de usuário</label><br>
            <select id="permissao" name="permissao" class="block mt-1 w-full">
                   
                @if ($users->permissao == null)
                <option value="" selected>Funcionario</option>
                <option value="1">Administrador</option>
                @else
                <option value="">Funcionario</option>
                <option value="1" selected>Administrador</option>
                @endif
                
            </select>
        </div>
        
    <button type="submit">entrar</button><br>
</form>
@endsection