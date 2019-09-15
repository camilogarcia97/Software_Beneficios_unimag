<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscrito;
use App\Beneficiario;
use App\Convocatoria;
class BeneficiarioController extends Controller
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
                //id almuerzo 200
        $cantidadCuposAlmuerzo = Convocatoria::select('numero_cupos_almuerzos')->get();
        //id almuerzo 100
        $cantidadCuposRefrigerio = Convocatoria::select('numero_cupos_refrigerios')->get();

       $sorteoBeneficiariosAlmuerzo = Inscrito::select('id_codigoEstudiante')
                             ->where('id_beneficio','200')
                             ->inRandomOrder()
                             ->limit($cantidadCuposAlmuerzo[0]->numero_cupos_almuerzos)
                             ->get();

       $sorteoBeneficiariosRefrijerio = Inscrito::select('id_codigoEstudiante')
                             ->where('id_beneficio','100')
                             ->inRandomOrder()
                             ->limit($cantidadCuposRefrigerio[0]->numero_cupos_refrigerios)
                             ->get();

        
        // return $sorteoBeneficiariosAlmuerzo."-------------".$sorteoBeneficiariosRefrijerio; 
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
