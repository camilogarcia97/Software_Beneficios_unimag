
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
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

    <div class="container">
      @if($convacatoria)
      <div class="row primer_boton">
        <div class="col-12 d-flex justify-content-center ">
          <button data-toggle="modal" data-target="#exampleModalCenter" class="col-8 col-md-4 boton_registrarse">Registrarte en la convocatoria</button>
        </div>
      </div>
      <div class="row segundo_boton">
        <div class="col-12 d-flex justify-content-center">
          <a href="/listaBeneficiarios" class="link_ver">Ver lista de seleccionados</a>
        </div>
      </div>
      @else
      <div class="m-5"></div>
      @endif
    </div>
      
    <div class="container-fluid hero">
      <div class="row hero_row">
        <div class="col-lg-4 offset-lg-4 col-sm-12">
          <form action="/Login" method="POST">
            {{csrf_field()}}
            <div class="container loguin_recuadro">
              <div class="row titulo">
                <div class="col-12 loguin_titulo">
                  <p>LOGIN</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12 form-group">
                  <input type="text" class="form-control loguin_codigo" placeholder="Código" name="codigoLogin" required="">
                  <input type="password" class="form-control loguin_contraseña" placeholder="Contraseña" name="contraseñaLogin" required>
                </div>
              </div>
              <div class="row">
                  <div class="col-12 boton_contenedor">
                    <button type="submit" class="boton_entrar">Entrar</button>
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid seccion2">
      <div class="row ">
        <div class="col-md-8 offset-md-2 seccion2_fila col-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ayuda
              con el ingreso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Trámites y servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Normatividad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Información del registro académico</a>

            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <ul class="list-group">
                <li class="list-group-item"><a href="">Si no recuerdas tu código estudiantil ingresa AQUI</a></li>
                <li class="list-group-item"><a href="">¿Ha olvidado la contraseña?</a></li>
              </ul>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <ul class="list-group">
                <li class="list-group-item"><a href="">Cancelación de
                    semestre web </a></li>
                <li class="list-group-item"><a href="">Solicitud de reembolso</a></li>
                <li class="list-group-item"><a href="">Actualizacion de datos</a></li>
                <li class="list-group-item"><a href="">Descuento por hermanos</a></li>
                <li class="list-group-item"><a href="">Ver todos los trámites y servicios</a></li>
              </ul>
            </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <ul class="list-group">
              <li class="list-group-item"><a href="">Reglamento estudiantil</a></li>
              <li class="list-group-item"><a href="">Planes de estudios Pregrado Presencial</a></li>
              <li class="list-group-item"><a href="">Planes de estudios Postgrados</a></li>
              <li class="list-group-item"><a href="">Planes de estudios Distancia</a></li>
              <li class="list-group-item"><a href="">Exoneraciones</a></li>
              <li class="list-group-item"><a href="" target="_blank">Estudiantesde práctica y grado</a></li>
            </ul>
          </div>
          <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
            <ul class="list-group">
              <li class="list-group-item">20 login diarios máximos.</li>
              <li class="list-group-item">5 cambios de horario al día.</li>
              <li class="list-group-item">5 cambios durante todo el proceso.</li>
              <li class="list-group-item">Además durante fechas de ajuste al registro académico podrá realizar 2 cambios más.</li>
            </ul>
          </div>
          </div>
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

        <form action="/ayudantias" method="POST">
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <input type="number" class="form-control loguin_codigo" placeholder="Código" id="codigo" name="codigo" required="*">
                </div>
              </div>
            </div>

            <div class="container">
            <div class="row">
              <div class="col-12">
                <h6>Beneficio</h6>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-12 beneficios_check">
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" name="beneficio" class="custom-control-input" value="100" checked>
                  <label class="custom-control-label" for="customRadio1" >Almuerzo</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="beneficio" class="custom-control-input" value="200">
                    <label class="custom-control-label" for="customRadio2">Refrigerio</label>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="form-group col-12">
                  <label for="inputState">Sedes</label>
                  <select id="inputState" class="form-control" name="sede">
                    <option value="1" >Sede Principal</option>
                    <option value="2">Sede Centro</option>
                  </select>
                </div>
                <h6>Seleccione los dias que quiere recibir el beneficio</h6>
                <div class="row">
                  <div class="col-12">
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                      <input type="checkbox" class="custom-control-input" id="Lunes" name="horario[]" value="Lunes" checked>
                      <label class="custom-control-label" for="Lunes">Lunes</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                      <input type="checkbox" class="custom-control-input" id="Martes" name="horario[]" value="Martes">
                      <label class="custom-control-label" for="Martes">Martes</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                      <input type="checkbox" class="custom-control-input" id="Miercoles" name="horario[]" value="Miercoles" checked>
                      <label class="custom-control-label" for="Miercoles">Miercoles</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                      <input type="checkbox" class="custom-control-input" id="Jueves" name="horario[]" value="Jueves">
                      <label class="custom-control-label" for="Jueves">Jueves</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                      <input type="checkbox" class="custom-control-input" id="Viernes" name="horario[]" value="Viernes" checked>
                      <label class="custom-control-label" for="Viernes">Viernes</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn cerrar" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn enviar">Enviar</button>
        </div>
        </form>
        
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