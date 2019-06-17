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
        <div class="container mt-3 mb-3 col-12 col-sm-10 col-md-8 col-lg-6">

            <div class="text-center">
                <a href="#">
                    <img class="img-fluid" class="rounded" src="./image/CAC-Logo.svg" alt="Logo" width="175px" />
                </a>
            </div>

            <div class="container card shadow mt-3 mb-3 p-5 ">
                <h1>Login</h1>
                <?php 
                    if(session_status() !== PHP_SESSION_ACTIVE){
			            session_start();
                    }
                                $email = "";
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                ?>
                <form class="form" method="POST" action="login.php">
                    
                    <div class="form-group">
                        <label class="control-label">Email </label>
                        <input type="email" class="form-control" placeholder="Digite o email..." name="email"
                            id="email" />
                    </div>

                    <div class="form-group">
                        <label class="control-label">Senha </label>
                        <input class="form-control" type="password" placeholder="Digite sua Senha..." name="password"
                            id="password" />
                    </div>

                    <div class="form-group">
                        <button type="" class="btn btn-warning">Entrar</button>
                    </div>

                    <a class="d-block" href="cadastro.php">Não possui cadastro ainda? Cadastre-se.</a>
                </form>

            </div>
        </div>

    </body>

</html>