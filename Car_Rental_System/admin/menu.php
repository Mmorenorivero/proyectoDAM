<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Moracar</a></h1>
			<div id="top-navigation">
				Bienvenido <a href="#"><strong>Administrador</strong></a>
				<span>|</span>
				<a href="#">Ayuda</a>
				<span>|</span>
				<a href="#">Configuración del Perfil</a>
				<span>|</span>
				<a href="logout.php">Salir</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Tablero</span></a></li>
			    <li><a href="add_vehicles.php"><span>Gestión de vehículos</span></a></li>
			    <li><a href="client_requests.php"><span>Presupuestos</span></a></li>
			    			</ul>
		</div>