<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beneficiario;
use App\Empleado;
use App\Horario;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Beneficiario::select()->join('estudiantes','id','=','id_inscrito')
                                     ->join('fallas','id_beneficiario','=','id_inscrito')
                                     ->join('inscritos','id_codigoEstudiante','=','id_inscrito')->paginate();

        $empleados=Empleado::select()->paginate();

        $Lunes=Horario::where('dia_semana','=','Lunes')->count();
        $Martes=Horario::where('dia_semana','=','Martes')->count();
        $Miercoles=Horario::where('dia_semana','=','Miercoles')->count();
        $Jueves=Horario::where('dia_semana','=','Jueves')->count();
        $Viernes=Horario::where('dia_semana','=','Viernes')->count();

        $sede1Almuerzo=Beneficiario::where('sede','=','1')
                                      ->where('id_beneficio','=','100')
                                      ->count();
        $sede1Refrigerio=Beneficiario::where('sede','=','1')
                                    ->where('id_beneficio','=','200')
                                    ->count();
        // -------------------------------------------------------------------
        $sede2Almuerzo=Beneficiario::where('sede','=','2')
                                      ->where('id_beneficio','=','100')
                                      ->count();
        $sede2Refrigerio=Beneficiario::where('sede','=','2')
                                    ->where('id_beneficio','=','200')
                                    ->count();
        // dd($sede1Almuerzo);
        return view('director',compact('datos','empleados','Lunes','Martes','Miercoles','Jueves','Viernes','sede1Almuerzo','sede1Refrigerio','sede2Almuerzo','sede2Refrigerio'));
        
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
        //
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
        //
    }
}
