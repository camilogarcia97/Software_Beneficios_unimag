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
            <div class="col-7 offset-5 infoToolbar">
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
                  <nav class="navbar navbar-expand-lg col-sm-offset-6">
                  <button class="navbar-toggler btn-primary" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">...</span>
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
@if($error == '')
    <div class="container ">
      <div class="row">
        <div class="col-md-4 offset-md-1 ">
          <h1>Administrador</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-1 border border-ligth rounded ">
          <form action="/admin" method="POST">
            <input class="form-control m-1 " type="date" name="fecha_inicio" id="fecha_inicio" required>
            <input class="form-control m-1 " type="date" name="fecha_fin" id=" fecha_fin" required>
            <input class="form-control m-1 " type="text" name="numero_cupos_almuerzos" id="numero_cupos_almuerzos" placeholder="almuerzos" required>
            <input class="form-control m-1 " type="text" name="numero_cupos_refrigerios" id="numero_cupos_refrigerios" placeholder="refrigerios" required>
          
            <!-- <input class="form-control m-1 " type="text" name="id_Administrador" id="id_Administrador" placeholder="id_Administrador"> -->
          
            <input class="form-control m-1 " type="text" name="periodo" id="periodo" placeholder="periodo" required>
          
            <input class="form-control m-1 " type="text" name="id" id="id" placeholder="idConvocatoria" required>
          
            <input value="Crear" class="btn btn-primary m-2 " type="submit" >
          </form>
        </div>
      </div>
    </div>
@else
<div class="container mt-5">
<div class="alert alert-danger" role="alert">
{{$error}}
</div>
<a class="btn btn-primary" href="/admin/create" role="button">Reintentar</a>
</div>


@endif

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