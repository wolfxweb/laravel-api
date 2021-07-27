<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $produto = Produto::all();
       return $produto;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         /* NÃO UTLIZADO QUANDO CRIAMOS API POIS ESTA  FUNÇÃO TEM O OBJETIVO DE RETORNAR UM HTML*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $produto = Produto::create($request->all());
        return $produto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(produto $produto)
    {
        dd('show');
        if($produto === null){
            return ['msg'=> 'produto não encontrado!'];

        }
        //    return $produto;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        /* NÃO UTLIZADO QUANDO CRIAMOS API POIS ESTA  FUNÇÃO TEM O OBJETIVO DE RETORNAR UM HTML*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produto $produto)
    {


        
        $produto->update($request->all());
        return $produto;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto)
    {
      //  dd($produto->getAttributes());

        $produto->delete();
        return ['msg' =>" produto foi removido com sucesso!"];
    }
}
