<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Categoria;
use App\Models\Departamento;
use App\Models\Empleado;
use Illuminate\Http\Request;

/**
 * Class FormularioController
 * @package App\Http\Controllers
 */
class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formularios = Formulario::paginate();

        return view('formulario.index', compact('formularios'))
            ->with('i', (request()->input('page', 1) - 1) * $formularios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formulario = new Formulario();
        $categorias = Categoria::pluck('nombre','id');
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $empleados = Empleado::pluck('Cedula','idEmpleados');
        return view('formulario.create', compact('formulario','categorias','departamento','empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Formulario::$rules);

        $formulario = Formulario::create($request->all());

        return redirect()->route('formularios.index')
            ->with('success', 'Solicitud enviada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulario = Formulario::find($id);

        return view('formulario.show', compact('formulario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulario = Formulario::find($id);
        $categorias = Categoria::pluck('nombre','id');
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $empleados = Empleado::pluck('Cedula','idEmpleados');
        return view('formulario.edit', compact('formulario','categorias','departamento','empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Formulario $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        request()->validate(Formulario::$rules);

        $formulario->update($request->all());

        return redirect()->route('formularios.index')
            ->with('success', 'Formulario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formulario = Formulario::find($id)->delete();

        return redirect()->route('formularios.index')
            ->with('success', 'Formulario deleted successfully');
    }
}



