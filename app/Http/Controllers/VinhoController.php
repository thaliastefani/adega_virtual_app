<?php

namespace App\Http\Controllers;

use App\Models\Vinho;
use Illuminate\Http\Request;

class VinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vinho::latest()->paginate(5);

        return view('vinhos.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = \App\Models\Pais::all();
        $tipo_uvas = \App\Models\TipoUva::all();
        $vinicolas = \App\Models\Vinicola::all();
        return view('vinhos.create', compact('paises', 'tipo_uvas', 'vinicolas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vinho::create($request->all());

        return redirect()->route('vinhos.index')
                        ->with('success','Vinho criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vinho  $vinho
     * @return \Illuminate\Http\Response
     */
    public function show(Vinho $vinho)
    {
        return view('vinhos.show',compact('vinho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vinho  $vinho
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinho $vinho)
    {
        $paises = \App\Models\Pais::all();
        $tipo_uvas = \App\Models\TipoUva::all();
        $vinicolas = \App\Models\Vinicola::all();
        return view('vinhos.edit',compact('vinho', 'paises', 'tipo_uvas', 'vinicolas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vinho  $vinho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vinho $vinho)
    {

        $vinho->update($request->all());

        return redirect()->route('vinhos.index')
                        ->with('success','Vinho foi atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vinho  $vinho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinho $vinho)
    {
        $vinho->delete();

        return redirect()->route('vinhos.index')
                        ->with('success','Vinho deletado com sucesso.');
    }
}
