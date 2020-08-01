<?php ?>
<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include 'partials/header.php' ?>
    <body>
        <!-- Navbar -->
        <?php include 'partials/navbar.php' ?>
        <div class="container" align="center" style="padding:20px;">
            <h1>Bienvenidos</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="https://www.yomimeconlibro.com/wp-content/uploads/2018/09/Tres-libros-para-leer-frente-al-mar-1080x720.jpg" alt="Card image">
                    </div>
                </div>
                <div class="col-6" style="padding-top:50px;">
                    <a class="btn btn-primary btn-lg btn-block" href="./libroclientes/index.php" role="button">Registar Clientes</a>
                    <a class="btn btn-dark btn-lg btn-block" href="./librocompra/index.php" role="button">Comprar Libros</a>
                    <a class="btn btn-primary btn-lg btn-block" href="./librodestruccion/index.php" role="button">Destruccion Libros</a>
                    <a class="btn btn-dark btn-lg btn-block" href="./librodonacion/index.php" role="button">Donacion Libros</a>
                    <a class="btn btn-primary btn-lg btn-block" href="./libroventa/index.php" role="button">Venta Libros</a>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include 'partials/footer.php' ?>
    </body>
</html>

