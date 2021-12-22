<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutosModel;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function exibirProdutos()
    {
        $produtos = ProdutosModel::all();
        //$generos = GeneroModel::where('idGenero', '>=', 1) -> orderBy('genero', 'asc') -> get();
        //$generos = GeneroModel::where('idGenero', 1) -> get();
        //$generos = GeneroModel::where('idGenero', '>' , 1) -> get();
       // $generos = GeneroModel::where('genero', 'terror') -> get();
        return view('produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = new ProdutosModel();
        $produtos -> titPro = $request -> txTitProd;
        $produtos -> idCategoria = $request -> txIdCategoria;
        $produtos -> descrPro = $request -> txDescPro;
        $produtos -> valorPro = $request -> txValor;

        $produtos -> save();

        return redirect() -> action('App\Http\Controllers\ProdutosController@exibirProdutos');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $categorias = ProdutosModel::where('idProd', $id) -> delete();
        
        return redirect() -> action('App\Http\Controllers\ProdutosController@exibirProdutos');

    }
}
