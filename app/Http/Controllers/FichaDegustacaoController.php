<?php

namespace App\Http\Controllers;

use App\Models\FichaDegustacao;
use Illuminate\Http\Request;
use Auth;
use App\User;

class FichaDegustacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FichaDegustacao::latest()->paginate(5);

        return view('ficha_degustacoes.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vinhos = \App\Models\Vinho::all();
        $niveis = \App\Models\Nivel::all();
        return view('ficha_degustacoes.create', compact('vinhos', 'niveis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ficha_degustacao = new FichaDegustacao();
        $ficha_degustacao->create([$request->all(), 'user_id' => Auth::user()->id]);

        return redirect()->route('ficha_degustacoes.index')
                        ->with('success','Ficha de Degustação criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FichaDegustacao  $ficha_degustacao
     * @return \Illuminate\Http\Response
     */
    public function show(FichaDegustacao $ficha_degustação)
    {
        return view('ficha_degustacoes.show',compact('ficha_degustacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FichaDegustacao  $ficha_degustacao
     * @return \Illuminate\Http\Response
     */
    public function edit(FichaDegustacao $ficha_degustacao)
    {

        return view('ficha_degustacoes.edit',compact('ficha_degustacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FichaDegustacao  $ficha_degustacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FichaDegustacao $ficha_degustacao)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        // ]);

        $ficha_degustacao->update($request->all());

        return redirect()->route('ficha_degustacoes.index')
                        ->with('success','Ficha de Degustação atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FichaDegustacao  $ficha_degustacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(FichaDegustacao $ficha_degustacao)
    {
        $ficha_degustacao->delete();

        return redirect()->route('ficha_degustacoes.index')
                        ->with('success','Ficha de Degustação deletado com sucesso.');
    }
}
