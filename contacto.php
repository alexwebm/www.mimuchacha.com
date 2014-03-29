<?php include('include/header.php'); ?>
	<div class="container">
		<div class="six columns">
			<div class="titleGrey">
				<h1>CONTÁCTENOS</h1>
			</div>
			<form name="contacto" id="contacto" method="post" action="">
			<fieldset>
				<input type="text" name="name" id="name" placeholder="Nombre:" />
				<input type="text" name="mail" id="mail" placeholder="Correo Electrónico:" />
				<input type="text" name="phone" id="phone" placeholder="Teléfono:" />
				<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad:" />
				<textarea name="mensaje" id="mensaje" rows="5" placeholder="Mensaje:" ></textarea>
				<input type="text" name="captcha" id="captcha" placeholder="Código de Seguridad:" />
				<input type="text" name="codesec" id="codesec" value="<?php echo date("jm"); ?>"  hidden="hidden" readonly="readonly"/>
				<img id="imgcode" src="include/captcha.php" height="27"  />
				<div class="clr"></div>
				<input type="submit" name="enviar" id="enviar" value="ENVIAR" />
			</fieldset>

			<div class="success">Hemos recibido su información exitosamente.</div>
		</form>
		</div>
		<div class="ten columns">
			<div class="titleGrey">
				<h1>NUESTRAS OFICINAS</h1>
			</div>
			<div id="map_canvas"></div>

			<div class="boxSucursal nomrg">
				<span class="titleSuc">Sucursal Cancún</span>

				<span>Pecari SM 20 Mza 5 Lote 36</span>
				<span>Cancún, Quintana Roo</span>
				<span>Oficina: (998) 252 - 3486</span>
				<span>Cel: 9982 - 145 - 5740</span>
				<span>E-mail: <small>info@mimuchacha.com</small></span><br>
				<img src="<?php echo $path.'images/suc-cancun.jpg'; ?>" />
			</div>
			<div class="boxSucursal">
				<span class="titleSuc">Sucursal Monterrey</span>

				<span>Batallón de San Patricio 109 Sur</span>
				<span>Colonia Valle Oriente</span>
				<span>Oficina: (811) 531 - 6970</span>
				<span>Cel: (811) 531 - 6970</span>
				<span>E-mail: <small>mty@mimuchacha.com</small></span><br>
				<img src="<?php echo $path.'images/suc-monterrey.jpg'; ?>" />
			</div>
			<div class="clr"></div>
		</div>
		
	</div>
<?php include('include/footer.php'); ?>