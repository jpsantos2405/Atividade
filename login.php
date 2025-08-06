<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/base2.css">
</head>

<body>
  <div class="page-wrapper">
  <header>
    <?php require_once "_parts/_header.php"; ?>
  </header>

    <main class="content d-flex justify-content-center align-items-center">
      <div class="login-container">
        <h3 class="text-center mb-4">Login</h3>
        <form action="validarLogin.php" method="post">
          <div class="mb-3">
            <label for="usuarioLogin" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="usuarioLogin" name="usuarioLogin" required>
          </div>
          <div class="mb-3">
            <label for="senhaLogin" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senhaLogin" name="senhaLogin" required>
          </div>
          <button type="submit" class="btn btn-dark" name="btnLogin">Efetuar Login</button>
        </form>
      </div>
    </main>

    <footer>
      <?php require_once "_parts/_footer.php"; ?>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>