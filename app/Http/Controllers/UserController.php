<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //chama página de cadastro
    public function index()
    {
        return view('user_register');
    }

    public function create(Request $request)
    {

    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',],
            [
                'email.required'=>'E-mail é obrigatório',
                'password.required'=>'Senha é obrigatória'
            ]);

            if (Auth::attemp(['email'=>$request->email, 'password'=>$request->password])) {
                return redirect('/home');
            }else{
                return redirect()->back()-with('danger','E-mail ou senha inválidos');
            }
    }

    //cadastra usuário no banco
    public function store(Request $request)
    {

                    if($request->password1 == $request->password2){
                        $hash_senha = bcrypt($request->password1);
                        User::create([
                            'name'=>$request->name,
                            'email'=>$request->email,
                            'password'=>$hash_senha,
                            'phone'=>$request->telefone,
                            'profile'=>$request->permissao,
                        ]);
                        return redirect('/user_list');
                    }else{
                        return redirect('/404');
                    }
    }


    public function show()
    {
        $usuarios = User::get();
        return view('user_list',['usuarios' => $usuarios]);
        /* return $usuarios; */
    }

    //envia informações para alterar
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user_change',['user' => $user]);
    }

    //altera informações no banco
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

    if($request->password1 == null){

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->telefone,
            'profile'=>$request->permissao,
        ]);
        $users = User::get();
        return redirect('/user_list');

    }elseif(($request->password1 != null) && ($request->password1 == $request->password2)){

        $hash_senha = bcrypt($request->password1);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$hash_senha,
            'phone'=>$request->telefone,
            'profile'=>$request->permissao,
        ]);

        return redirect('/user_list');

    }else{
        return redirect('/404');
    }
    }


    //redireciona para a página de confirmação
     public function delete($id){
        $item = User::findOrFail($id);
        return view('user_delete', ['item' => $item]);
    }
    //apaga do banco a informação
    public function destroy($id){
        dd($id);
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user_list');

    }
}
