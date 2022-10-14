<?php

namespace App\Http\Controllers;

use App\Models\Tlicencia;
use Illuminate\Http\Request;

/**
 * Class TlicenciaController
 * @package App\Http\Controllers
 */
class TlicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tlicencias = Tlicencia::paginate();

        return view('tlicencia.index', compact('tlicencias'))
            ->with('i', (request()->input('page', 1) - 1) * $tlicencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tlicencia = new Tlicencia();
        return view('tlicencia.create', compact('tlicencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tlicencia::$rules);

        $tlicencia = Tlicencia::create($request->all());

        return redirect()->route('tlicencias.index')
            ->with('success', 'Tipo Licencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idTL)
    {
        $tlicencia = Tlicencia::find($idTL);

        return view('tlicencia.show', compact('tlicencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idTL)
    {
        $tlicencia = Tlicencia::find($idTL);

        return view('tlicencia.edit', compact('tlicencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tlicencia $tlicencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tlicencia $tlicencia)
    {
        request()->validate(Tlicencia::$rules);

        $tlicencia->update($request->all());

        return redirect()->route('tlicencias.index')
            ->with('success', 'Tipo licencia editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idTL)
    {
        $tlicencia = Tlicencia::find($idTL)->delete();

        return redirect()->route('tlicencias.index')
            ->with('success', 'Tipo licencia eliminado correctamente');
    }
}
