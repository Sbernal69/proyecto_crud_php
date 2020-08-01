<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include '../partials/header.php' ?>
    <body>
        <!-- Navbar -->
        <?php include '../partials/navbar.php' ?>
		<div class="content" align="center" style="padding-top:20px;" ><h1>Comprar Libro</h1></div>
		<div class="container">
			<div align="center"><a href="index.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Regresar a Cliente</a></div>
		</div>
        <div class="container" align="center" style="padding-top:20px;">
			<form action="add2.php" method="post" name="form1">
				<table width="25%" border="0">
					<tr>
						<td>Nombre</td>
						<td><input type="text" class="form-control" name="nombre" placeholder="Nombre" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>Autor</td>
						<td><input type="text" class="form-control" name="autor" placeholder="Autor" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>Tema</td>
						<td><input type="text" class="form-control" name="tema" placeholder="Tema" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>Idioma</td>
						<td><input type="text" class="form-control" name="idioma" placeholder="Idioma" pattern="([A-zÀ-ž\s]){2,}" onkeypress = "return event.charCode> = 48 && event.charCode <= 57 || event.charCode> = 97 && event.charCode <= 122 || event.charCode> = 65 && event.charCode <= 90 || evento .charCode == 32 " required></td>
					</tr>
					<tr>
						<td>Valor Compra</td>
						<td><input type="text" class="form-control" name="valorcompra" placeholder="Valor Compra" required></td>
					</tr>
					<tr>
						<td>Fecha Compra</td>
						<td><input type="date" class="form-control" name="fechacompra" required></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="form-control btn btn-outline-success" name="Submit" value="Add"></td>
					</tr>
				</table>
			</form>
		</div>
        <!-- Footer -->
        <?php include '../partials/footer.php' ?>
    </body>
</html>
