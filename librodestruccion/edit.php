<?php

include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];
  $nombe = $_POST['$nombre'];
	$comentario = $_POST['$comentario'];



	if(empty($nombre) || empty($comentario)) {

		if(empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($comentario)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

	} else {

		$sql = "UPDATE destruir SET nombre=:nombre, comentario=:comentario WHERE id=:id";
		$query = $dbConn->prepare($sql);


		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':comentario', $comentario);
		$query->execute();


		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM destruir WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
  $autor = $row['nombre'];
	$comentario = $row['comentario'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr>
				<td>Comentario</td>
				<td><input type="text" name="comentario" value="<?php echo $comentario;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
