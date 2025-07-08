<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login - Plataforma Escolar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      margin: 0;
      background-color: #f2f9ff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      margin-bottom: 30px;
      text-align: center;
      color: #333;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #5da2c5;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #4887a7;
    }

    .error {
      color: red;
      font-size: 14px;
      text-align: center;
    }

    .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .logo img {
      height: 60px;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="logo">
      <img src="img/ceaat.png" alt="Logo da Escola">
    </div>
    <h2>Login do Aluno</h2>

    <form onsubmit="return validarLogin()">
      <input type="text" id="usuario" placeholder="Usuário ou Matrícula" required>
      <input type="password" id="senha" placeholder="Senha" required>
      <div class="error" id="erroLogin"></div>
      <button type="submit">Entrar</button>
    </form>
  </div>

  <script>
    function validarLogin() {
      const usuario = document.getElementById('usuario').value;
      const senha = document.getElementById('senha').value;
      const erro = document.getElementById('erroLogin');

      
      const usuarioValido = "202230412";
      const senhaValida = "16082007";

      if (usuario === usuarioValido && senha === senhaValida) {
       
        window.location.href = "area-aluno.html";
        return false;
      } else {
        erro.textContent = "Usuário ou senha incorretos.";
        return false;
      }
    }
  </script>

</body>
</html>


