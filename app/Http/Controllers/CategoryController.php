<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {

            $category = Category::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Desculpe\' houve um problema ao cadastrar usuário.");
        }

        if (!$category) {
            return redirect()->back()->with('error', 'Desculpe\' houve um problema ao cadastrar usuário.');
        }
        return redirect()->route('categories.index')->with('success', 'Sucesso, usuário criado com sucesso.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Category $category)
    {
        if ($category->id == $id) {
            $category->name = $request->name;
            $category->description = $request->description;
        }
        

        if (!$category->save()) {
            return redirect()->back()->with('error', 'Desculpe\' houve um problema ao atualizar informações.');
        }
        return redirect()->route('categories.index')->with('success', 'Sucesso, informações foram atualizadas.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Category $category)
    {
        if ($category->id == $id) {
            if (!$category->delete()) {
                return redirect()->back()->with('error', 'Desculpe, Aconteceu um problema ao deletar produto.');
               }else{
                    return redirect()->route('customers.index')->with('Sucesso', 'Produto foi deletado com sucesso.');
               }
        }
       
    }
}
