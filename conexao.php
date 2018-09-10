<?php
	
	$banco = "cadastro";
	$conexao = @mysql_connect("localhost", "root", "edu1213346") or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());

?>