<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Inicio</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<?php
			include 'menu.php';
		?>
		
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Tablero</a>
			<span>&gt;</span>
			Current Articles
		</div>
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Añadir nuevo artículo</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="" method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req">max 100 caract.</span>
									<label>Título <span>(Requerido)</span></label>
									<input type="text" class="field size1" />
								</p>	
								<p class="inline-field">
									<label>Fecha</label>
									<select class="field size2">
										<option value="">24</option>
									</select>
									<select class="field size3">
										<option value="">Mayo</option>
									</select>
									<select class="field size3">
										<option value="">2021</option>
									</select>
								</p>
								
								<p>
									<span class="req">max 100 caract.</span>
									<label>Contenido <span>(Requerido)</span></label>
									<textarea class="field size1" rows="10" cols="30"></textarea>
								</p>	
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" />
						</div>
						<!-- End Form Buttons -->
					</form>
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
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="#" class="add-button"><span>Añadir nuevo artículo</span></a>
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
</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>