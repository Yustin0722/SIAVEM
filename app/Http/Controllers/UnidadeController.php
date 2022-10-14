<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class UnidadeController
 * @package App\Http\Controllers
 */
class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidade::paginate();

        return view('unidade.index', compact('unidades'))
            ->with('i', (request()->input('page', 1) - 1) * $unidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidade = new Unidade();
        $categorias = Categoria::pluck('nombre','id'); 
        return view('unidade.create', compact('unidade','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Unidade::$rules);

        $unidade = Unidade::create($request->all());

        return redirect()->route('unidades.index')
            ->with('success', 'Unidad creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $idUnidad
     * @return \Illuminate\Http\Response
     */
    public function show($idUnidad)
    {
        $unidade = Unidade::find($idUnidad);

        return view('unidade.show', compact('unidade'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $idUnidad
     * @return \Illuminate\Http\Response
     */
    public function edit($idUnidad)
    {
        $unidade = Unidade::find($idUnidad);
        $categorias = Categoria::pluck('nombre','id'); 
        return view('unidade.edit', compact('unidade','categorias'));
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Unidade $unidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidade $unidade)
    {
        request()->validate(Unidade::$rules);

        $unidade->update($request->all());

        return redirect()->route('unidades.index')
            ->with('success', 'Unidad editada correctamente');
    }

    /**
     * @param int $idUnidad
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idUnidad)
    {
        $unidades = Unidade::find($idUnidad)->delete();

        return redirect()->route('unidades.index')
            ->with('success', 'Unidad eliminada correctamente');
    }
}
