<?php require_once('config/config.php'); ?>

<?php require_once('header.php'); ?>

<style>
    /* Reset básico */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f9f9f9;
        
    }

    header img {
      height: 50px;
    }

    .main-content {
      flex: 1;
      padding: 40px;
      display: flex;
      gap: 20px;
    }

    .profile-card {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      width: 350px;
    }

    .profile-header {
      background-color: #5da2c5;
      padding: 20px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .profile-header .avatar {
      display: flex;
      align-items: center;
    }

    .avatar-circle {
      width: 60px;
      height: 60px;
      background-color: #cfe9f7;
      border-radius: 50%;
      margin-right: 15px;
    }

    .edit-btn {
      background-color: white;
      color: black;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    .profile-body {
      padding: 20px;
    }

    .profile-body div {
      margin-bottom: 10px;
    }

    .profile-body span {
      font-weight: bold;
      display: inline-block;
      width: 100px;
    }

    .report-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      flex: 1;
      padding: 20px;
    }

    .report-card h3 {
      margin-top: 0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }

    table thead {
      background-color: #5da2c5;
      color: white;
    }

    table th, table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }
</style>

<body>

  

  <div class="main-content">
    <!-- Card do Perfil -->
    <div class="profile-card">
      <div class="profile-header">
        <div class="avatar">
          <div class="avatar-circle"></div>
          <h2>Eduardo Ferreira</h2>
        </div>
        <button class="edit-btn">Editar Perfil</button>
      </div>
      <div class="profile-body">
        <div><span>Matrícula:</span> 202230412</div>
        <div><span>Curso:</span> Informática</div>
        <div><span>Turno:</span> Matutino</div>
        <div><span>Status:</span> Ativo</div>
      </div>
    </div>

    <!-- Card com Boletim e Frequência -->
    <div class="report-card">
      <h3>Boletim</h3>
      <table>
        <thead>
          <tr>
            <th>Disciplina</th>
            <th>Unidade 1</th>
            <th>Unidade 2</th>
            <th>Unidade 3</th>
            <th>Média</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Matemática</td><td>7.0</td><td>6.0</td><td>8.0</td><td>7.0</td></tr>
          <tr><td>Física</td><td>8.0</td><td>7.5</td><td>6.0</td><td>7.1</td></tr>
          <tr><td>Química</td><td>6.5</td><td>7.0</td><td>7.5</td><td>7.0</td></tr>
          <tr><td>Geografia</td><td>8.0</td><td>7.0</td><td>6.0</td><td>7.0</td></tr>
          <tr><td>Biologia</td><td>9.0</td><td>8.0</td><td>7.5</td><td>8.2</td></tr>
          <tr><td>Português</td><td>8.5</td><td>8.0</td><td>9.0</td><td>8.5</td></tr>
          <tr><td>P.VIS</td><td>9.0</td><td>9.0</td><td>8.5</td><td>8.8</td></tr>
          <tr><td>A.P.SI</td><td>7.0</td><td>7.5</td><td>8.0</td><td>7.5</td></tr>
          <tr><td>L.M.CO</td><td>8.0</td><td>8.0</td><td>7.5</td><td>7.8</td></tr>
          <tr><td>R.C.II</td><td>6.5</td><td>7.0</td><td>6.5</td><td>6.7</td></tr>
          <tr><td>I.P.WE</td><td>7.5</td><td>8.0</td><td>8.5</td><td>8.0</td></tr>
          <tr><td>S.S.RE</td><td>8.0</td><td>7.5</td><td>7.0</td><td>7.5</td></tr>
          <tr><td>HSST</td><td>7.0</td><td>6.5</td><td>7.5</td><td>7.0</td></tr>
          <tr><td>L.P.RE</td><td>9.0</td><td>8.5</td><td>9.0</td><td>8.8</td></tr>
          <tr><td>L.PROG</td><td>8.0</td><td>9.0</td><td>8.5</td><td>8.5</td></tr>
          <tr><td>PEXP II</td><td>10</td><td>9.5</td><td>10</td><td>9.8</td></tr>
          <tr><td>MTEMP</td><td>6.0</td><td>6.5</td><td>7.0</td><td>6.5</td></tr>
          <tr><td>Artes</td><td>8.0</td><td>9.0</td><td>8.0</td><td>8.3</td></tr>
          <tr><td>I.M.CO</td><td>7.5</td><td>8.0</td><td>7.5</td><td>7.7</td></tr>
        </tbody>
      </table>

      <h3>Frequência</h3>
      <table>
        <thead>
          <tr>
            <th>Disciplina</th>
            <th>Frequência</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Matemática</td><td>95%</td></tr>
          <tr><td>Português</td><td>88%</td></tr>
          <tr><td>Geografia</td><td>90%</td></tr>
          <tr><td>Física</td><td>93%</td></tr>
          <tr><td>Química</td><td>87%</td></tr>
          <tr><td>Biologia</td><td>92%</td></tr>
          <tr><td>P.VIS</td><td>96%</td></tr>
          <tr><td>A.P.SI</td><td>91%</td></tr>
          <tr><td>L.M.CO</td><td>89%</td></tr>
          <tr><td>R.C.II</td><td>86%</td></tr>
          <tr><td>I.P.WE</td><td>93%</td></tr>
          <tr><td>S.S.RE</td><td>90%</td></tr>
          <tr><td>HSST</td><td>88%</td></tr>
          <tr><td>L.P.RE</td><td>94%</td></tr>
          <tr><td>L.PROG</td><td>90%</td></tr>
          <tr><td>PEXP II</td><td>99%</td></tr>
          <tr><td>MTEMP</td><td>85%</td></tr>
          <tr><td>Artes</td><td>92%</td></tr>
          <tr><td>I.M.CO</td><td>90%</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</body>

<?php require_once('footer.php'); ?>
