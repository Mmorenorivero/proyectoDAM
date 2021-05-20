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
		<h2 style="text-decoration:underline">Estado de tus reservas</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2"><span style="font-size:25px; color: #FF0000">Estado de la reserva:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
				</li>
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