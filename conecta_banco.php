<?php
	$mysqli = new mysqli('sql109.epizy.com', 'epiz_23972170', 'FQtdGT7lKa3O', 'epiz_23972170_cac_db');
	if ($mysqli->connect_errno)
	{
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	//echo 'Conexão bem sucedida';
	//mysql_close($link);
?>