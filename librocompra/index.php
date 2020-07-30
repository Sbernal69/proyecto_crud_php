<?php

include_once("config.php");

$result = $conn->query("SELECT * FROM compra ORDER BY id DESC");

?>

<html>
<head>
	<title>Crear Libro</title>
</head>

<body>
<a href="add.html">Comprar Libro</a>
<br>
<br>
<br>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Autor</td>
		<td>Nombre Libro</td>
		<td>Tema</td>
		<td>Idioma</td>
		<td>Valor Compra </td>
		<td>Fecha Compra</td>
		<td>Update</td>
	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['autor']."</td>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['tema']."</td>";
		echo "<td>".$row['idioma']."</td>";
		echo "<td>".$row['valorcompra']."</td>";
		echo "<td>".$row['fechacompra']."</td>";
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
<br>
<br>
<br>
<a href="../php-login/inicio.php">Regresar al inicio</a><br>
</html>
