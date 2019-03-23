<?php 

	include("classrevista.php");

	session_start();

	$_SESSION["revista"][]= new Revista($_Post["nome"]);

	echo "Revista cadastrada";
 ?>