<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moracar</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
		.txt{
			width: 600px;
			height: 200px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Tenemos el coche de tus sueños</h2>
				<h3 class="properties" style="text-align: center">Seat - Volkswagen - Ford - Mercedes</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Mensaje al administrador</h2>
			<ul class="properties_list">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Escriba aqui su mensaje:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" placeholder="Escriba su mensaje" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="send" value="Enviar mensaje"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_id,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Mensaje enviado con éxito\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Mensaje no enviado. Inténtelo de nuevo\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>Moracar</li>
						<li><a href="#">Sobre nosotros</a></li>
						<li><a href="#">Terminos y condiciones</a></li>
						<li><a href="#">Politica</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>Otros</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>Nuestras Marcas</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Seat</a></li>
						<li><a href="#">Volkswagen</a></li>
						<li><a href="#">Otras.</a></li>
					</ul>
				</li>


				<li class="about">
					<p>En Moracar tenemos el vehículo que busca. Nos preocupamos por un buen servicio y un gran compromiso con el cliente.</p>
					<ul>
						<li><a href="http://facebook.com/moracar" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/moracar" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+moracar" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> Todos los derechos reservados | Diseño por Manuel Moreno.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>