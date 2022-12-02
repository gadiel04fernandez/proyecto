<?php 
	date_default_timezone_set('America/Costa_Rica'); 
	
	function fechaC(){
		$mes = array("","Enero", 
					  "Febrero", 
					  "Marzo", 
					  "Abril", 
					  "Mayo", 
					  "Junio", 
					  "Julio", 
					  "Agosto", 
					  "Septiembre", 
					  "Octubre", 
					  "Noviembre", 
					  "Diciembre");
		return date('d')." de ". $mes[date('n')] . " de " . date('Y');
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Targeta5.css">
	<link rel="stylesheet" href="./css/estil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Estudiante">
    <meta name="description" content="">
	<title>Lugama</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="tramites.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": " Sitios2",
		"logo": "images/Free_Sample_By_Wix_1.jpg"
}</script>
    <meta name="theme-color" content="#4496fd">
    <meta property="og:title" content="tramites">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<body>
<header>
		<div class="header">
		<a href="index.php">
		</a>
			<h1>LuGaMa</h1>
			<div class="optionsBar">
				<p><?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"></span>
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="login.php"><img class="close" src="img/salir.png" alt="Iniciar|Sesion" title="inicio"></a>
			</div>
		</div>

		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>

				<li class="principal">
				
				</li>

				<li class="principal">
					<a href="tramites.php">Tramites</a>
					<ul>
						<li><a href="estudiantet.php">Estudiante</a></li>
						<li><a href="ciudadanot.php#">Ciudadano</a></li>
						<li><a href="empleadot.php">Empleado</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Servicios</a>
					<ul>
						<li><a href="estudiantet.php">Estudiante</a></li>
						<li><a href="ciudadanot.php#">Ciudadano</a></li>
						<li><a href="empleadot.php">Empleado</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Registro</a>
					<ul>
						<li><a href="#">Nuevo Producto</a></li>
						<li><a href="#">Lista de Productos</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Buscar</a>
					<ul>
						<li><a href="#">Nuevo Factura</a></li>
						<li><a href="#">Facturas</a></li>
					</ul>
				</li>
			</ul>
		</nav>

	</header>
  <?php
   include('conexion.php');
   $sql="Select * from tramites";
   //mysqli_close($conection);
   $result = mysqli_query($conection, $sql);
   while ($mostrar=mysqli_fetch_array($result)){
?>
    <section class="u-align-center u-clearfix u-white u-section-1" id="sec-98f6">
    <div class="center">
    
		  <div class="property-card">
		    <a href="#">
		      <div class="property-image">
		        <div class="property-image-title">
		         <h5><?php echo $mostrar ['codtramite'] ?></h5>
		        </div>
		      </div></a>
		    <div class="property-description">
		      <h5><?php echo $mostrar ['estado'] ?> </h5>
		      <p><?php echo $mostrar ['descripcion'] ?></p>
		    </div>
		    <a href="#">
		      <div class="property-social-icons">
		        <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
		      </div>
		    </a>
		  </div>
		</div>
        </div><!--/products-->
        <?php
        }
        ?>
</section>


</body>
</html>
<!DOCTYPE html>