<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!doctype html>
<html lang="en">
    <!-- Header -->
    <?php include '../partials/header.php' ?>
    <body>
      <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
      <?php endif; ?>

      <div class="container" align="center" style="padding-top:50px;">
            <h1>Registarse</h1><span>o <a href="login.php">Iniciar Sesion</a></span>
      </div>
      <div class="container" style="padding-top:40px;padding-left:25%;padding-right:25%;">
        <form action="signup.php" method="POST">
          <input name="email" class="form-control" type="text" placeholder="Correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
          <input name="password" class="form-control" type="password" placeholder="Contraseña" required>
          <input name="confirm_password" class="form-control"  type="password" placeholder="Confirmar Contraseña" required>
          <input type="submit" class="form-control btn btn-outline-success" value="Aceptar">
        </form>
      </div>
        <!-- Footer -->
        <?php include '../partials/footer.php' ?>
    </body>
</html>