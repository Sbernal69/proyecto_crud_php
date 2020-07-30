<?php

include_once("config.php");

if(isset($_POST['update']))
{

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
				echo "<font color='red'>Campo: idioma esta vacio.</font><br/>";
			}
			if(empty($valorcompra)) {
				echo "<font color='red'>Campo: valor compra esta vacio.</font><br/>";
			}
			if(empty($fechacompra)) {
				echo "<font color='red'>Campo: fecha compra esta vacio.</font><br/>";
			}
	} else {

		$sql = "UPDATE compra SET autor=:autor, nombre=:nombre, tema=:tema, idioma=:idioma, valorcompra=:valorcompra, fechacompra=:fechacompra WHERE id=:id";
		$query = $conn->prepare($sql);

		$query->bindparam(':id', $id);
		$query->bindparam(':autor', $autor);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':tema', $tema);
		$query->bindparam(':idioma', $idioma);
		$query->bindparam(':valorcompra', $valorcompra);
		$query->bindparam(':fechacompra', $fechacompra);
		$query->execute();


		header("Location: index.php");
	}
}
?>
<?php

## $id = $_GET['id'];
$sql = "SELECT * FROM compra WHERE id=:id";
$query = $conn->prepare($sql);
## $query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
  $autor = $row['autor'];
	$nombre = $row['nombre'];
	$tema = $row['tema'];
	$idioma = $row['idioma'];
	$valorcompra = $row['valorcompra'];
	$fechacompra = $row['fechacompra'];
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
				<td>autor</td>
				<td><input type="text" name="autor" value="<?php echo $autor;?>"></td>
			</tr>
			<tr>
				<td>nombre</td>
				<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
			</tr>
			<tr>
				<td>tema</td>
				<td><input type="text" name="tema" value="<?php echo $tema;?>"></td>
			</tr>
			<tr>
				<td>idioma</td>
				<td><input type="text" name="idioma" value="<?php echo $idioma;?>"></td>
			</tr>
			<tr>
				<td>Valor Compra</td>
				<td><input type="text" name="valorcompra" value="<?php echo $valorcompra;?>"></td>
			</tr>
			<tr>
				<td>Fecha compra</td>
				<td><input type="date" name="fechacompra" value="<?php echo $fechacompra;?>"></td>
			</tr>
			<tr>

				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
