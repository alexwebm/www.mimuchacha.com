<?php include('path.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<title>Mi Muchacha</title>
	<meta name="keywords" content =""/>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="boxHeader">
		<header class="container">
			<div class="eight columns">
				<a href="<?php echo $path; ?>">
					<img src="<?php echo $path.'images/logo.png'; ?>" />
				</a>
			</div>
			<div class="eight columns phoneNumber">
				<span>(811) 531 6970</span>
				<small>Monterrey, NL - México</small>
			</div>
			<div class="clr"></div>

			<nav class="sixteen columns">
				<ul class="menu">
					<li <?php if($page == 'index.php'){?> class="current-li" <?php } ?> ><a <?php if($page == 'index.php'){?> class="current-a" <?php } ?> href="<?php echo $path; ?>">INICIO</a></li>
					<li <?php if($page == 'quienes-somos.php'){?> class="current-li" <?php } ?>><a <?php if($page == 'quienes-somos.php'){?> class="current-a" <?php } ?> href="<?php echo $path.'quienes-somos.php'; ?>">QUIENES SOMOS</a></li>
					<li <?php if($page == 'servicios.php'){?> class="current-li" <?php } ?> > <a <?php if ($page =='servicios.php') {?> class="current-a" <?php } ?> href="<?php echo $path.'servicios.php';?>">SERVICIOS</a></li>
					<li <?php if($page == 'testimonios.php'){?> class="current-li"<?php } ?> > <a <?php if($page == 'testimonios.php') {?> class="current-a" <?php } ?> href="<?php echo $path.'testimonios.php';?>">TESTIMONIOS</a></li>
					<li <?php if($page == 'contacto.php'){?> class="current-li"<?php }?>><a <?php if($page == 'contacto.php'){?> class="current-a" <?php } ?> href="<?php echo $path.'contacto.php';?>">CONTACTO</a></li>
				</ul>
				<a class="face" href="#" target="_blank"><img src="<?php echo $path.'images/facebook.jpg'; ?>" /></a>
				<a class="twit" href="#" target="_balnk"><img src="<?php echo $path.'images/twitter.jpg'; ?>" /></a>
			</nav>
		</header>
	</div>
