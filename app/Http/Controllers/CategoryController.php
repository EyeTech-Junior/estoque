<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //exibe a página de resgistro
       public function index()
    {
        return view('category_register');
    }

 
    public function create()
    {
        //
    }

    //cria categoria no banco
    public function store(Request $request)
    {
        if($request!=null){
            Category::create([
                'name'=>$request->name,
            ]);
            return redirect('/category_list');
        }else{
            return redirect('/404');
        }
    }

    //exibe lista de categorias
    public function show()
    {
        $categorias = Category::get();
        return view('category_list',['categorias' => $categorias]);
    }

   //leva informações para serem editadas
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category_change',['category' => $category]);
    }

    //atualiza as informações
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if($request != null){
            $category->update([
                'name'=> $request->name,
                ]);
                $categorias = Category::get();
                return view('category_list',['categorias' => $categorias]);
    
        }else{
            return view('/404');
        }
    }
    //confirmação de exclusão
    public function delete($id){
        $item = Category::findOrFail($id);
        return view('category_delete', ['item' => $item]);
    }   
    //apagas as informações
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/category_list');
    }
}
