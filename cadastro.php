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
		$password_aux = $_POST['password_aux'];
		$curso = $_POST['curso'];
		
		if ($password != $password_aux)
		{
			echo "<br><br>Senhas não correspondem. Voltando para a página de cadastro em 3 segundos.";
			header("refresh: 3; url=http://calculadoraac.epizy.com/cadastro.html");
		}
		else
		{
			$res = $mysqli->query("select * from usuario where email = '".$email."'");
			if ($res->num_rows > 0)
			{
				echo "<br><br>Já existe um usuário cadastrado com esse e-mail. Voltando para a página de cadastro em 3 segundos.";
				header("refresh: 3; url=http://calculadoraac.epizy.com/cadastro.html");
			}
			else
			{
				$res = $mysqli->query("insert into usuario (email, senha, curso) values ('".$email."', MD5('".$password."'), '".$curso."')");
				
				if ($mysqli->affected_rows > 0)
				{
					echo "<br><br>Usuário Cadastrado. Voltando para a página inicial em 3 segundos.";
					header("refresh: 3; url=http://calculadoraac.epizy.com");
				}
				else
				{
					echo "Erro.";
				}
			}
		}
		
		$mysqli->close();
	?>
	
    </body>

</html>