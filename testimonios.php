<?php include('include/header.php'); ?>
	<div class="container">
		<div class="ten columns">
			<div class="titleGrey">
				<h1>NUESTROS CLIENTES NOS RECOMIENDAN</h1>
			</div>
			<div class="rowTestim">	
				<div class="three columns nomrg">
					<img src="<?php echo $path; ?>images/int_1.png"/>
				</div>
				<div class="boxTestim" >
					<img src="<?php echo $path.'images/com-open.png'; ?>" />
					<p>Excelente servicio y atención. Los recomiendo ampliamente, despues de pasar por varias agencias, encotramos la mas formal
					que realmente cumplio con lo acordado. <img class="comclose" src="<?php echo $path.'images/com-close.png'; ?>" /></p>
					<div class="clr"></div>
					<div class="ocupaty">
						<strong class="ask">Daniel Pineda</strong>
						<span class="ocup">Empresario</span>
					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="rowTestim">
				<div class="three columns nomrg">
					<img src="<?php echo $path; ?>images/laddys-testimon.png"/>
				</div>
				<div class="boxTestim" >
					<img src="<?php echo $path.'images/com-open.png'; ?>" />
					<p>Encontrar un buen servicio doméstico se puede volver una pesadilla. Nos recomendaron MiMuchacha.com y nos ha
					ido maravilloso. Tenemos 3 años felices con nuestra empleada. <img class="comclose" src="<?php echo $path.'images/com-close.png'; ?>" /></p>
					<div class="clr"></div> 
					<div class="ocupaty">
						<strong class="ask">Fernanda Schimmel</strong>
						<span class="ocup">Abogada</span>
					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="rowTestim">
				<div class="three columns nomrg">
					<img src="<?php echo $path; ?>images/miss-testimon.png"/>
				</div>
				<div class="boxTestim" >
					<img src="<?php echo $path.'images/com-open.png'; ?>" />
					<p>La  tranquilidad de mi familia es lo principal. Me sient segura al saber a quien estoy contratando y tener una agencia
					que me respalda siempre. <img class="comclose" src="<?php echo $path.'images/com-close.png'; ?>" /></p>
					<div class="clr"></div>
					<div class="ocupaty">
						<strong class="ask">Montse Olvera</strong>
						<span class="ocup">Ama de Casa</span>
					</div>
				</div>
				<div class="clr"></div>
			</div>

			<div class="rowTestim">
				<div class="three columns nomrg">
					<img src="<?php echo $path; ?>images/srs-testimon.png"/>
				</div>
				<div class="boxTestim" >
					<img src="<?php echo $path.'images/com-open.png'; ?>" />
					<p>Nos recomendaron sus servicios y la verdad dudábamos si funcionaria, pero al final del día nos fue bastante bien. Encontraron
					a la persona que necesitabamos, y ahora los recomendamos a todos nuestros amigos y familiares. <img class="comclose" src="<?php echo $path.'images/com-close.png'; ?>" /></p>
					<div class="clr"></div> 
					<div class="ocupaty">
						<strong class="ask">Tere y Paco Bárcenas</strong>
						<span class="ocup">Empresarios</span>
					</div>
				</div>
				<div class="clr"></div>
			</div>
		</div>

		<div class="six columns">
			<div class="titleGrey">
				<h1>ALIANZAS ESTRATEGICAS</h1>
			</div>
			<img src="<?php echo $path; ?>images/profeco_nuevo.png"/>
			<img src="<?php echo $path; ?>images/fib.png"/>
			<img src="<?php echo $path; ?>images/confianza.png"/>
		
			<div class="titleYellow">CONTÁCTANOS</div>
		
			<form name="contacto" id="contacto" method="post" action="">
				<fieldset>
					<input type="text" name="name" id="name" placeholder="Nombre:"/>
					<input type="text" name="mail" id="mail" placeholder="Correo Electrónico:"/>
					<input type="text" name="phone" id="phone" placeholder="Teléfono:" />
					<input type="text" name="city" id="city" placeholder="Ciudad:" />
					<textarea name="mensaje" id="mensaje" rows="5" placeholder="Mensaje:"></textarea>
					<input type="text" name="captcha" id="captcha" placeholder="Código de Seguridad:" />
					<input type="text" name="codesec" id="codesec" value="<?php echo date("jm"); ?>"  hidden="hidden" readonly="readonly"/>
					<img id="imgcode" src="include/captcha.php" height="27"  />
					<div class="clr"></div>
					<input type="submit" name="enviar" id="enviar" value="ENVIAR" />
				</fieldset>
			</form>
		</div>
	</div>
	<?php include('include/footer.php');?>
</body>
</html>