<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Disponible' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Solicitud realizada con éxito';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
