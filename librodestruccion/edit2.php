<?php
include_once("config.php");
if(isset($_POST['update'])){
	$id = $_POST['id'];
    $nombre = $_POST['nombre'];
	$comentario = $_POST['comentario'];
	if(empty($nombre) || empty($comentario) || empty($id)) {
		if(empty($nombre)) {
			echo "<font color='red'>nombre field is empty.</font><br/>";
		}
		if(empty($comentario)) {
			echo "<font color='red'>comentario field is empty.</font><br/>";
        }
        if(empty($id)) {
			echo "<font color='red'>id field is empty.</font><br/>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		$sql = "UPDATE destruir SET nombre=:nombre, comentario=:comentario WHERE id=:id";
		$query = $conn->prepare($sql);


		$query->bindparam(':nombre', $nombre);
        $query->bindparam(':comentario', $comentario);
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