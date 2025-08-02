<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/login.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
  <header>
    <?php require_once "_parts/_header.php"; ?>
  </header>


  <div class="container d-flex justify-content-center">
    <div class="login-container">
      <h3 class="text-center mb-4">Login</h3>
      <form action="validarLogin.php" method="post">
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuário</label>
          <input type="text" class="form-control" id="usuarioLogin" name="usuarioLogin" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senhaLogin" name="senhaLogin" required>
        </div>
        <button type="submit" class="btn btn-dark" name="btnLogin">Efetuar Login</button>
      </form>
    </div>
  </div>
  <footer>
    <?php require_once "_parts/_footer.php"; ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>