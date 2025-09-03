<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - Padaria Andreza</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f3eb;
      color: #333;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #8b5e3c;
      color: #fff;
      text-align: center;
      padding: 20px;
    }
    section {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    }
    h1 {
      color: #8b5e3c;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin-top: 15px;
      font-weight: bold;
    }
    input, textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-top: 5px;
      font-size: 1rem;
    }
    button {
      margin-top: 20px;
      padding: 12px;
      background-color: #8b5e3c;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
    }
    button:hover {
      background-color: #6d472e;
    }
    .info {
      margin-top: 30px;
      padding: 15px;
      background: #fdfaf6;
      border: 1px solid #ddd;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Padaria Andreza</h1>
  </header>

  <section>
    <h1>Fale Conosco</h1>
    <p>Entre em contato conosco para fazer pedidos, tirar dúvidas ou enviar sugestões. 
       Será um prazer atender você!</p>

    <form method="POST">
        @csrf
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

      <button type="submit">Enviar</button>
    </form>

    <div class="info">
      <h2>Informações de Contato</h2>
      <p><strong>Endereço:</strong> Rua do Pão Quentinho, 123 - Centro</p>
      <p><strong>Telefone:</strong> (12) 3456-7890</p>
      <p><strong>E-mail:</strong> contato@padariaandreza.com.br</p>
    </div>
  </section>
</body>
</html>