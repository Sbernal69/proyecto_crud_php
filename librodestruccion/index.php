<?php

include_once("config.php");

$result = $conn->query("SELECT * FROM destruir ORDER BY id DESC");
?>

<html>
<head>
	<title>Crear Registro</title>
</head>

<body>
<a href="add.html">Adicionar Libro</a><br/><br/>
<br>
<br>
<br>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nombre</td>
		<td>Comentario</td>
	</tr>
	<?php
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['Nombre']."</td>";
		echo "<td>".$row['Comentario']."</td>";
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
<br>
<br>
<br>
<a href="../php-login/inicio.php">Regresar inicio</a><br>
</html>
