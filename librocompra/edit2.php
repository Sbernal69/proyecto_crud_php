<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
	$autor = $_POST['autor'];
	$nombre = $_POST['nombre'];
	$tema = $_POST['tema'];
	$idioma = $_POST['idioma'];
	$valorcompra= $_POST['valorcompra'];
	$fechacompra = $_POST['fechacompra'];

	if(empty($autor) || empty($nombre) || empty($tema) || empty($idioma) || empty($valorcompra) || empty($fechacompra) || empty($id)) {
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
        if(empty($id)) {
            echo "<font color='red'>id field is empty.</font><br/>";
        }
        
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
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
        
        echo "<font color='green'>Cliente editado correctmanete";
		echo " ";
		echo " ";
		echo "<br/><a href='index.php'>Validar carga</a>";
	}
}
    header("Location: index.php");
?>