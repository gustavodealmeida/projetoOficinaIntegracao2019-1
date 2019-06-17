<?php
include "conecta_banco.php";
//Utilizando sessão para validar cadastro
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
extract($_POST);



if ($password != $password_aux) {
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	$_SESSION['name'] = $name;
	$_SESSION['msg'] = "<div class='alert alert-danger'>Senhas não correspondem</div>";
	header("Location: cadastro.php");
} else {
	$res = $mysqli->query("select * from usuario where email = '" . $email . "'");
	if ($res->num_rows > 0) {
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		$_SESSION['name'] = $name;
		$_SESSION['msg'] = "<div class='alert alert-danger'> Já existe um usuário cadastrado com esse <strong>e-mail</strong>.</div>";
		header("Location: cadastro.php");
		//echo "<br><br>Já existe um usuário cadastrado com esse e-mail. Voltando para a página de cadastro em 3 segundos.";
		//header("refresh: 3; url=http://calculadoraac.epizy.com/cadastro.html");
	} else {
		$periodo = intval($periodo);

		$res = $mysqli->query("insert into usuario (email, senha, curso, nome, periodo) values ('" . $email . "', MD5('" . $password . "'), '" . $curso . "','" . $name . "','" . $periodo . "')");

		if ($mysqli->affected_rows > 0) {
			$_SESSION['msg'] = "<div class='alert alert-success'> Usuário Cadastrado.</div>";
			header("Location: index.php");
			//echo "<br><br>Usuário Cadastrado. Voltando para a página inicial em 3 segundos.";
			//header("refresh: 3; url=http://calculadoraac.epizy.com");
		} else {
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['name'] = $name;
			$_SESSION['msg'] = "<div class='alert alert-danger'> Não foi possível efetuar o cadastro</div>";
			header("Location: cadastro.php");
		}
	}
}
$mysqli->close();
