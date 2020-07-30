<?php

include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];
  $autor = $_POST['autor'];
	$nombrelibro = $_POST['nombrelibro'];
	$temalibro = $_POST['temalibro'];


	if(empty($autor) || empty($nombrelibro) || empty($temalibro)) {

		if(empty($autor)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($nombrelibro)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($temalibro)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {

		$sql = "UPDATE donacion SET autor=:autor, nombrelibro=:nombrelibro, temalibro=:temalibro WHERE id=:id";
		$query = $dbConn->prepare($sql);

		$query->bindparam(':id', $id);
		$query->bindparam(':autor', $autor);
		$query->bindparam(':nombre', $nombrelibro);
		$query->bindparam(':curso', $temalibro);
		$query->execute();


		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];


$sql = "SELECT * FROM donacion WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{
  $autor = $row['autor'];
	$nombrelibro = $row['nombre'];
	$temalibro = $row['temalibro'];
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
				<td>Name</td>
				<td><input type="text" name="autor" value="<?php echo $autor;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="nombrelibro" value="<?php echo $nombrelibro;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="temalibro" value="<?php echo $temalibro;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
