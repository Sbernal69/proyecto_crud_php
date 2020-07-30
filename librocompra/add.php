<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
	$autor = $_POST['autor'];
	$nombre = $_POST['nombre'];
	$tema = $_POST['tema'];
	$idioma = $_POST['idioma'];
	$valorcompra= $_POST['valorcompra'];
	$fechacompra = $_POST['fechacompra'];

	if(empty($autor) || empty($nombre) || empty($tema) || empty($idioma) || empty($valorcompra) || empty($fechacompra)) {

		if(empty($autor)) {
			echo "<font color='red'>Campo: autor esta vacio.</font><br/>";
		}
		if(empty($nombre)) {
			echo "<font color='red'>Campo: Nombre libro esta vacio.</font><br/>";
		}
		if(empty($tema)) {
			echo "<font color='red'>Campo: tema libro esta vacio.</font><br/>";
		}
		if(empty($idioma)) {
			echo "<font color='red'>Campo: autor esta vacio.</font><br/>";
		}
		if(empty($valorcompra)) {
			echo "<font color='red'>Campo: autor esta vacio.</font><br/>";
		}
		if(empty($fechacompra)) {
			echo "<font color='red'>Campo: autor esta vacio.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		$sql = "INSERT INTO libro (autor, nombre, tema, idioma, valorcompra, fechacompra) VALUES(:autor, :nombre, :tema, :idioma, :valorcompra, :fechacompra)";
		$query = $conn->prepare($sql);

		$query->bindparam(':autor', $autor);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':tema', $tema);
		$query->bindparam(':idioma', $idioma);
		$query->bindparam(':valorcompra', $valorcompra);
		$query->bindparam(':fechacompra', $fechacompra);
		$query->execute();


		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
