<?php

include_once("config.php");

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
<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include '../partials/header.php' ?>
    <body>
        <!-- Navbar -->
        <?php include '../partials/navbar.php' ?>
		<div class="content" align="center" style="padding-top:20px;" ><h1>Editar Cliente</h1></div>
		<div class="container">
			<div align="center"><a href="index.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Regresar a Cliente</a></div>
		</div>
        <div class="container" align="center" style="padding-top:20px;">
			<form name="form1" method="post" action="edit2.php">
				<table border="0">
					<tr>
						<td>Nombre</td>
						<td><input type="text" class="form-control" name="nombre" value="<?php echo $nombre;?>" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>Correo</td>
						<td><input type="text" class="form-control" name="correo" value="<?php echo $correo;?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required></td>
					</tr>
					<tr>
						<td>Celular</td>
						<td><input type="text" class="form-control" name="celular" value="<?php echo $celular;?>" pattern="[0-9]{10}" maxlength="10" required></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" class="form-control btn btn-outline-success" name="update" value="Update"></td>
					</tr>
				</table>
			</form>
	</div>
        <!-- Footer -->
        <?php include '../partials/footer.php' ?>
    </body>
</html>

