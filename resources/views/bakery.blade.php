
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/carrossel.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Padaria Andreza</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #e6cfb3;
      color: #2b2b2b;
    }

    header {
      background-color: #965204;
      color: rgb(19, 12, 12);
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #8f7325;
      display: flex;
      justify-content: center;
      gap: 20px;
      padding: 10px;
    }

    nav a {
      color: #2b2b2b;
      font-weight: bold;
      text-decoration: none;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .hero {
      background-image: url('https://upload.wikimedia.org/wikipedia/commons/6/6f/Bakery_interior.jpg');
      background-size: cover;
      background-position: center;
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
    }

    .carousel {
      position: relative;
      max-width: 900px;
      margin: 30px auto;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 2px 2px 6px rgba(0,0,0,0.2);
    }

    .carousel img {
      width: 100%;
      display: none;
    }

    .carousel img.active {
      display: block;
    }

    .container {
      max-width: 900px;
      margin: auto;
      padding: 20px;
    }

    .section {
      margin: 30px 0;
      text-align: center;
    }

    .products {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      width: 250px;
      box-shadow: 2px 2px 6px rgba(0,0,0,0.1);
    }

    .card img {
      width: 100%;
      border-radius: 8px;
    }

    footer {
      background-color: #54352b;
      color: white;
      text-align: center;
      padding: 10px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Padaria Andreza</h1>
    <p style="font-family: impact;">Pães fresquinhos todos os dias</p>
  </header>

  <nav>
    <a href="#sobre">Sobre</a>
    <a href="#produtos">Produtos</a>
    <a href="#contato">Contato</a>
  </nav>

  <div class="hero">
    <h2>Bem-vindo à nossa padaria!</h2>
  </div>

  <!-- Carrossel de imagens -->
   <setInterval></setInterval> 
  <div class="carousel">
    <img src="https://images.tcdn.com.br/img/img_prod/854009/pao_frances_1_5kg_20_paes_copa_388_1_918af1f8a84cc76788732df2a7146bbf.jpeg" class="active" alt="Pão francês">
    <img src="https://delicious.com.br/wp-content/uploads/2020/11/DSC_0323.jpg" alt="Bolo caseiro">
    <img src="https://guiadacozinha.com.br/wp-content/uploads/2019/11/bomba-de-chocolate.jpg" alt="Doce de padaria">
  </div>

  <div class="container">
    <div class="section" id="sobre">
      <h2>Sobre Nós</h2>
      <p>
        Somos apaixonados por pães, bolos e doces. Para abrir o
        <span style="color:#d64545;">apetite</span>,
        <span style="color:#f4b400;">alegria</span> e
        <span style="color:#2e7d32;">frescor</span>.
      </p>
    </div>

    <div class="section" id="produtos">
      <h2>Nossos Produtos</h2>
      <div class="products">
        <div class="card">
          <img src="https://images.tcdn.com.br/img/img_prod/854009/pao_frances_1_5kg_20_paes_copa_388_1_918af1f8a84cc76788732df2a7146bbf.jpeg" alt="Pão">
          <h3>Pães Artesanais</h3>
          <p>Crocantes por fora, macios por dentro.</p>
        </div>

        <div class="card">
          <img src="https://delicious.com.br/wp-content/uploads/2020/11/DSC_0323.jpg" alt="Bolos">
          <h3>Bolos Caseiros</h3>
          <p>Feitos com carinho e ingredientes selecionados.</p>
        </div>

        <div class="card">
          <img src="https://guiadacozinha.com.br/wp-content/uploads/2019/11/bomba-de-chocolate.jpg" alt="Doces">
          <h3>Doces Variados</h3>
          <p>Delícias para alegrar o seu <span style="color:#f4b400;">dia</span>.</p>
        </div>
      </div>
    </div>

    <div class="section" id="contato">
      <h2>Contato</h2>
      <p>📍 Rua das Flores, 123</p>
      <p>📞 (12) XXXX-XXXXX</p>
    </div>
  </div>

  <footer>
    <p>© 2025 Padaria Andreza - Todos os direitos reservados</p>
  </footer>

  <script>
    const imagens = document.querySelectorAll('.carousel img');
    let indice = 0;

    function trocarImagem() {
      imagens[indice].classList.remove('active');
      indice = (indice + 1) % imagens.length;
      imagens[indice].classList.add('active');
    }

    setInterval(trocarImagem, 3000); // troca a cada 3 segundos
  </script>
</body>
</html>