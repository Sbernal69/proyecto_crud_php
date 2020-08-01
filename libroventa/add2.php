<?php
include_once("config.php");
if(isset($_POST['Submit'])) {
	$nombre = $_POST['nombre'];
	$autor = $_POST['autor'];
	$tema = $_POST['tema'];
	$idioma = $_POST['idioma'];
	$valorventa = $_POST['valorventa'];
	$fechaventa= $_POST['fechaventa'];
	if( empty($nombre) || empty($autor) || empty($tema) || empty($idioma) || empty($valorventa) || empty($fechaventa)) {
		if(empty($autor)) {
			echo "<font color='red'>Campo: autor libro esta vacio.</font><br/>";
		}
		if(empty($nombre)) {
			echo "<font color='red'>Campo: nombre esta vacio.</font><br/>";
		}
		if(empty($tema)) {
			echo "<font color='red'>Campo: tema libro esta vacio.</font><br/>";
		}
		if(empty($idioma)) {
			echo "<font color='red'>Campo: idioma esta vacio.</font><br/>";
		}
		if(empty($valorventa)) {
			echo "<font color='red'>Campo: valor venta  esta vacio.</font><br/>";
		}
		if(empty($fechaventa)) {
			echo "<font color='red'>Campo: fecha venta esta vacio.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		$sql = "INSERT INTO venta (nombre, autor, tema, idioma, valorventa, fechaventa) VALUES( :nombre, :autor, :tema, :idioma, :valorventa, :fechaventa)";
		$query = $conn->prepare($sql);

		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':autor', $autor);
		$query->bindparam(':tema', $tema);
		$query->bindparam(':idioma', $idioma);
		$query->bindparam(':valorventa', $valorventa);
		$query->bindparam(':fechaventa', $fechaventa);
		$query->execute();

		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
	header("Location:index.php");
?>
