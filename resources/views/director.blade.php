
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cafeteriaRegister.css">
    <link rel="stylesheet" href="../css/iconos.css">

    <title>Unimag Beneficios</title>
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
                  <div class="col-4 Brand">
                      <a href="">
                        <img src="../img/LogoUnimag.png" alt="">
                        <h1>GRUPO DE ADMISIONES, REGISTRO Y CONTROL ACADÉMICO 
                            <br>
                            <span>UNIMAGDALENA</span>
                        </h1>
                      </a>
                  </div>
                  <nav class="navbar navbar-expand-lg ">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link headerNav" href="#">Inicio</a>
                      <a class="nav-item nav-link headerNav" href="#">Mi universidad</a>
                      <a class="nav-item nav-link headerNav" href="#">Oferta academica</a>
                      <a class="nav-item nav-link headerNav" href="#">Investigacion</a>
                      <a class="nav-item nav-link headerNav" href="#">Extension</a>
                      <a class="nav-item nav-link headerNav" href="#">Internacionalizacion</a>
                      <a  class="icon-buscar"></a>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
         </div>
      </div>
    </header>

  
      
    <div class="container-fluid hero">
      <div class="row hero_row">
        @if($datosBeneficiario ?? '')
        <div class="col-lg-4 offset-lg-4">
            <div class="row text-center">
              <div class="col">
                <h2>
                  {{
                    ucfirst($datosBeneficiario->primer_apellido)." ".ucfirst($datosBeneficiario->segundo_apellido)
                    ." ".ucfirst($datosBeneficiario->primer_nombre)." ".ucfirst($datosBeneficiario->segundo_nombre)
                  }}
                </h2> 
              </div>
            </div>

            <div class="row text-center">
              <div class="col">
                <h2>{{$datosBeneficiario->id_inscrito}}</h2> 
              </div>
            </div>
          <div class="row  text-center">
            <div class="col mt-auto text-danger">
              <h5 >Fallas:</h5><h2 class="mt-auto">{{$datosBeneficiario->falla}}</h2>
            </div>
            <div class="col mt-auto">
              <h5 >Beneficio:</h5>
              <h3 class="mt-auto">
                @if($datosBeneficiario->idBeneficio == 100) 
                  Almuerzo
                @else                    
                  Refrigerio
                @endif  
              </h3>
            </div>
          </div>
          <div class="d-flex justify-content-center align-items-center text-success">
            <div class="pb-1 icon-mail"></div>
            <h4 class="">!Entrega exitosa!</h4> 
          </div>
        </div>
        @endif
        <div class="col-lg-4 offset-lg-4 col-sm-12">
          <form action="/cafeteria" method="POST">
            {{csrf_field()}}
              <div class="row">
                <div class="col-12 form-group">
                  <input type="text" class="form-control loguin_codigo" placeholder="Código" name="codigo" id="codigo" required="">
                </div>
              </div>
              <div class="row">
                  <div class="col-12 boton_contenedor">
                    <button type="submit" class="boton_entrar">Entregar beneficio</button>
                  </div>
                </div>
          </form>
        </div>
      </div>
    </div>

    
    <footer class="container-fluid footer">
        <div class="d-flex justify-content-center contenedor-imagenes m-2">
            <img src="../img/LogoUnimag.png" alt="">
            <img src="../img/2footer.png" alt="">
            <img src="../img/3footer.png" alt="">
            <img src="../img/4footer.png" alt="">
            <img class="imglarga" src="../img/5footer.png" alt="">
        </div>
    </footer>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Registro a convocatoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
      </div>
    </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>