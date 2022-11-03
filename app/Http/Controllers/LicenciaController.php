<?php

namespace App\Http\Controllers;

use App\Models\Tlicencia;
use App\Models\Licencia;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

/**
 * Class LicenciaController
 * @package App\Http\Controllers
 */
class LicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licencias = Licencia::paginate();

        return view('licencia.index', compact('licencias'))
            ->with('i', (request()->input('page', 1) - 1) * $licencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $licencia = new Licencia();
        $tlicencias = Tlicencia::pluck('nombreTL','idTL'); 
        return view('licencia.create', compact('licencia','tlicencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  request()->validate(Licencia::$rules);

      //  $licencia = Licencia::create($request->all());

      $licencia  = request()->except('_token');
       
      if($request->hasFile('FotoLicencia')){
         $licencia['FotoLicencia']=$request->file('FotoLicencia')->store('uploads','public');
         
      } 
     
       Licencia::insert($licencia);


        return redirect()->route('licencias.index')
            ->with('success', 'Licencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $licencia = Licencia::find($id);

        return view('licencia.show', compact('licencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $licencia = Licencia::find($id);
        $tlicencias = Tlicencia::pluck('nombreTL','idTL'); 
        return view('licencia.edit', compact('licencia','tlicencias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Licencia $licencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     $licencia  = request()->except(['_token','_method']);
       
     if($request->hasFile('FotoLicencia')){
        $licencia=Licencia::findOrFail($id);
        Storage::delete('public/'.$licencia->FotoLicencia);
        $licencia['FotoLicencia']=$request->file('FotoLicencia')->store('uploads','public');
        
     }
     Licencia::where('idLicencia','=',$id)->update($licencia);
     $licencia=Licencia::findOrFail($id);
        return redirect()->route('licencias.index')
            ->with('success', 'Licencia editada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $licencia = Licencia::find($id)->delete();

        return redirect()->route('licencias.index')
            ->with('success', 'Licencia eliminada correctamente');
    }
}
