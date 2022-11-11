<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use App\Models\Tlicencia;
use Illuminate\Http\Request;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate();

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleado = new Empleado();
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $tlicencias = Tlicencia::pluck('nombreTL','idTL'); 
        return view('empleado.create', compact('empleado','departamento','tlicencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $empleado  = request()->except('_token');
        if($request->hasFile('FotoLicencia')){
            $empleado ['FotoLicencia']=$request->file('FotoLicencia')->store('imagen','public');
            
         } 
        Empleado::insert($empleado);

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $departamento = Departamento::pluck('nombreDepa','idDepartamento');
        $tlicencias = Tlicencia::pluck('nombreTL','idTL');
        return view('empleado.edit', compact('empleado','departamento','tlicencias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       // request()->validate(Empleado::$rules);
       $empleado = request()->except(['_token','_method']);
       if($request->hasFile('FotoLicencia')){
        $empleado =Empleado::findOrFail($id);
       // Storage::delete('public/'.$licencia->FotoLicencia);
       $empleado['FotoLicencia']=$request->file('FotoLicencia')->store('imagen','public');
        
     }
     Empleado::where('idEmpleado','=',$id)->update($empleado);
     $empleado=Empleado::findOrFail($id);
       $empleado->update($request->all());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id)->delete();

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado deleted successfully');
    }
}