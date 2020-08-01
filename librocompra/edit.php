<?php
include_once("config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM compra WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

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
<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include '../partials/header.php' ?>
    <body>
        <!-- Navbar -->
        <?php include '../partials/navbar.php' ?>
		<div class="content" align="center" style="padding-top:20px;" ><h1>Editar Libros</h1></div>
		<div class="container">
			<div align="center"><a href="index.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Regresar a Libros</a></div>
		</div>
        <div class="container" align="center" style="padding-top:20px;">
			<form name="form1" method="post" action="edit2.php">
				<table border="0">
					<tr>
						<td>autor</td>
						<td><input type="text" class="form-control" name="autor" value="<?php echo $autor;?>" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>nombre</td>
						<td><input type="text" class="form-control" name="nombre" value="<?php echo $nombre;?>" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>tema</td>
						<td><input type="text" class="form-control" name="tema" value="<?php echo $tema;?>" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>idioma</td>
						<td><input type="text" class="form-control" name="idioma" value="<?php echo $idioma;?>" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>Valor Compra</td>
						<td><input type="text" class="form-control" name="valorcompra" value="<?php echo $valorcompra;?>" required></td>
					</tr>
					<tr>
						<td>Fecha compra</td>
						<td><input type="date" class="form-control" name="fechacompra" value="<?php echo $fechacompra;?>" required></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit"  class="form-control btn btn-outline-success" name="update" value="Update"></td>
					</tr>
				</table>
			</form>
		</div>
        <!-- Footer -->
        <?php include '../partials/footer.php' ?>
    </body>
</html>
