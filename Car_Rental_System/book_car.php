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
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo '€'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Marca>'.$rws['car_type'];?></a>
						</h1>
						<h2>Modelo: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
				<h3>Proceder a reservar  <?php echo $rws['car_name'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table>
						<tr>
							<td>Nombre completo:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Número de teléfono:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Número ID:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Género:</td>
							<td>
								<select name="gender">
									<option> Selecciona Género </option>
									<option> Hombre </option>
									<option> Mujer </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Residencia:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Aceptar"></td>
						</tr>
					</table>
				</form>
				<?php
					} else
						{
							?>
								<a href="pay.php">Reservar</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
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