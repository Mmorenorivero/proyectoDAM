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


	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Acceso area cliente</h3>
				<table height="100" align="center">
					<tr>
						<td>Email:</td>
						<td><input type="email" name="email" placeholder="Inserte email" required></td>
					</tr>
					<tr>
						<td>Contraseña:</td>
						<td><input type="password" name="pass" placeholder="Inserte numero de ID" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Iniciar sesión"></td>
						<td style="text-align:right;"><a href="signup.php">Crear cuenta</a></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Inicio con éxito....\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Fallo en inicio de sesión. Pruebe de nuevo....\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

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