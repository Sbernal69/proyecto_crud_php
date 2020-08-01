<?php

include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];
    $nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$celular = $_POST['celular'];

	if(empty($nombre) || empty($correo) || empty($celular) || empty($id)) {
		if(empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($correo)) {
			echo "<font color='red'>correo field is empty.</font><br/>";
		}
		if(empty($celular)) {
			echo "<font color='red'>celular field is empty.</font><br/>";
        }
        if(empty($id)) {
			echo "<font color='red'>id field is empty.</font><br/>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
        $sql = "UPDATE cliente SET nombre=:nombre, correo=:correo, celular=:celular WHERE id=:id";
        $query = $conn->prepare($sql);
        
        echo $sql;
		##$query->bindparam(':id', $id);
        $query->bindparam(':nombre', $nombre);
        $query->bindparam(':correo', $correo);
        $query->bindparam(':celular', $celular);
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