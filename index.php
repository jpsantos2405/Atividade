<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/base2.css">
  <title>MVM</title>
</head>

<body>
   <header>
    <?php require_once "_parts/_header.php"; ?>
  </header>

  <div id="carousel1" class="carousel slide mt-5 pt-5" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/Inicial.png" class="d-block w-100" alt="Moto Vintage">
      </div>
      <div class="carousel-item">
        <img src="images/Inicial2.png" class="d-block w-100" alt="Carro Roadster">
      </div>
      <div class="carousel-item">
        <img src="images/Inicial4.png" class="d-block w-100" alt="Carro Crossover">
      </div>
      <div class="carousel-item">
        <img src="images/Inicial3.png" class="d-block w-100" alt="Carro Crossover">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <main class="container my-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/Opala.png" class="card-img-top" alt="Opala">
          <div class="card-body">
            <h5 class="card-title">Chevrolet Opala</h5>
            <p class="card-text">O Chevrolet Opala foi fabricado entre 1968 e 1992, inspirado no modelo alemão Opel
              Rekord e no americano Impala.
              Um fato curioso é que ele já serviu como carro de viatura em alguns estados brasileiros...</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/MotoCB.png" class="card-img-top" alt="MotoCB">
          <div class="card-body">
            <h5 class="card-title">Moto CB 650R</h5>
            <p class="card-text">A moto CB 650R apesar de ser atual, trás um modelo vintage,
              com um estilo Neo Sports Café, que combina elementos clássicos das motos Café Racer dos anos 50 e 60 com a
              modernidade e esportividade...</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/Kombi.png" class="card-img-top" alt="Volkswagen Kombi">
          <div class="card-body">
            <h5 class="card-title">Volkswagen Kombi</h5>
            <p class="card-text">Conhecida no Brasil como Corujinha, estamos falando da 1ª geração da Volkswagen Bus.
              A referência alemã dela é “Typ 2”, simplesmente porque o Fusca era o “Typ 1”...</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/Charger.png" class="card-img-top" alt="Carro Charge">
          <div class="card-body">
            <h5 class="card-title">Dodge Charger 1970</h5>
            <p class="card-text"> Charger é um carro fabricado pela Dodge, parte do grupo Chrysler,
              e a versão de 1970 pertence à segunda geração do modelo, produzida entre 1968 e 1970...</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/Cacique.png" class="card-img-top" alt="Moto Cacique">
          <div class="card-body">
            <h5 class="card-title">Moto Cacique</h5>
            <p class="card-text"> A Moto Cacique é uma motocicleta brasileira que marcou época especialmente nas décadas
              de 1950 e 1960...</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="images/Supra.png" class="card-img-top" alt="Carro Toyota Supra">
          <div class="card-body">
            <h5 class="card-title">Toyota Supra Mark IV</h5>
            <p class="card-text">O Toyota Supra Mark IV (A80) é um dos carros esportivos japoneses mais icônicos de
              todos os tempos. Produzido entre 1993 e 2002, ele conquistou uma legião de fãs ao redor do mundo...</p>
          </div>
        </div>
      </div>

    </div>
  </main>

  <footer>
    <?php require_once "_parts/_footer.php"; ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>