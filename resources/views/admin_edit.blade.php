

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Administrador</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <form action="/admin/{{$datos_editar->id}}" method="POST">
            @method('put')
            <input class="form-control" type="date" name="fecha_inicio" id="fecha_inicio" value="{{$datos_editar->fecha_inicio}}">

            <input class="form-control" type="date" name="  fecha_fin" id=" fecha_fin" value="{{$datos_editar->fecha_fin}}">
            
            <input class="form-control" type="text" name="numero_cupos_almuerzos" id="numero_cupos_almuerzos" placeholder="almuerzos" value="{{$datos_editar->numero_cupos_almuerzos}}">

            <input class="form-control" type="text" name="numero_cupos_refrigerios" id="numero_cupos_refrigerios" placeholder="registro" value="{{$datos_editar->numero_cupos_refrigerios}}">
          
            <input class="form-control" type="text" name="id_Administrador" id="id_Administrador" placeholder="id_Administrador" value="{{$datos_editar->id_Administrador}}">
          
            <input class="form-control" type="text" name="periodo" id="periodo" placeholder="periodo" value="{{$datos_editar->periodo}}">
          
            <input value="{{$datos_editar->id}}" placeholder="Editar" class="btn btn-primary" type="submit" >
          </form>
        </div>
      </div>
    </div>
