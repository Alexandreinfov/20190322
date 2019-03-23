<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
</head>
<body>

	<?php 
if(!empty($_POST)){
	include("classrevista.php");

	session_start();

	$_SESSION["revista"][]= new Revista($_POST["nome"]);

	echo "Revista cadastrada<br/><br/>";

}
 ?>
	<a href="form_noticia.php">Listar Revistas</a>
	||
	<a href="form_noticia.php">Cadastrar noticia</a>
	<form method="post" action="form_revista.php">
		<input type="text" name="nome" placeholder="nome da revista>>>"/>
		<button>Cadastrar nova Revista</button>
	</form>
</body>
</html>