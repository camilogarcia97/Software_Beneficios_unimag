<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Inscrito;
use App\Horario;
use App\Convocatoria;

class EstudianteController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Convocatoria::count() >= 1){
            $convacatoria = true;
        }else{
            $convacatoria = false;
        }
        return view('index',compact('convacatoria'));
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
        $codigo_a_verificar = $request->get('codigo');
        $beneficio_elegido = $request->get('beneficio');
        $horarioSeleccionado = $request->get('horario');
        $estudiante=estudiante::where('id',$codigo_a_verificar)->get();
                    // estudiante::where('codigoEstudiante', '1234')->first();

        if(Inscrito::where('id_codigoEstudiante',$codigo_a_verificar)->exists() == true){//si ya se registro
            echo "ya esta registrado";

        }else  if(estudiante::where('id',$codigo_a_verificar)->exists() == true){//si es estudiante

                $estrato = $estudiante->first()->estrato;
                $sancion = $estudiante->first()->estado_sancion;
                $beneficio = $estudiante->first()->beneficio;

                if($estrato <= 2 && $sancion == false && $beneficio == false){
                    $inscrito = new Inscrito();
                    $inscrito->id_codigoEstudiante = $request->get('codigo');
                    $inscrito->id_convocatoria = 2019;
                    $inscrito->id_beneficio = $request->get('beneficio');
                    $inscrito->save();

                    for ($i = 0; $i < count($horarioSeleccionado); $i++) {
                        $horario = new Horario();
                        $horario->estudiante_id = 2019; 
                        $horario->dia_semana = $horarioSeleccionado[$i];
                        $horario->save();
                    }

                }else{

                  echo "no cumple las condiciones para ser inscrito :(";

                }
        }else{

            echo "no cumple las condiciones para ser inscrito :(";

        }
        return redirect('/ayudantias'); //redireccionar o mostrar que si se agrego o no

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
