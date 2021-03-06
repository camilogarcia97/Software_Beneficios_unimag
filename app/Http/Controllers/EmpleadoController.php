<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Beneficiario;
use Carbon\Carbon;
use App\Beneficio;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cafeteriaRegister');
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
        $now = Carbon::now();
        $horaActual = $now->format('H');
        $fechaActual = $now->format('y-m-d');

       $codigo=$request->get('codigo');
        $datosBeneficiario = Beneficiario::where('id_inscrito',$codigo)
                                            ->join('estudiantes','id','=','id_inscrito')
                                            ->join('fallas','id_beneficiario','=','id_inscrito')
                                            ->first();

         $beneficioReclamado = Beneficio::where('id_estudiante',$codigo)->first();

        
            if($datosBeneficiario->id_beneficio == 100 && ($horaActual >= 11 && $horaActual <= 2) && $datosBeneficiario->falla < 3){
                
                $reclamado = new Beneficio();
                $reclamado->id_estudiante = $datosBeneficiario->id_inscrito;
                $reclamado->reclamado = 1;
                
                if($beneficioReclamado!=null && $fechaActual==$beneficioReclamado->created_at->format('y-m-d')){
                    $entregar = false;
                }else{
                    $entregar = true;
                    $reclamado->save();
                }
            }elseif($datosBeneficiario->id_beneficio == 200 && $datosBeneficiario->falla < 3){

                $reclamado = new Beneficio();
                $reclamado->id_estudiante = $datosBeneficiario->id_inscrito;
                $reclamado->reclamado = 1;

                if($beneficioReclamado!=null && $fechaActual==$beneficioReclamado->created_at->format('y-m-d')){
                    $entregar = false;
                }else{
                    $entregar = true;
                    $reclamado->save();
                }
            }else{
                $entregar = false;
            }
        
        return view('cafeteriaRegister',compact('datosBeneficiario','entregar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
