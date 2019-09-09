<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Inscrito;

class EstudianteController extends Controller
{   
     /**
     * vericar codigo.
     *
     * @return \Illuminate\Http\Response
     */
    public function verificar(Request $request)
    {
        
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
        $estudiante=estudiante::where('codigoEstudiante',$codigo_a_verificar)->get();
                    // estudiante::where('codigoEstudiante', '1234')->first();

        if(Inscrito::where('id_codigoEstudiante',$codigo_a_verificar)->exists() == true){//si ya se registro
            echo "ya esta registrado";

        }else  if(estudiante::where('codigoEstudiante',$codigo_a_verificar)->exists() == true){//si es estudiante

                $estrato = $estudiante->first()->estrato;
                $sancion = $estudiante->first()->estado_sancion;

                if($estrato < 3 && $sancion == false){
                    $inscrito = new Inscrito();
                    $inscrito->id_codigoEstudiante = $request->get('codigo');
                    $inscrito->id_convocatoria = 2019;
                    $inscrito->id_beneficio = $request->get('beneficio');
                    $inscrito->save();
                }else{

                  echo "no cumple las condiciones para ser inscrito :(";

                }
        }else{

            echo "no cumple las condiciones para ser inscrito :(";

        }
        return redirect('/estudiantes'); //redireccionar o mostrar que si se agrego o no

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
