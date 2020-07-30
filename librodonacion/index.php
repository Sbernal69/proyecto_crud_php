<?php

include_once("config.php");

$result = $conn->query("SELECT * FROM donacion ORDER BY id DESC");

?>

<html>
<head>
	<title>Crear Libro</title>
</head>

<body>
<a href="add.html">Donacion  Libro</a>
<br>
<br>
<br>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Autor</td>
		<td>Nombre Libro</td>
		<td>Tema</td>
		<td>Update</td>
	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['autor']."</td>";
		echo "<td>".$row['nombrelibro']."</td>";
		echo "<td>".$row['temalibro']."</td>";
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
<br>
<br>
<br>
<a href="../php-login/inicio.php">Regresar</a><br>
</html>
