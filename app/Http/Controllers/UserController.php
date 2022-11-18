<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function cadastroUser(){
        return view('users');
    }
    public function cadastrarUser(Request $request){

        $nome = $request->nome;
        $email1 = $request->email1;
        $email2 = $request->email2;
        $senha1 = $request->password1; 
        $senha2 = $request->password2;
        $permissao = $request->permissao;

if($request != null){
        if(($request->nome == null) or ($request->email1 == null) or ($request->email2 == null) or ($request->password1 == null) or ($request->password2 == null) or ($request->permissao == null)){
            //se algum dos campos tiver em branco, tratar o erro
            echo "campos vazios";
        }else{
            //caso nenhum campo esteja em branco
            if($email1 == $email2){
                //emails iguais
                if($senha1 == $senha2){
                    User::create([
                        'name'=>$request->nome,
                        'email'=>$request->email1,
                        'password'=>$request->password1,
                        'permissao'=>$request->permissao,
                    ]);
                    echo "cadastrado com sucesso";
                }else{
                    echo "erro: senhas não iguais";
                    //senhas não são iguais
                }
            }else{
                echo "erro: emails não iguais";
                //emails não estão iguais
                return view('users');
            }
        }
    }
}
}
