<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Inicio</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Tablero</a>
			<span>&gt;</span>
			Añadir nuevo vehiculo
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Añadir nuevo vehiculo</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 caracteres</span>
									<label>Marca <span></span></label>
									<input type="text" class="field size1" name="car_name" required />
								</p>	
								<p>
									<span class="req">max 20 caracteres</span>
									<label>Modelo <span></span></label>
									<input type="text" class="field size1" name="car_type" required />
								</p>
								<p>
									<span class="req">max 20 caracteres</span>
									<label>Precio <span></span></label>
									<input type="text" class="field size1" name="hire_cost" required />
								</p>
								<p>
									<span class="req">Imagenes</span>
									<label>Imagen del vehiculo <span></span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">Pasajeros</span>
									<label>Capacidad<span></span></label>
									<input type="text" class="field size1" name="capacity" required />
								</p>	
							
						</div>
						
						<div class="buttons">
														<input type="submit" class="button" value="Aceptar" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Disponible')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"El vehiculo fué añadido con éxito\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Error';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Administrar</h2>
					</div>
					
					<div class="box-content">
						<a href="add_vehicles.php" class="add-button"><span>Ver nuestros vehiculos</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>seleccionar todo</label></p>
						<p><a href="#">Borrar selección</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Ordenar por</label>
							<select class="field">
								<option value="">Marca</option>
							</select>
							<select class="field">
								<option value="">Modelo</option>
							</select>
							<select class="field">
								<option value="">Precio</option>
							</select>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - Moracar</span>
		<span class="right">
			Diseño por Manuel Moreno</a>
		</span>
	</div>
</div>
	
</body>
</html>