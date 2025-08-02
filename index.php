<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/base2.css">
    <title>Mazutti Automovéis</title>
</head>

<body>
    <!-- nosso cabeçalho -->

    <header>
    <?php require_once "_parts/_header.php"; ?>
  </header>
        <div class="empresa">
            <h1 class="title">Mazutti Automovéis</h1>
            <p class="txt3">As melhores motos e carros da região Norte!</p>

    <!-- menu de navegação -->
    <main>
        <div class="txt3">
            Encontre o automóvel ideial para você e sua família!
        </div>

        <section id="Moto Naked">
            <h2 class="title">Moto Naked</h2>
            <div class="msn">
                <img src="images/Moto.jpg" width = "600" class="img1">
                <p class="txt3">A Moto Naked é perfeita para quem busca liberdade sobre duas rodas, 
                sem abrir mão do estilo e da potência. Com seu visual agressivo e moderno, 
                ela dispensa carenagens e revela toda a sua mecânica, 
                transmitindo uma sensação de força bruta e autenticidade.</p>
            </div>
        </section>
        <section id="Carro Roadster">
        <h2 class="title">Carro Roadster</h2>
            <div class="msn">
                <img src="images/Tesla.jpg" width = "600" class="img1">
                <p class="txt3">O Carro Roadster é sinônimo de sofisticação, 
                esportividade e liberdade. Com seu design compacto, baixo e aerodinâmico, esse modelo conversível foi feito para quem ama dirigir com emoção e estilo.
                Ideal para estradas abertas e dias ensolarados, o Roadster proporciona uma experiência de direção única, com potência, estabilidade e o vento no rosto. Seu interior é projetado para oferecer conforto e tecnologia de ponta, 
                tornando cada viagem ainda mais prazerosa.</p>
            </div>
        </section>
        <section id="Carro Crossover">
       <h2 class="title">Carro Crossover</h2>
            <div class="msn">
                <img src="images/Chevrolet.jpg"  width = "600" class="img1">
                <p class="txt3">O Carro Crossover é a escolha ideal para quem busca um veículo que 
                    combina o melhor dos SUVs com a praticidade dos carros urbanos. 
                    Com visual robusto e imponente, ele oferece espaço de sobra para toda a família, 
                    além de um porta-malas generoso para suas aventuras e compromissos do dia a dia.</p>
            </div>
        </section>
        <section id="Moto Sports">
        <h2 class="title">Moto Sports</h2>
            <div class="msn">
                <img src="images/MotoSports.jpg" width = "600" class="img1">
                <p class="txt3">A Moto Sports é feita para quem vive a paixão pela velocidade e 
                    não abre mão de alta performance. Com design aerodinâmico e arrojado, 
                    ela entrega potência e controle em cada curva, 
                    sendo perfeita para quem busca emoção sobre duas rodas.</p>
            </div>
        </section>
    </main>
    <footer>
    <?php require_once "_parts/_footer.php"; ?>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>