<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM user WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /libro/inicio.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>
<?php ?>
<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include 'partials/header.php' ?>
    <body>
      <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
      <?php endif; ?>
      <div class="container" align="center" style="padding-top:10px;">
            <h1>Iniciar Sesion</h1><span>o <a href="signup.php">Registrarse</a></span>
      </div>         
      <div class="container" style="padding-top:10px;padding-left:25%;padding-right:25%;padding-buttom:50px;">
        <div class="card-group">
          <div class="card">
            <img class="card-img-top" src="https://cadenaser00.epimg.net/ser/imagenes/2020/04/23/cultura/1587643807_253115_1587661712_noticia_normal_recorte1.jpg" alt="Card image cap">
            <div class="card-body">
              <form action="login.php" method="POST">
                <input name="email" class="form-control" type="text" placeholder="Correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
                <input name="password" class="form-control" type="password" placeholder="Contraseña" required>
                <input type="submit" class="form-control btn btn-outline-success" value="Continuar">
              </form>
            </div>
          </div>
        </div> 
      </div>
      <!-- Footer -->
      <?php include 'partials/footer.php' ?>
    </body>
</html>
