<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include '../partials/header.php' ?>
    <body>
        <!-- Navbar -->
        <?php include '../partials/navbar.php' ?>
		<div class="content" align="center" style="padding-top:20px;" ><h1>Comprar Libro</h1></div>
        <div class="container" align="center" style="padding-top:20px;">
			<form action="add2.php" method="post" name="form1">
				<table width="25%" border="0">
					<tr>
						<td>Nombre</td>
						<td><input type="text" name="nombre"></td>
					</tr>
					<tr>
						<td>Autor</td>
						<td><input type="text" name="autor"></td>
					</tr>
					<tr>
						<td>Tema</td>
						<td><input type="text" name="tema"></td>
					</tr>
					<tr>
						<td>Idioma</td>
						<td><input type="text" name="idioma"></td>
					</tr>
					<tr>
						<td>Valor Compra</td>
						<td><input type="text" name="valorcompra"></td>
					</tr>
					<tr>
						<td>Fecha Compra</td>
						<td><input type="text" name="fechacompra"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Add"></td>
					</tr>
				</table>
			</form>
		</div>
        <!-- Footer -->
        <?php include '../partials/footer.php' ?>
    </body>
</html>
