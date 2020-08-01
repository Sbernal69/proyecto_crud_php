<?php
include_once("config.php");
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$autor = $_POST['autor'];
	$nombre = $_POST['nombre'];
	$tema = $_POST['tema'];
	$idioma = $_POST['idioma'];
	$valorventa= $_POST['valorventa'];
	$fechaventa = $_POST['fechaventa'];
	if(empty($id) || empty($autor) || empty($nombre) || empty($tema) || empty($idioma) || empty($valorventa) || empty($fechaventa)) {
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
        if(empty($id)) {
			echo "<font color='red'>id field is empty.</font><br/>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		$sql = "UPDATE venta SET autor=:autor, nombre=:nombre, tema=:tema, idioma=:idioma, valorventa=:valorventa, fechaventa=:fechaventa WHERE id=:id";
		$query = $conn->prepare($sql);

		$query->bindparam(':autor', $autor);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':tema', $tema);
		$query->bindparam(':idioma', $idioma);
		$query->bindparam(':valorventa', $valorventa);
        $query->bindparam(':fechaventa', $fechaventa);
        $query->bindparam(':id', $id);
		$query->execute();

        echo "<font color='green'>Cliente editado correctmanete";
		echo " ";
		echo " ";
		echo "<br/><a href='index.php'>Validar carga</a>";
	}
}
	header("Location: index.php");
?>