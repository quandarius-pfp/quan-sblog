<?php 



	$mysqli = new mysqli("sql206.epizy.com","epiz_30088799","2BN6NCu0PTaB","epiz_30088799_blogs");



	// Check connection

	if ($mysqli->connect_errno) {

	  echo "Káº¿t ná»‘i MYSQLi lá»—i" . $mysqli->connect_error;

	  exit();

	}



?>