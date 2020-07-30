<?php

include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];
  $nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$celular = $_POST['celular'];


	if(empty($nombre) || empty($correo) || empty($celular)) {

		if(empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($correo)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($celular)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {

		$sql = "UPDATE cliente SET nombre=:nombre, correo=:correo, celular=:celular WHERE id=:id";
		$query = $conn->prepare($sql);

		##$query->bindparam(':id', $id);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':correo', $correo);
		$query->bindparam(':celular', $celular);
		$query->execute();


		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM cliente WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
  $nombre = $row['nombre'];
	$correo = $row['correo'];
	$celular = $row['celular'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Volver a crear cliente</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr>
				<td>Correo</td>
				<td><input type="text" name="correo" value="<?php echo $correo;?>"></td>
			</tr>
			<tr>
				<td>Celular</td>
				<td><input type="text" name="celular" value="<?php echo $celular;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
