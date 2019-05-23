<?php
require("menu.php");
?>

<link rel="stylesheet" href="css/contacto.css">
<link rel="stylesheet" href="css/fontawesome.css">

<link rel="stylesheet" href="js/jquery-3.4.1.min.js">
<link rel="stylesheet" href="js/script.js">
<title>Formulario de contacto</title>

<!-- <div class="modal_wrap">
	<div class="mensaje_modal">
		<h3>Errores en el envio</h3>
		<p>Ingrese un nombre</p>
		<p>Ingrese un correo</p>
		<p>Ingrese un mensaje</p>
		<span id="btnClose">Cerrar</span>
	</div>
</div> -->
<section class="form_wrap">
	<section class="contact_info">
		<section class="info_title">
					<span class="fa fa-user-circle"></span>
					<h2>Informacion <br> de contacto</h2>
		</section>
		<section class="info_items">
			<p><span class="fa fa-envelope"></span>alonsoalas44@gmail.com</p>
			<p><span class="fa fa-mobile"></span>7519-3952</p>
		</section>
	</section>

	<form action="envio.php" class="form_contact" method="post">
		<h2>Envianos tus comentarios</h2>
		<div class="user_info">
			<label for="names">Nombre *</label>
			<input type="text" id="names" name="name" required>

			<label for="phone">Telefono/Celular </label>
			<input type="number" id="phone" name="phone">

			<label for="email">Email *</label>
			<input type="email" id="email" name="email" required>

			<label for="msj">Mensaje *</label>
			<textarea name="mensaje" id="msj" name="msj" required></textarea>

			<input type="submit" value="Enviar Mensaje" id="btnEnviar">
		</div>
	</form>
</section>

<?php
require("footer.php");
?>