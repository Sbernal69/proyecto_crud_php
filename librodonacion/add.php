<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {
	$autor = $_POST['autor'];
	$nombrelibro = $_POST['nombrelibro'];
	$temalibro = $_POST['temalibro'];

	if(empty($autor) || empty($nombrelibro) || empty($temalibro)) {

		if(empty($autor)) {
			echo "<font color='red'>Campo: autor esta vacio.</font><br/>";
		}

		if(empty($nombrelibro)) {
			echo "<font color='red'>Campo: Nombre libro esta vacio.</font><br/>";
		}

		if(empty($temalibro)) {
			echo "<font color='red'>Campo: tema libro esta vacio.</font><br/>";
		}


		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		$sql = "INSERT INTO libro (autor, nombrelibro, temalibro) VALUES(:autor, :nombrelibro, :temalibro)";
		$query = $conn->prepare($sql);

		$query->bindparam(':autor', $autor);
		$query->bindparam(':nombrelibro', $nombrelibro);
		$query->bindparam(':temalibro', $temalibro);
		$query->execute();


		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
