<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=convocatoria::paginate();
        return view('admin',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $error = "";
            return view('Admin_create',compact('error'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fecha_inicio = $request->get('fecha_inicio');
        $fecha_fin = $request->get('fecha_fin');

        if($fecha_inicio < $fecha_fin){
           $datosdelaconvocatoria = request()->all(); 
           convocatoria::insert($datosdelaconvocatoria);
           return redirect ('/admin');
        }else{
            $error = "la fecha de inicio debe ser menor a la de fin";
            return view('Admin_create',compact('error'));
        };

        convocatoria::insert($datosdelaconvocatoria);
        return redirect ('/admin');
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
        $datos_editar = convocatoria::find($id);
        return view('admin_edit',compact('datos_editar'));
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
        // dd($request->all());
        $datos = convocatoria::find($id);
        $datos->periodo = $request->get('periodo');
        $datos->fecha_inicio = $request->get('fecha_inicio');   
        $datos->fecha_fin = $request->get('fecha_fin');
        $datos->numero_cupos_almuerzos = $request->get('numero_cupos_almuerzos');
        $datos->numero_cupos_refrigerios = $request->get('numero_cupos_refrigerios');
        $datos->save();

        return redirect ('/admin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Convocatoria::destroy($id);

        return redirect ('/admin');
    }
}
