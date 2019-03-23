<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
</head>
<body>
		<?php 
			include("classrevista.php");
			
			session_start();


			if(!empty($_POST)){
				


	
}
 ?>
 	<a href="listar_revistas.php">Listar Revistas e noticias</a>
	||
	<a href="form_revista.php">Cadastrar revista</a>
	<br/><br/>
	<form method="post" action="form_noticia.php">

		Escolha a revista:
		<select name="cod_revista">
			<option>::Selecione uma revista</option>
			<?php 
				foreach ($_SESSION["revista"] as $i=>$r) {
					echo "<option value='$i'>".$r->get_nome()."</option>";
				}

			 ?>
		</select>
		<br/><br/>
		<input type="text" name="titulo" placeholder="Título da noticia .." />
		<br/><br/>
		<input type="text" name="resumo" placeholder="resumo da noticia ..."/>
		<br/><br/>
		<textarea name="materia" placeholder="materia..">
		</textarea>
		<br/><br/>
		<input type="text" name="foto" placeholder="foto noticia"/>
		<br/><br/>
		<button>Cadastrar Notícias</button>
		
	</form>
</body>
</html>