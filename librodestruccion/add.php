<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
	$nombre = $_POST['nombre'];
	$comentario = $_POST['comentario'];


	if(empty($autor) || empty($comentario) ) {

		if(empty($nombre)) {
			echo "<font color='red'>Campo: autor esta vacio.</font><br/>";
		}

		if(empty($comentario)) {
			echo "<font color='red'>Campo: comentario libro esta vacio.</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		$sql = "INSERT INTO destruir (nombre, comentario) VALUES(:nombre, :comentario)";
		$query = $conn->prepare($sql);

		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':comentario', $comentario);

		$query->execute();


		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
