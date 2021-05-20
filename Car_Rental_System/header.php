<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Moracar</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="index.php">Alquiler de coches</a></li>
											</ul>
					<a href="account.php">Iniciar sesión Cliente</a>
					<a href="login.php">Iniciar Sesión Administrador</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="status.php">Ver reservas</a></li>
								<li><a href="message_admin.php">Mensajes</a></li>
							</ul>
					<a href="admin/logout.php">Salir</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>