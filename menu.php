<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>UTFPR - Atividade Complementar</title>
    <meta name="description" content="Página principal da plataforma de gerencimento de Atividade Complementar" />
    <meta name="keyboards" content="UTFPR, Atividade, Complementar" />

    <link rel="shortcut icon" href="image/favicon.ico" />

    <meta http-equiv="content-type" content="text/html" charset="UTF-8">

    <!-- For Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body class="bg-warning ">

    <div class="text-center mt-3">
        <a href="#">
            <img class="img-fluid" class="rounded" src="./image/CAC-Logo.svg" alt="Logo" width="175px" />
        </a>
    </div>

    <div class="container mt-3 mb-5">


        <div class="container card shadow float-left col-3 p-3 ml-5">

            <ul class="list-group list-group-flush">
                <h2>Menu</h2>
                <li class="list-group-item"><a class="text-dark text-left" href="#">Cadastrar Atividades</a></li>
                <li class="list-group-item"><a class="text-dark" href="#">Minhas Atividades</a></li>
                <li class="list-group-item"><a class="text-dark" href="#">Documentação</a></li>
                <li class="list-group-item"><a class="text-dark" href="#">Configurações</a></li>
            </ul>
        </div>



        <div class="container card shadow float-right col-8 p-5 mb-5 mr-3">
            <div>


                <div class="col-7 mb-5 float-left">
                    <h3>Pontuação</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="text-warning">Grupo 01 <div class="float-right font-weight-bolder">14/20<div>
                            </h5>
                        </li>
                        <li class="list-group-item">
                            <h5 class="text-danger">Grupo 02 <div class="float-right font-weight-bolder">4/20<div>
                            </h5>
                        </li>
                        <li class="list-group-item">
                            <h5 class="text-success">Grupo 03 <div class="float-right font-weight-bolder">30/30<div>
                            </h5>
                        </li>
                    </ul>
                </div>
                <div class="col-5 mt-3 float-left">
                    <h3>Situação</h3>
                    <p>Faltam horas complementares</p>
                </div>
            </div>


            <h3>Progresso</h3>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Grupo 01</div>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Grupo 02</div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 34%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Grupo 03</div>
            </div>

        </div>

        <div class="container card shadow float-left p-3 col-3 mt-3 ml-5">
            <?php
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_name("Agora_Vai");
                session_start();
            }

            $name = isset($_SESSION['name']) ? $_SESSION['name'] : "";
            $periodo = isset($_SESSION['periodo']) ? $_SESSION['periodo'] : "";
            $curso = isset($_SESSION['curso']) ? $_SESSION['curso'] : "";
            ?>

            <h4 class="text-uppercase"><?php echo $name ?></h4>
            <span><?php echo $curso ?></span>
            <span><?php echo $periodo ?>º Período </span>
            
        </div>

    </div>

</body>

</html>