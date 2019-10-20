<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adminEditar.css">
    <link rel="stylesheet" href="../css/iconos.css">

<style>
      html {
  min-height: 100%;
  position: relative;
}

body{
  padding: 0px;
  margin: 0px;
}

.cabecera{
  background-color: #003A6B;
  color: white;
  text-align: center;
  padding: 0;
  margin: 0;
}

.infoToolbar a{
  padding: 5px;
  color: white;
  font-size: .875rem;
  font-weight: 500;
}

.redes{
  padding: 0;
  margin: 0;
  border-right: 1px solid #004A87;
}

.navbarBg{
  padding: 5px 0;
  background-color:#004A87;
  border-bottom: 2px solid #c08e2d;
}

.Brand h1{
  text-align: initial;
  font-family: leelawadee,sans-serif;
  font-size: 1.18rem;
  color: white;
  letter-spacing: 0em;
  line-height:1em;
  margin: 0;
}

.Brand h1 span{
  font-size: 1.33rem;
  font-weight: 1000;
}

.Brand h1:hover{
  text-decoration: underline;
}

.Brand a{
  display: flex;
  align-items: center;
}

.Brand a img{
  height: 80px;
}


.nav-item.headerNav{

  padding: 10px;
  color: #fff;
  border-right: 1px solid #415b91;
}

.nav-item.headerNav:hover{
  color: white;
  background: #415B91;
  text-decoration: none;
}

.icon-buscar{
  text-align: center;
  padding: 10px;
  font-size: 1.2em;
  color: white;
  cursor: pointer;
}

.form-group h6{
  color: #337ab7;
}

.titulo_Numero_de_cupos{
  color: #337ab7;
}

.date{

  margin-bottom: 10px;
}

.navbar-toggler{
  background-color: lightblue;
  
}
.navbar-toggler-icon {

}
/*<---------------------Arriba header--------------------->*/


.footer{
  position: absolute;
  bottom: 0;
  background: #004a87;
    border-top: 2px solid #c08e2d;
    margin-top: 2%;
    color: #fff;
    padding: 1rem 0 0;
}

.paddingFooter{
  margin: 0;
  padding: 0;
}

@media screen and (max-width: 1275px) {
  .contenedor-imagenes img{
    height: 80px;
    width: 80px;
  }

  .imglarga{
    height: 80px;
    width: 514px !important;
  }
}

@media screen and (max-width: 600px) {
  .imglarga{
    height: 70px;
    width: 414px !important;
  }
}



/*<---------------------Arriba footer--------------------->*/


.hero_row{
  margin: 50px 0 200px 0;
}

.loguin_recuadro{
  border: 1px solid #3a7eb9;
  border-radius: 5px;
  padding: 
}

.titulo{
  align-items: center;
  border-top-left-radius: 2.5px;
  border-top-right-radius: 2.5px;
  border-bottom: 1px solid #3a7eb9;
  background-color: #c08e2d;
}

.loguin_titulo p{
  text-align: center;
  color: white;
  margin-top: 10px;
  margin-bottom: 10px;
  font-size: 18px;
  font-family: Roboto,sans-serif;
}

.form-group{
  margin-top: 10px;
  margin-bottom: 20px;
}

.loguin_codigo{
  border-radius: 10px;
  padding: 5px 0 5px 10px;
  border: 1px solid lightgrey;
  border-radius: 5px;
  width: 100%;
}

.loguin_contraseña{
  border-radius: 10px;
  padding: 5px 0 5px 10px;
  margin-top: 2px;
  border: 1px solid lightgrey;
  border-radius: 5px;
  width: 100%;
}

.boton_entrar{
  width: 100%;
  padding: 10px 0 10px 0;
  margin-top: 5px;
  margin-bottom: 10px;
  border-style: none;
  border-radius: 10px;
  background-color:#003A6B ;
  color: white;
}

.boton_entrar:hover{
  background-color: #004A87;
    border-color: #269abc;
}

.seccion2{

}

    </style> 

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
          
            <input value="Editar" placeholder="Editar" class="btn btn-primary" type="submit" >
          </form>
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