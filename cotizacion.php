<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>PROYECTO DPWEB - Principal</title>
	
	<link rel="stylesheet" type="text/css" href="css/materialize.css"> 
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

    <ul id="dropEntregaLarge" class="dropdown-content">
        <li><a href="historia.html">Historia</a></li>
        <li><a href="equipo.html">Equipo</a></li>
        <li><a href="plataformas.html">Plataformas Web</a></li>
        <li><a href="estructuras.html">Estructuras Web</a></li>
        <li><a href="maquetacion.html">Maquetacion Web</a></li>
        <li><a href="info.html">Otra Información</a></li>
        <li><a href="glosario.html">Glosario</a></li>
    </ul>
    <ul id="dropEntregaMobile" class="dropdown-content">
      <li><a href="#">Atras <span class="fa fa-angle-left right"> </span></a></li>
        <li><a href="historia.html">Historia</a></li>
        <li><a href="equipo.html">Equipo</a></li>
        <li><a href="plataformas.html">Plataformas Web</a></li>
        <li><a href="estructuras.html">Estructuras Web</a></li>
        <li><a href="maquetacion.html">Maquetacion Web</a></li>
        <li><a href="info.html">Otra Información</a></li>
        <li><a href="glosario.html">Glosario</a></li>
    </ul> 

  <nav class="blue-grey darken-2">
      <div class="nav-wrapper container">
          <a href="index.html" class="brand-logo amber-text">Turis<span class="cyan-text text-accent-3">go</span></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="busqueda.php"><i class="fa fa-search right"> </i> Destinos</a></li>
            <li><a href="cotizacion.php"> Cotizar</a></li>
            <li><a href="encuesta.html">Encuesta</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropEntregaLarge">Primera Entrega <i class="fa fa-caret-down right"></i></a></li>
            <li><a href="contactenos.html">Contactenos</a></li>
            <li><a href="login.html">Iniciar Sesión | Registrarme</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="busqueda.php"><i class="fa fa-search right"> </i> Destinos</a></li>
            <li><a href="cotizacion.php"> Cotizar</a></li>
            <li><a href="encuesta.html">Encuesta</a></li>
            <li><a class="dropdown-button" href="#" data-activates="dropEntregaMobile">1° Entrega <i class="fa fa-caret-down right"> </i></a></li>
            <li><a href="contactenos.html">Contactenos</a></li>
            <li><a href="login.html">Iniciar Sesión | Registrarme</a></li>
          </ul>
          
      </div>
    </nav>
</div>
  <div class="container">
   <div class="row">
   <div class="section">
   <h2 class="thin center"> Cotiza lo que desees</h2>
   </div>
    <form id="cotizar" class="col s12 m8 l8 offset-m2 offset-l2" method="POST" action="script/guardarCotizacion.php">
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="nombre">
          <label>Nombre o Empresa:</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <input type="text" name="tel">
          <label>Telefono </label>
        </div>
        <div class="input-field col s12 m6 l6">
          <input type="email" name="email">
          <label>Email </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="servicio">
          <label>Servicio a cotizar:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea name="detalle" class="materialize-textarea"></textarea>
          <label>Detalle de cotizacion</label>
        </div>
      </div>
      
      <div class="center">
        <input type="submit" class="btn btn-large cyan accent-3" name="cotizacionpublica" value="Cotizar">
      </div>
    </form>
  </div>
  </div>
  <footer class="page-footer blue-grey darken-3">
    <div class="container center padding-foot">
      <i class="fa fa-heart fa-2x grey-text text-lighten-1"></i><br>
      <h5 class="light blue-grey-text text-lighten-3">Made in El Salvador</h5>
    <hr width="80%">
    <hr width="80%">
    <h5 class="light blue-grey-text text-lighten-2">Proyecto en desarrollo con la iniciativa de alumnos UTEC con fines académicos</h5>
    <hr width="80%">
    <hr width="80%">
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2017 Desarrolo web
      <a class="grey-text text-lighten-4 right" href="http://www.utec.edu.sv">Utec</a>
      </div>
    </div>
  </footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>

<script type="text/javascript">
  jQuery.validator.setDefaults({
      errorClass: "invalid",
      pendingClass: "pending",
      validClass: "valid",
      errorElement: "span",
  });
  $("#cotizar").validate({
    rules: {
      nombre:{
        required: true
      },
      apellido:{
        required: true
      },
      tel:{
        required: true,
        number: true,
        minlength: 8
      },
      email: {
        required: true,
        email: true
      },
      servicio: {
        required: true
      },
      detalle:{
        required: true
      }
    }
  });
</script>
</body>
</html>