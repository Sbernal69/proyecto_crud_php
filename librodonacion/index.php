<?php

include_once("config.php");

$result = $conn->query("SELECT * FROM donacion ORDER BY id DESC");

?>
<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include '../partials/header.php' ?>
    <body>
        <!-- Navbar -->
        <?php include '../partials/navbar.php' ?>
		<div class="content" align="center" style="padding-top:20px;" ><h1>Donacion de libros</h1></div>	
        <div class="container" style="position: relative;padding-top:20px;padding-bottom: 40px;">
			<div align="center" style="position: absolute;margin-left: 43%;z-index: 1;"><a href="add.php" class="btn btn-outline-success" role="button" aria-pressed="true">Agregar Donacion</a></div>
			<table id="example" class="table table-bordered table-hover table-striped" >
				<thead class="thead-dark">
				<tr>
						<th class="centerText" scope="col">Autor</th>
						<th class="centerText" scope="col">Nombre Libro</th>
						<th class="centerText" scope="col">Tema</th>
						<th class="centerText" scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($row = $result->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr>";
						echo "<td>".$row['autor']."</td>";
						echo "<td>".$row['nombrelibro']."</td>";
						echo "<td>".$row['temalibro']."</td>";
						echo "<td><div class='row'><div class='col-6'><a href=\"edit.php?id=$row[id]\"><i class='fa fa-edit' aria-hidden='true'></i></a></div><div class='col-6'><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-times' aria-hidden='true'></i></a></div></div></td>";
					}
					?>
				</tbody>
			</table>
        </div>
		<script>
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>	
        <!-- Footer -->
        <?php include '../partials/footer.php' ?>
    </body>
</html>