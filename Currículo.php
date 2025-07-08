<?php require_once('config/config.php'); ?>

<?php require_once('header.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Modelo de Currículo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #6A9CE6;
      color: #000;
      padding: 15px 20px;
      display: flex;
      align-items: center;
    }

    .menu-icon {
      font-size: 24px;
      margin-right: 20px;
      cursor: pointer;
    }

    .logo {
      height: 40px;
      margin-right: 15px;
    }

    .school-name {
      font-weight: bold;
      font-size: 16px;
    }

    .container {
      padding: 40px;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .section {
      margin-bottom: 40px;
    }

    .section p {
      margin: 8px 0;
    }

    .btn {
      background-color: #6A9CE6;
      color: white;
      border: none;
      padding: 5px 10px;
      margin-top: 10px;
      border-radius: 30px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      background-color: #5586d1;
    }

    ul {
      margin-top: 10px;
      padding-left: 20px;
    }

    input, textarea {
      width: 100%;
      margin: 8px 0;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    footer {
      background-color: #000;
      height: 30px;
      margin-top: 80px;
    }

    @media (max-width: 768px) {
      .container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <header>
    <span class="menu-icon">&#9776;</span>
    <img src="img/ceaat.png" alt="Logo da escola" class="logo">
    <span class="school-name">Colégio Estadual De Aplicação Anísio Teixeira</span>
  </header>

  <div class="container">
    <h2>Modelos de Currículo</h2>

    <div class="section">
      <p><strong>Modelo Tradicional</strong></p>
      <p>Ideal para a maioria das vagas.</p>
      <a href="curriculo/modelo-tradicional.pdf" target="_blank" class="btn">Visualizar PDF</a>
    </div>

    <div class="section">
      <p><strong>Modelo por Habilidades</strong></p>
      <p>Focado em competências.</p>
      <a href="curriculo/qualificacoes_lc_br_cta_2.pdf" target="_blank" class="btn">Visualizar PDF</a>
    </div>

    <div class="section">
      <p><strong>Criar Currículo Personalizado</strong></p>
      <form id="formCurriculo">
        <input type="text" id="nome" placeholder="Nome completo" required>
        <input type="text" id="Idade" placeholder="Idade" required>
        <input type="text" id="E-mail" placeholder="E-mail" required>
        <input type="text" id="Telefone" placeholder="Telefone" required>
        <input type="text" id="Endereço" placeholder="Endereço" required>
        <textarea id="formacao" rows="3" placeholder="Formação"></textarea>
        <textarea id="experiencia" rows="3" placeholder="Experiência profissional"></textarea>
        <textarea id="habilidades" rows="3" placeholder="Principais habilidades"></textarea>
        <button type="button" class="btn" onclick="gerarCurriculo()">Criar Currículo Online</button>
      </form>
    </div>
  </div>

  <script>
    async function gerarCurriculo() {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();

      const nome = document.getElementById('nome').value;
      const idade = document.getElementById('Idade').value;
      const email = document.getElementById('E-mail').value;
      const telefone = document.getElementById('Telefone').value;
      const endereco = document.getElementById('Endereço').value;
      const formacao = document.getElementById('formacao').value;
      const experiencia = document.getElementById('experiencia').value;
      const habilidades = document.getElementById('habilidades').value;

      doc.setFont("helvetica", "bold");
      doc.setFontSize(20);
      doc.text(nome, 20, 20);

      doc.setFontSize(12);
      doc.setFont("helvetica", "normal");
      doc.text(`Idade: ${idade}`, 20, 30);
      doc.text(`E-mail: ${email}`, 20, 38);
      doc.text(`Telefone: ${telefone}`, 20, 46);
      doc.text(`Endereço: ${endereco}`, 20, 54);

      doc.setFont("helvetica", "bold");
      doc.text("Formação:", 20, 70);
      doc.setFont("helvetica", "normal");
      doc.text(formacao || "Não informada", 20, 78);

      doc.setFont("helvetica", "bold");
      doc.text("Experiência Profissional:", 20, 95);
      doc.setFont("helvetica", "normal");
      doc.text(experiencia || "Não informada", 20, 103);

      doc.setFont("helvetica", "bold");
      doc.text("Habilidades:", 20, 120);
      doc.setFont("helvetica", "normal");
      doc.text(habilidades || "Não informadas", 20, 128);

      doc.save(`${nome.split(' ')[0] || 'curriculo'}.pdf`);
    }
  </script>

</body>
</html>


        <?php require_once('footer.php'); ?>