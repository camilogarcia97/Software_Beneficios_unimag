<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscrito;
use App\Beneficiario;
use App\Convocatoria;
use App\Falla;
class BeneficiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Beneficiario::paginate();
        return view('listaBeneficiarios',compact('datos'));
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

       $sorteoBeneficiariosAlmuerzo = Inscrito::select('id_codigoEstudiante','id_beneficio','sede')
                             ->where('id_beneficio','200')
                             ->inRandomOrder()
                             ->limit($cantidadCuposAlmuerzo[0]->numero_cupos_almuerzos)
                             ->get();

       $sorteoBeneficiariosRefrijerio = Inscrito::select('id_codigoEstudiante','id_beneficio','sede')
                             ->where('id_beneficio','100')
                             ->inRandomOrder()
                             ->limit($cantidadCuposRefrigerio[0]->numero_cupos_refrigerios)
                             ->get();

        for ($i=0; $i < count($sorteoBeneficiariosAlmuerzo); $i++) { 
            $beneficiario = new Beneficiario();
            $beneficiario->id_inscrito = $sorteoBeneficiariosAlmuerzo[$i]->id_codigoEstudiante;
            $beneficiario->sede = $sorteoBeneficiariosAlmuerzo[$i]->sede;
            $beneficiario->id_beneficio = $sorteoBeneficiariosAlmuerzo[$i]->id_beneficio;
            $beneficiario->save();

            $inscritofallas = new Falla();
            $inscritofallas->id_beneficiario = $sorteoBeneficiariosAlmuerzo[$i]->id_codigoEstudiante;
            $inscritofallas->falla = 0; 
            $inscritofallas->save();
        }

        for ($i=0; $i < count($sorteoBeneficiariosRefrijerio); $i++) { 
            $beneficiario = new Beneficiario();
            $beneficiario->id_inscrito = $sorteoBeneficiariosRefrijerio[$i]->id_codigoEstudiante;
            $beneficiario->sede = $sorteoBeneficiariosRefrijerio[$i]->sede;
            $beneficiario->id_beneficio = $sorteoBeneficiariosRefrijerio[$i]->id_beneficio;
            $beneficiario->save();

            $inscritofallas = new Falla();
            $inscritofallas->id_beneficiario=$sorteoBeneficiariosRefrijerio[$i]->id_codigoEstudiante;
            $inscritofallas->falla = 0; 
            $inscritofallas->save();
        }
        
        // return $sorteoBeneficiariosAlmuerzo."-------------".$sorteoBeneficiariosRefrijerio; 
        return redirect ('/listaBeneficiarios');
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
