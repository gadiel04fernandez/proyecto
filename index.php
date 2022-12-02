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
	<link rel="stylesheet" href="./css/estil.css">
    <meta charset="utf-8">
    <meta name="keywords" content="Perfil Usuario">
    <meta name="description" content="">
	<title>Lugama</title>
	<link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": " Sitios2",
		"logo": "images/Free_Sample_By_Wix_1.jpg"
}</script>
    <meta name="theme-color" content="#4496fd">
    <meta property="og:title" content="casa">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<body>
<header>
		<div class="header">
		<a href="index.php">
		</a>

		
		<img class="logo" src="./img/Free_Sample_By_Wix (1).jpg" alt="logo">
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
						<li><a href="ciudadanot.php">Ciudadano</a></li>
						<li><a href="empleadot.php">Empleado</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="servicios.php">Servicios</a>
					<ul>
						<li><a href="estudianteS.php">Estudiante</a></li>
						<li><a href="ciudadanoS.php">Ciudadano</a></li>
						<li><a href="empleadoS.php">Empleado</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="./registrarusu.php">Registrar</a>
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Buscar</a>
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<!-- carrusel -->
		<section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-71c2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-carousel u-expanded-width u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-thumbnails-position-right u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-7f0c">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="1700" data-image-height="832">
                <img class="u-back-image u-expanded" src="images/jhjhjhjjjjjjjjjjj-min.jpg">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1380" data-image-height="920">
                <img class="u-back-image u-expanded" src="images/hg5.jpg">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="2836" data-image-height="1875">
              <div class="u-back-slide" data-image-width="1769" data-image-height="1080">
                <img class="u-back-image u-expanded" src="images/gffg-min.jpg">
              </div>
              <div class="u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-7f0c" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-7f0c" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-10 u-vertical-spacing u-carousel-thumbnails-1">
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-7f0c" data-u-slide-to="0">
              <img class="u-carousel-thumbnail-image u-image" src="images/jhjhjhjjjjjjjjjjj-min.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-7f0c" data-u-slide-to="1">
              <img class="u-carousel-thumbnail-image u-image" src="images/hg5.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-3" data-u-target="#carousel-7f0c" data-u-slide-to="2">
              <img class="u-carousel-thumbnail-image u-image" src="images/gffg-min.jpg">
            </li>
          </ol>
        </div>
      </div>
    </section>

	<!-- PERFIN DE USUARIOS -->
	<section class="skrollable u-clearfix u-custom-color-1 u-section-2" id="sec-94b8">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Perfil Usuario</h2>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-0925">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-expanded-width u-image u-image-default u-image-1" alt="" data-image-width="1280" data-image-height="853" src="images/82977d1737ae7558f0f00c26aca349ed53e8be35e35a17baac3954775d4431a75166329b0eea7c6ee04738487d3622ebbf837e180729aba579a27b_1280.jpg">
                <h4 class="u-align-center u-text u-text-1">Estudiante</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img class="u-expanded-width u-image u-image-default u-image-2" alt="" data-image-width="1280" data-image-height="864" src="images/067d9ec162470d83d21dd9ad4a3384c1b96a0e8854d12824454300c16612f2724afbf094a05e5388353f4cddb794c5e2f515c60dadc57bbd67931c_1280.jpg">
                <h4 class="u-align-center u-text u-text-2">Cuidadano</h4>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img class="u-expanded-width u-image u-image-default u-image-3" alt="" data-image-width="1280" data-image-height="853" src="images/aca24688b13808f3b96e2003e22416d89c659ba388f6d4bbc629161d66040dfec8d73a77e20e1b133142e5e54182a08cfb7e8cc62161aaaf8242b1_1280.jpg">
                <h4 class="u-align-center u-text u-text-3">Empleado</h4>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
		
	</header>
	
</body>
</html>
<!DOCTYPE html>