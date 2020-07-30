<?php

include_once("config.php");

$result = $conn->query("SELECT * FROM cliente ORDER BY id DESC");

?>

<html>
<head>
	<title>Crear Cliente</title>
</head>

<body>
<a href="add.html">Crear cliente</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nombre</td>
		<td>Correo</td>
		<td>Celular</td>
	</tr>

	<?php

	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['correo']."</td>";
		echo "<td>".$row['celular']."</td>";
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
