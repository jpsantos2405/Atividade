<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scle=1.0">
        <meta name="description" content="Encontre o melhor para você aqui!!">
        <meta name="keywords" content="Site sobre carros e motos">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/base2.css">
        <meta name="author" content="Kamilla Kempim">

        <title>Contatos</title>
    </head>


    <body> 
    <header>
    <?php require_once "_parts/_header.php"; ?>
  </header>
        <h1 class="title">Contate-nos!</h1>
        
        <form>  
    <div class="espacado">
        <label for="campo_nome">Digite seu Nome:</label>
        <input id="campo_nome" type="text" placeholder="Digite seu nome!">
    </div>

    <div class="espacado">
        <label for="campo_email">Digite seu E-mail:</label>
        <input id="campo_email" type="email" placeholder="Digite seu e-mail!">
    </div>

    <div class="espacado">
        <label for="campo_tema">Digite o tema:</label>
        <input id="campo_tema" type="text" placeholder="Digite o tema do assunto!">
    </div>

    <div class="espacado">
        <label for="campo_msg">Digite a mensagem:</label>
        <input id="campo_msg" type="text" placeholder="Digite a mensagem!">
    </div>

    <br>
    <button type="submit" class="btn btn-dark" name="btnEnviar">Enviar mensagem</button>
</form>

    
    <h3><i class="fa-solid fa-phone"></i> Telefone: (99)99999-9999</h3>
    <hr>
    <h3><i class="fa-solid fa-envelope"></i> E-mail: Mazuttiautomoveis@gmail.com</h3>
    <hr>
    <h3><i class="fa-solid fa-location-dot"></i> Localização: Rua Rosa,123 - bairro flores</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6833.6425920190295!2d-61.18340690557261!3d-11.675520433156313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1754159695069!5m2!1spt-BR!2sbr" width="80%" height="300" style="border:0; display: block; margin: 0 auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
</body>
<footer>
    <?php require_once "_parts/_footer.php"; ?>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</html>