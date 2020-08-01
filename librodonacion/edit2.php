<?php
include_once("config.php");
if(isset($_POST['update'])){
	$id = $_POST['id'];
    $autor = $_POST['autor'];
	$nombrelibro = $_POST['nombrelibro'];
	$temalibro = $_POST['temalibro'];
	if(empty($autor) || empty($nombrelibro) || empty($temalibro) || empty($id)) {
		if(empty($autor)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($nombrelibro)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		if(empty($temalibro)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($id)) {
			echo "<font color='red'>id field is empty.</font><br/>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {

		$sql = "UPDATE donacion SET autor=:autor, nombrelibro=:nombrelibro, temalibro=:temalibro WHERE id=:id";
		$query = $conn->prepare($sql);

		$query->bindparam(':id', $id);
		$query->bindparam(':autor', $autor);
		$query->bindparam(':nombrelibro', $nombrelibro);
		$query->bindparam(':temalibro', $temalibro);
        $query->execute();
        
        echo "<font color='green'>Cliente editado correctmanete";
		echo " ";
		echo " ";
		echo "<br/><a href='index.php'>Validar carga</a>";
	}
}
	header("Location: index.php");
?>