
	<?php
	include "conecta_banco.php";
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_name("Agora_Vai");
		session_start();
	}

	$email = $_POST['email'];
	$password = $_POST['password'];

	//echo "select * from usuario where email = '".$_POST['email']."' and senha = '".$password."'";

	$res = $mysqli->query("select * from usuario where email = '" . $email . "' and senha = MD5('" . $password . "')");

	if ($res->num_rows == 0) {
		$_SESSION['msg'] = "<div class='alert alert-danger'> <strong>E-mail</strong> ou <strong>senha</strong> incorretos.</div>";
		header("Location: index.php");
		//echo "<br><br>Usuário ou senha incorretos. Voltando para a página inicial em 3 segundos.";
		//header("refresh: 3; url=http://calculadoraac.epizy.com");
	} else {
		while ($row = mysqli_fetch_object($res)){
			$_SESSION['name'] = $row->nome;
			$_SESSION['periodo'] = $row->periodo;
			$_SESSION['curso'] = $row->curso;
		}

		//$_SESSION['name'] = ($res->fetch_array)['nome'];
		header("Location: menu.php");
	}

	$mysqli->close();
	?>
