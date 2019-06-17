<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<!DOCTYPE html>

<html>

<head>
    <title>Cadastro na plataforma - UTFPR - Atividade Complementar</title>
    <meta name="description" content="Página para o cadastro na plataforma de gerenciamento de atividade complementar" />
    <meta name="keyboards" content="UTFPR, Atividade, Complementar" />

    <meta http-equiv="content-type" content="text/html" charset="UTF-8">

    <link rel="shortcut icon" href="image/favicon.ico" />

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

    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>

<body class="bg-warning ">

    <div class="container mt-3 mb-5 col-11 col-sm-7 col-md-6">
        <div class="text-center">
            <a href="index.php">
                <img class="img-fluid" class="rounded" src="./image/CAC-Logo.svg" alt="Logo" width="175px" />
            </a>
        </div>

        <div class="container card shadow mt-3 p-5">
            <h1>Cadastro</h1>
            <?php
            //Mandando uma valor para email e password para serem preenchidos automáticamente
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : "";
            unset($_SESSION['email']);
            $password = isset($_SESSION['password']) ? $_SESSION['password'] : "";
            unset($_SESSION['password']);
            $name = isset($_SESSION['name']) ? $_SESSION['name'] : "";
            unset($_SESSION['name']);

            //Verificando se recebeu alguma mensagem
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>

            <form class="form" method="POST" action="valida_cadastro.php">

                <div class="form-group">
                    <label class="control-label">Nome </label>
                    <input type="text" class="form-control" placeholder="Digite o nome..." name="name" id="name" value="<?= $name ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Email </label>
                    <input type="email" class="form-control" placeholder="Digite o email..." name="email" id="email" value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Senha </label>
                    <input class="form-control" type="password" placeholder="Digite sua Senha..." name="password" id="password" value="<?= $password ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Confirmação de Senha </label>
                    <input class="form-control" type="password" placeholder="Digite sua Senha novamente..." name="password_aux" id="password_aux">
                </div>
                <div class="form-group">
                    <label class="control-label">Curso </label>
                    <select name="curso" class="form-group custom-select">
                        <option selected>Selecione o Curso</option>
                        <option name="Eng_Computacao">Engenharia de Computação</option>
                        <option name="Eng_Software">Engenharia de Software</option>
                        <option name="Eng_Eletrica">Engenharia Elétrica</option>
                        <option name="Eng_Mecacnica">Engenharia Mecânica</option>
                        <option name="Eng_ControleAutomacao">Engenharia de Controle e Automação</option>
                        <option name="ADS">ADS - Análise e Desnevolvimento de Sitemas</option>
                        <option name="Matematica">Licenciatura em Matemática</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">Período </label>
                    <input class="form-control col-3" type="number" placeholder="Apenas número..." name="periodo" id="periodo">
                </div>

                <button type="" class="btn btn-warning">Cadastrar</button>
            </form>

        </div>
    </div>



</body>

</html>