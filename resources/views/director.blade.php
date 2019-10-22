
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lunes',     {{$Lunes}}],
          ['Martes',      {{$Martes}}],
          ['Miercoles',  {{$Miercoles}}],
          ['Jueves', {{$Jueves}}],
          ['Viernes',    {{$Viernes}}]
        ]);

        var options = {
          title: 'Cantidad de estudiantes que reclaman beneficios'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


      google.charts.setOnLoadCallback(drawChart2);
      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Almuerzo',     {{$sede1Almuerzo}}],
          ['Refrigerio',      {{$sede1Refrigerio}}]
        ]);

        var options = {
          title: 'Cantidad de estudiantes que reclaman beneficio en la sede principal'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChart3);
      function drawChart3() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Almuerzo',     {{$sede2Almuerzo}}],
          ['Refrigerio',      {{$sede2Refrigerio}}]
        ]);

        var options = {
          title: 'Cantidad de estudiantes que reclaman beneficio en la sede secundaria'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>

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


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="Estadisticas-tab" data-toggle="tab" href="#Estadisticas" role="tab" aria-controls="Estadisticas" aria-selected="true">Estadisticas de los beneficios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Proveedores-tab" data-toggle="tab" href="#Proveedores" role="tab" aria-controls="Proveedores" aria-selected="false">Proveedores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Estudiantes-tab" data-toggle="tab" href="#Estudiantes" role="tab" aria-controls="Estudiantes" aria-selected="false">Estudiantes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="cafeteria-tab" data-toggle="tab" href="#cafeteria" role="tab" aria-controls="cafeteria" aria-selected="false">Dueños de Cafeteria</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="asistentes-tab" data-toggle="tab" href="#asistentes" role="tab" aria-controls="asistentes" aria-selected="false">Asistentes de bienestar</a>
  </li>
</ul>

  <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Estadisticas" role="tabpanel" aria-labelledby="Estadisticas-tab" >
        <div class="d-flex">
          <div id="piechart" style="width: 500px; height: 450px;"></div>
          <div id="piechart2" style="width: 500px; height: 450px;"></div>
          <div id="piechart3" style="width: 500px; height: 450px;"></div>
        </div>
          
        </div>

    <div class="tab-pane fade" id="Proveedores" role="tabpanel" aria-labelledby="Proveedores-tab">
    <table class="table">
  <thead>
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Nombre de la empresa</th>
      <th scope="col">Mercancia</th>
      <th scope="col">Nombre de contacto</th>
      <th scope="col">Numero de contacto</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th scope="row">1</th>
      <td>Alfaix</td>
      <td>Jugo de Naranja</td>
      <td>Rafael Garcia</td>
      <td>321564889</td>
    </tr>
    <tr class="text-center">
      <th scope="row">2</th>
      <td>Postobon s.a</td>
      <td>Jugos en caja</td>
      <td>Sergio Fernandez</td>
      <td>3219987758</td>
    </tr>
    <tr class="text-center">
      <th scope="row">3</th>
      <td>plasticworld</td>
      <td>platos y vasos</td>
      <td>Kayris Arias</td>
      <td>3215634789</td>
    </tr>
    <tr class="text-center">
      <th scope="row">4</th>
      <td>res&res</td>
      <td>carne de res</td>
      <td>willian hernandez</td>
      <td>3154896633</td>
    </tr>
  </tbody>
</table>
    </div>

    <div class="tab-pane fade" id="Estudiantes" role="tabpanel" aria-labelledby="Estudiantes-tab">
    <table class="table table-striped">
            <thead>
              <tr>
              <th class="text-center" scope="col">Codigo</th>
                <th class="text-center" scope="col">Nombre</th>
                <th class="text-center" scope="col">Apellido</th>
                <th class="text-center" scope="col">Fallas</th>
                <th class="text-center" scope="col">Estrato</th>
                <th class="text-center" scope="col">Sede</th>
                <th class="text-center" scope="col">Beneficio</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datos as $eso)
              <tr>
                <th class="text-center">{{$eso->id_inscrito}}</th>
                <th class="text-center">{{$eso->primer_nombre}}</th>
                <th class="text-center">{{$eso->primer_apellido}}</th>
                <th class="text-center">{{$eso->falla}}</th>
                <th class="text-center">{{$eso->estrato}}</th>
                <td class="text-center">@if($eso->sede == 1)
                      <h6>Principal</h6>
                    @else
                     <h6>Centro</h6> 
                    @endif</td>
                <td class="text-center">@if($eso->id_beneficio == 100)
                      <h6>Almuerzo</h6>
                    @else
                     <h6>Refrigerio</h6> 
                    @endif</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

    <div class="tab-pane fade" id="cafeteria" role="tabpanel" aria-labelledby="cafeteria-tab">
    <table class="table">
  <thead>
  <tr class="text-center">
      <th scope="col">Sede</th>
      <th scope="col">Adminitrador en curso</th>
      <th scope="col">Fecha de inicio contracto</th>
      <th scope="col">Fecha de fin contracto</th>
      <th scope="col">Numero de contacto</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td scope="row">Principal</td>
      <td>Ricardo Marquez</td>
      <td>12/06/2015</td>
      <td>12/06/2020</td>
      <td>3013419963</td>
    </tr>
    <tr class="text-center">
      <td scope="row">Centro</td>
      <td>Edwin Gutierrrez</td>
      <td>21/01/2018</td>
      <td>21/01/2023</td>
      <td>3219985558</td>
    </tr>
  </tbody>
</table>
    </div>

    <div class="tab-pane fade" id="asistentes" role="tabpanel" aria-labelledby="asistentes-tab">
    <table class="table table-striped">
            <thead>
              <tr>
              <th class="text-center" scope="col">Codigo</th>
                <th class="text-center" scope="col">Nombre</th>
                <th class="text-center" scope="col">S.Nombre</th>
                <th class="text-center" scope="col">Apellido</th>
                <th class="text-center" scope="col">S.Apellido</th>
                <th class="text-center" scope="col">Sede</th>
              </tr>
            </thead>
            <tbody>
              @foreach($empleados as $empleado)
              <tr>
                <td class="text-center">{{$empleado->idEmpleado}}</td>
                <td class="text-center">{{$empleado->primer_nombre}}</td>
                <td class="text-center">{{$empleado->segundo_nombre}}</td>
                <td class="text-center">{{$empleado->primer_apellido}}</td>
                <td class="text-center">{{$empleado->segundo_apellido}}</td>
                <td class="text-center">{{$empleado->sede}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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