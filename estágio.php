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

    .container {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;  
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .sidebar-buttons {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
    }

    .sidebar-buttons button {
        background-color: #6A9CE6;
        color: white;
        border: none;
        border-radius: 100px;
        padding: 20px;
        width: 100%;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .sidebar-buttons button:hover {
        background-color: #5586d1;
    }

    @media (max-width: 480px) {
        .container {
            padding: 20px;
        }

        .sidebar-buttons button {
            font-size: 14px;
            padding: 15px;
        }
    }
</style>

<body>

<div class="container">
    <h2>Área de Estágio e Emprego</h2>

    <div class="sidebar-buttons">
        <a href="Currículo.php"><button>Modelo de Currículo</button></a>
        <a href="vagasdeestagio.php"><button>Vagas De Estágio</button></a>
        <a href="entrevista.php"><button>Entrevistas Marcadas</button></a>
    </div>
</div>

</body>

<?php require_once('footer.php'); ?>
