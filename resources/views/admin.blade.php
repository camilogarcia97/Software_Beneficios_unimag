<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/moduloAdministrador.css">
    <link rel="stylesheet" href="../css/iconos.css">

    <title>Modal Admin</title>
  </head>
  <body>
    <header class="cabecera">
      <div class="container-fluid">
        <div class="row toolbar">
            <div class="col-md-7 offset-md-5 col-12 infoToolbar">
              <a class="redes icon-facebook" href=""></a>
              <a class="redes icon-fuego" href=""></a>
              <a class="redes icon-instagram" href=""></a>
              <a class="redes icon-mail" href=""></a>
              <a href="">Aspirante</a>
              <a href="">Estudiante</a>
              <a href="">Docente</a>
              <a href="">Egresado</a>
              <a href="">Funcionario</a>
              <a href="">Ciudadano</a>
              <a href="">Mapa de sitio</a>
            </div>
        </div>
      </div>
      
      <div class="container-fluid">
          <div class="row navbarBg">
            <div class="col-10 offset-1">
              <div class="row">
                  <div class="col-6 col-lg-4 Brand">
                      <a href="">
                        <img src="../img/LogoUnimag.png" alt="">
                        <h1>GRUPO DE ADMISIONES, REGISTRO Y CONTROL ACADÉMICO 
                            <br>
                            <span>UNIMAGDALENA</span>
                        </h1>
                      </a>
                  </div>
                  <nav class="navbar navbar-expand-lg ">
                  <button class="navbar-toggler btn-primary " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon ">...</span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link headerNav" href="#">Inicio</a>
                      <a class="nav-item nav-link headerNav" href="#">Mi universidad</a>
                      <a class="nav-item nav-link headerNav" href="#">Oferta academica</a>
                      <a class="nav-item nav-link headerNav" href="#">Investigacion</a>
                      <a class="nav-item nav-link headerNav" href="#">Extension</a>
                      <a class="nav-item nav-link headerNav" href="#"" >Internacionalizacion</a>
                      <a  class="icon-buscar"></a>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
         </div>
      </div>
    </header>
    
    <div class="container">
      <div class="row ">
        <div class="col d-flex justify-content-center m-2">
          <a href="/admin/create" class="btn btn-primary">Crear convocatoria</a>
        </div>
        
        <div class="col d-flex justify-content-center m-2">
          <form action="/listaBeneficiarios" method="POST">
           <button type="submit" class="btn btn-primary ">Sortear beneficios</button>
         </form>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col overflow-auto">
          <table class="table table-striped">
            <thead>
              <tr class="text-center">
               <!--  <th scope="col">id_administrador</th> -->
                <th scope="col">perido</th>
                <th scope="col">fecha inicio</th>
                <th scope="col">fecha cierre</th>
                <th scope="col">cupo almuerzos</th>
                <th scope="col">cupo refrigerio</th>
                <th scope="col">id_convocatoria</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datos as $eso)
              <tr>
                <!-- <th>{{$eso->id_Administrador}}</th> -->
                <td>{{$eso->periodo}}</td>
                <td>{{$eso->fecha_inicio}}</td>
                <td>{{$eso->fecha_fin}}</td>
                <td>{{$eso->numero_cupos_almuerzos}}</td>
                <td>{{$eso->numero_cupos_refrigerios}}</td>
                <td>{{$eso->id}}</td>
                <td> <a  class="btn btn-primary" href="/admin/{{$eso->id}}/edit"> Editar </a> / <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                Eliminar
                </button> </td>
                <!-- Modal -->
                <form action="/admin/{{$eso->id}}" method="POST">
                @method('DELETE')
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ¿Esta seguro que quiere eliminar la convocatoria?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"  href="/admin">Cancelar</button>
                        <input value="Eliminar" class="btn btn-danger m-2 " type="submit" >
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
    
    <footer class="container-fluid footer">
        <div class="col-lg-10 offset-lg-1 contenedor-imagenes">
            <img src="../img/LogoUnimag.png" alt="">
            <img src="../img/2footer.png" alt="">
            <img src="../img/3footer.png" alt="">
            <img src="../img/4footer.png" alt="">
            <img class="imglarga" src="../img/5footer.png" alt="">    
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

 
</html>