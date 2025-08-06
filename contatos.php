<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Encontre o melhor para você aqui!!">
  <meta name="keywords" content="Site sobre carros e motos">
  <meta name="author" content="Kamilla Kempim">
  <title>Contatos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/base2.css">
</head>

<body>
  <header>
    <?php require_once "_parts/_header.php"; ?>
  </header>

  <main>
    <section class="contato-section container">
      <div class="row p-4 bg-white rounded shadow">
        <div class="col-md-6 mb-4">
          <h2>Contate-nos!</h2>
          <p><strong>Telefone:</strong> (99)99999-9999</p>
          <p><strong>E-mail:</strong> MazuttiVintageMotors@gmail.com</p>
          <p><strong>Localização:</strong> Rua Rosa,123 - bairro flores</p>

          <h5 class="mt-4">Siga-nos</h5>
          <div class="d-flex gap-3 fs-4">
            <a href="https://www.facebook.com/?locale=pt_BR"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.google.com/"><i class="fab fa-google"></i></a>
          </div>
        </div>

        <div class="col-md-6">
          <form action="#" method="post">
            <div class="mb-3">
              <label for="campo_nome" class="form-label">Digite seu Nome:</label>
              <input id="campo_nome" name="nome" type="text" class="form-control" placeholder="Digite seu nome!" required>
            </div>

            <div class="mb-3">
              <label for="campo_email" class="form-label">Digite seu E-mail:</label>
              <input id="campo_email" name="email" type="email" class="form-control" placeholder="Digite seu e-mail!" required>
            </div>

            <div class="mb-3">
              <label for="campo_tema" class="form-label">Digite o tema:</label>
              <input id="campo_tema" name="tema" type="text" class="form-control" placeholder="Digite o tema do assunto!" required>
            </div>

            <div class="mb-3">
              <label for="campo_msg" class="form-label">Digite a mensagem:</label>
              <textarea id="campo_msg" name="mensagem" class="form-control" rows="4" placeholder="Digite a mensagem!" required></textarea>
            </div>

            <button type="submit" class="btn btn-dark">Enviar mensagem</button>
          </form>
        </div>
      </div>

      <div class="mt-4 text-center">
        <iframe src="https://www.google.com/maps/embed?pb=..." width="80%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
  </main>

  <footer>
    <?php require_once "_parts/_footer.php"; ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
