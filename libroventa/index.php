<?php

include_once("config.php");

$result = $conn->query("SELECT * FROM venta ORDER BY id DESC");

?>

<html>
<head>
	<title>Crear Libro</title>
</head>

<body>
<a href="add.html">Vender Libro</a>
<br>
<br>
<br>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>


		<td>Nombre</td>
		<td>Autor</td>
		<td>Tema</td>
		<td>idioma</td>
		<td>valorventa</td>
		<td>fechaventa</td>
		<td>Update</td>
	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
	  echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['autor']."</td>";
		echo "<td>".$row['tema']."</td>";
		echo "<td>".$row['idioma']."</td>";
		echo "<td>".$row['valorventa']."</td>";
		echo "<td>".$row['fechaventa']."</td>";
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
