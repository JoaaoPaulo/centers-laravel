<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneroModel;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "Acessando o metodo index";
            // $generos = GeneroModel::all();

            // foreach($generos as $g){
            //     echo $g -> idGenero . " ";
            //     echo $g -> genero . "<br/>";
            // }

    }

    public function exibirGeneros()
    {
        $categorias = GeneroModel::all();
        //$generos = GeneroModel::where('idGenero', '>=', 1) -> orderBy('genero', 'asc') -> get();
        //$generos = GeneroModel::where('idGenero', 1) -> get();
        //$generos = GeneroModel::where('idGenero', '>' , 1) -> get();
       // $generos = GeneroModel::where('genero', 'terror') -> get();
        return view('generos', compact('categorias'));
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
        // Rotina de Insercao
        $categorias = new GeneroModel();
        $categorias -> categoria = $request -> txCategoria;

        $categorias -> save();

        return redirect() -> action('App\Http\Controllers\GeneroController@exibirGeneros');
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
        $categorias = GeneroModel::find($id);
        $title = "Editar Categoria - {$categorias -> categoria}";
        return view('generosEditar', compact('title', 'categorias'));
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
        $categorias = GeneroModel::find($id);
        $categorias -> update(['categoria' => $request -> txCategoria]);
        
        return redirect() -> action('App\Http\Controllers\GeneroController@exibirGeneros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias = GeneroModel::where('idCategoria', $id) -> delete();
        
        return redirect() -> action('App\Http\Controllers\GeneroController@exibirGeneros');
    }
}
