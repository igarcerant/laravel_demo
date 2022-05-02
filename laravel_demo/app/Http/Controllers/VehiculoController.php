<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos=Vehiculo::paginate(5);
        return view('vehiculos.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'codigo'=>'required', 
            'placa'=>'required',
            'propietario'=>'required',
            'marca'=>'required',
            'modelo'=>'required',
            'anio'=>'required',
            'cant_asientos'=>'required'
        ]);

        $input=$request->all();

        $vehiculo=Vehiculo::create($input);
        

        return redirect()->route('vehiculos.index');
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
        $vehiculo=Vehiculo::find($id);
        

        return view('vehiculos.editar',compact('vehiculo'));
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
        
        $this->validate($request,[
            'codigo'=>'required', 
            'placa'=>'required',
            'propietario'=>'required',
            'marca'=>'required',
            'modelo'=>'required',
            'anio'=>'required',
            'cant_asientos'=>'required'
        ]);

        $input=$request->all();
        
        
        $vehiculo=Vehiculo::find($id);
        $vehiculo->update($input);
        
        return redirect()->route('vehiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehiculo::find($id)->delete();
        return redirect()->route('vehiculos.index');
    }

    public function ubicacionVehi($id)
    {
        $vehiculo=VehiculoUbicacion::find($id);
        

        return view('vehiculos.ubicacion',compact('vehiculo'));
    }
}
