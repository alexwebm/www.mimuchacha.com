<?php include('path.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<title>Mi Muchacha - Tu satisfacción es nuestra prioridad</title>
	

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $path.'images/favicon.ico'; ?>" />
	
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/estilos.css">

	<link rel="stylesheet" href="css/nivo-slider.css">
	<link rel="stylesheet" href="css/slider.css">

	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
    <script type="text/javascript" src="js/jquery.numeric.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>

    <script type="text/javascript">
    	$(window).load(function() {
            $('#slider').nivoSlider({
                effect: 'slideInLeft',
                animSpeed: 300,                 // Slide transition speed
                pauseTime: 5000,
                controlNav: false
            });
        });

        $(document).ready(function(){

        	$("#map_canvas").gmap3({
                 map: {
                    options: {
                        center: [21.172087, -86.859455],
                        zoom: 11
                    }  
                },
                marker:{
                    latLng:[21.172087, -86.859455]
                }
            });

        });
    </script>
</head>
<body>
	<div <?php if($page == 'index.php'){?>class="boxHeader boxHeaderSlr"<?php } else {?>class="boxHeader" <?php } ?>>
		<header class="container">
			<div class="eight columns rel boxlogo">
				<a href="<?php echo $path; ?>" id="logo">
					<img src="<?php echo $path.'images/logo.png'; ?>" />
				</a>
			</div>
			<div class="eight columns phoneNumber">
				<span>(811) 531 6970</span>
				<small>Monterrey, NL - México</small>
			</div>
			<div class="clr"></div>

			<nav class="container">
				<ul class="menu">
					<li <?php if($page == 'index.php'){?> class="current-li" <?php } ?> ><a <?php if($page == 'index.php'){?> class="current-a" <?php } ?> href="<?php echo $path; ?>">INICIO</a></li>
					<li <?php if($page == 'quienes-somos.php'){?> class="current-li" <?php } ?>><a <?php if($page == 'quienes-somos.php'){?> class="current-a" <?php } ?> href="<?php echo $path.'quienes-somos'; ?>">QUIENES SOMOS</a></li>
					<li <?php if($page == 'servicios.php'){?> class="current-li" <?php } ?> > <a <?php if ($page =='servicios.php') {?> class="current-a" <?php } ?> href="<?php echo $path.'servicios';?>">SERVICIOS</a></li>
					<li <?php if($page == 'testimonios.php'){?> class="current-li"<?php } ?> > <a <?php if($page == 'testimonios.php') {?> class="current-a" <?php } ?> href="<?php echo $path.'testimonios';?>">TESTIMONIOS</a></li>
					<li <?php if($page == 'contacto.php'){?> class="current-li"<?php }?>><a <?php if($page == 'contacto.php'){?> class="current-a" <?php } ?> href="<?php echo $path.'contacto';?>">CONTACTO</a></li>
				</ul>
				<a class="face" href="#" target="_blank"><img src="<?php echo $path.'images/facebook.jpg'; ?>" /></a>
				<a class="twit" href="#" target="_balnk"><img src="<?php echo $path.'images/twitter.jpg'; ?>" /></a>
			</nav>
		</header>
	

	<?php if($page == 'index.php'){ ?>
	<div class="container">
		
		<div class="boxSlider">
	        <div class="boxSliderWrap theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="<?php echo $path.'images/slider/limpieza.jpg';?>" />
	                <img src="<?php echo $path.'images/slider/asistentes.jpg'; ?>" />
	                <img src="<?php echo $path.'images/slider/confianza.jpg'; ?>" />
	                <img src="<?php echo $path.'images/slider/satisfaccion.jpg'; ?>" />
	                <img src="<?php echo $path.'images/slider/servicio.jpg'; ?>" />
	                <img src="<?php echo $path.'images/slider/estetica.jpg'; ?>" />
	                <img src="<?php echo $path.'images/slider/mantenimiento.jpg'; ?>" />
	            </div>
	        </div>
		</div>
	
	</div>
	<?php } ?>


	</div>
	<?php if($page == 'index.php'){ ?>
	<div class="container"><img id="sombra" src="<?php echo $path.'images/slider/sombra.png'; ?>" /></div>
	<?php } ?>