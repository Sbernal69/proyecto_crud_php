<?php

include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$autor = $_POST['autor'];
	$nombre = $_POST['nombre'];
	$tema = $_POST['tema'];
	$idioma = $_POST['$idioma'];
	$valorventa= $_POST['valorventa'];
	$fechaventa = $_POST['fechaventa'];


		if(empty($autor) || empty($nombre) || empty($tema) || empty($idioma) || empty($valorventa) || empty($fechaventa)) {


			if(empty($nombre)) {
				echo "<font color='red'>Campo: Nombre libro esta vacio.</font><br/>";
			}if(empty($autor)) {
				echo "<font color='red'>Campo: autor esta vacio.</font><br/>";
			}
			if(empty($tema)) {
				echo "<font color='red'>Campo: tema libro esta vacio.</font><br/>";
			}
			if(empty($idioma)) {
				echo "<font color='red'>Campo: idioma esta vacio.</font><br/>";
			}
			if(empty($valorventa)) {
				echo "<font color='red'>Campo: valor compra esta vacio.</font><br/>";
			}
			if(empty($fechaventa)) {
				echo "<font color='red'>Campo: fecha compra esta vacio.</font><br/>";
			}
	} else {

		$sql = "UPDATE venta SET autor=:autor, nombre=:nombre, tema=:tema, idioma=:idioma, valorcompra=:valorcompra, fechacompra=:fechacompra WHERE id=:id";
		$query = $dbConn->prepare($sql);


		$query->bindparam(':autor', $autor);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':tema', $tema);
		$query->bindparam(':idioma', $idioma);
		$query->bindparam(':valorventa', $valorcompra);
		$query->bindparam(':fechaventa', $fechacompra);
		$query->execute();


		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM venta WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
	$autor = $row['autor'];
	$nombre = $row['nombre'];
	$tema = $row['tema'];
	$idioma = $row['idioma'];
	$valorcompra = $row['valorventa'];
	$fechacompra = $row['fechaventa'];
}
?>
<html>
<head>
	<title>Editar Venta</title>
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
				<td>valorventa</td>
				<td><input type="text" name="valorventa" value="<?php echo $valorventa;?>"></td>
			</tr>
			<tr>
				<td>fechaventa</td>
				<td><input type="date" name="fechaventa" value="<?php echo $fechacompra;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
