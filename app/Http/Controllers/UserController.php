<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //exibe as informações em lista
    public function index(){
        $users = User::get();
        return view('funcionario',['users' => $users]);
    }
    public function cadastroUser(){
        return view('register_users');
    }

    //cadastra funcionários
    public function cadastrarUser(Request $request){
        

        if($request->permissao != null){
            $permissao = $request->permissao;
        }else{
            $permissao = null;
        }
        

if($request != null){
        if(($request->name == null) or ($request->email == null) or ($request->password1 == null) or ($request->password2 == null)){
            //se algum dos campos tiver em branco, tratar o erro
            echo "campos vazios";
        }else{
            //caso nenhum campo esteja em branco
                if($request->password1 == $request->password2){
                    $hash_senha = bcrypt($request->password1);
                    User::create([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>$hash_senha,
                        'permissao'=>$permissao,
                    ]);
                    $users = User::get();
                    return view('funcionario',['users' => $users]);
                }else{
                    return view('/register_users');
                }
            
        }
    }
}
//exibe as informações do usuario para ser alterado
public function show($id){
    $users = User::findOrFail($id);
    return view('change_users', ['users' => $users]);
}

//faz a atualização dos usuários
public function update(Request $request, $id){
    $user = User::findOrFail($id);

    if($request->permissao != null){
        $permissao = $request->permissao;
    }else{
        $permissao = null;
    }

    
    if($request->password1 == null){

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'permissao'=>$permissao,
        ]);
        $users = User::get();
        return view('funcionario',['users' => $users]);

    }elseif(($request->password1 != null) && ($request->password1 == $request->password2)){

        $hash_senha = bcrypt($request->password1);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$hash_senha,
            'permissao'=>$permissao,
        ]);

        $users = User::get();
        return view('funcionario',['users' => $users]);

    }else{
        $users = User::findOrFail($id);
        return view('change_users', ['users' => $users]);
    }
    
    
    
}

//leva para uma página de confirmação
public function delete($id){
    $usuario = User::findOrFail($id);
    return view('delete_user', ['users' => $usuario]);
}

//apaga as informações depois de confirmar
public function destroy($id){
    $user = User::findOrFail($id);
    $user->delete();
    $users = User::get();
    return view('funcionario',['users' => $users]);
    
}
}
