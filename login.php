<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>UTFPR - Atividade Complementar</title>
        <meta name="description" content="Página principal da plataforma de gerencimento de Atividade Complementar" />
        <meta name="keyboards" content="UTFPR, Atividade, Complementar" />

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
	
	<?
		include "conecta_banco.php";
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		//echo "select * from usuario where email = '".$_POST['email']."' and senha = '".$password."'";
		
		$res = $mysqli->query("select * from usuario where email = '".$email."' and senha = MD5('".$password."')");
		
		if ($res->num_rows == 0)
		{
			echo "<br><br>Usuário ou senha incorretos. Voltando para a página inicial em 3 segundos.";
			header("refresh: 3; url=http://calculadoraac.epizy.com");
		}
		else
		{
			echo "Logado!";
		}
	
		$mysqli->close();
	?>
	
    </body>

</html>