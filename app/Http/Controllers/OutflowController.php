<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outflow;
use Illuminate\Support\Facades\DB;
class OutflowController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $outflow = new Outflow();
        $outflow = $outflow->latest()->paginate(10);
        return view('outflow.index',compact('outflow', $outflow));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outflow.create');
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
            $outflow = DB::table('outflows')
                ->whereDate('created_at', today())
                ->get();
       

        if($outflow == null){
            $outflow = outflow::create([
                'value'=> $request->amount,
            ]);
        }else{
            $outflow = outflow::updated([
                'value'=> $request->amount,
            ]);
        }


            return redirect()->route('outflow.index');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Desculpe, Houve um problema ao cadastrar produto.');
        }
        
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\outflow  $outflow
     * @return \Illuminate\Http\Response
     */
    public function show(outflow $outflow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\outflow  $outflow
     * @return \Illuminate\Http\Response
     */
    public function edit(outflow $outflow)
    {
        return view('outflow.edit')->with('outflow', $outflow);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\outflow  $outflow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outflow $outflow)
    {
        $outflow->value= $request->value;
        $outflow->description= $request->decription;
        if (!$outflow->save()) {
            return redirect()->back()->with('error', 'Desculpe, Aconteceu um problema ao atualizar produto.');
        }
        return redirect()->route('outflow.index')->with('Sucesso', 'Produto foi atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\outflow  $outflow
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,outflow $outflow)
    {
        $outflow->delete($id);
    }
}
