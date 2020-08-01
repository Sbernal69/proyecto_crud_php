<?php
include_once("config.php");
if(isset($_POST['Submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$celular = $_POST['celular'];
	if(empty($nombre) || empty($correo) || empty($celular)) {
		if(empty($nombre)) {
			echo "<font color='red'>Campo: nombre esta vacio.</font><br/>";
		}
		if(empty($correo)) {
			echo "<font color='red'>Campo: correo  esta vacio.</font><br/>";
		}
		if(empty($celular)) {
			echo "<font color='red'>Campo: celular  esta vacio.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		$sql = "INSERT INTO cliente (nombre, correo, celular) VALUES(:nombre, :correo, :celular)";
		$query = $conn->prepare($sql);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':correo', $correo);
		$query->bindparam(':celular', $celular);
		$query->execute();
		echo "<font color='green'>Cliente cargado correctmanete";
		echo " ";
		echo " ";
		echo "<br/><a href='index.php'>Validar carga</a>";
	}
}
	header("Location: index.php");
?>