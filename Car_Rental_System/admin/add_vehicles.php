<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Inicio</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("¿Desea borrar este coche?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Tablero</a>
			<span>&gt;</span>
			Gestión de vehiculos
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Nuestro vehiculos</h2>
						<div class="right">
							<label>Buscar vehiculos</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Marca Vehiculo</th>
								<th>Modelo</th>
								<th>Precio</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Disponible'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Borrar</a><a href="#" class="ico edit">Editar</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Mostrando 1-12 de 44</div>
							<div class="right">
								<a href="#">Anterior</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Siguiente</a>
								<a href="#">Ver todo</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Imprimir" /></h2>
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Administrar</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="add_cars.php" class="add-button"><span>Añadir nuevo vehiculo</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>seleccionar todo</label></p>
						<p><a href="#">Borrar selección</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Ordenar por</label>
							<select class="field">
								<option value="">Modelo</option>
							</select>
							<select class="field">
								<option value="">Nombre</option>
							</select>
							<select class="field">
								<option value="">Precio</option>
							</select>
						</div>
						<!-- End Sort -->
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - Moracar</span>
		<span class="right">
			Diseño por Manuel Moreno</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>