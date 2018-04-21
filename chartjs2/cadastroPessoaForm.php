<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);
  $login_cookie = $_COOKIE['login'];
  $perfil_cookie = $_COOKIE['perfil'];
  if(!isset($login_cookie)){
    echo"<script language='javascript' type='text/javascript'>alert('Necessário realizar login para acessar esta funcionalidade!');window.location.href='login.html';</script>";
    die();
  }
?>
<!doctype html>
	<head>
	   <meta charset='utf-8'>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="css/menu_styles.css">
	   <link rel="stylesheet" href="css/formulario.css">
	   <title>Selo</title>
	</head>
	<body>
		<?php 
			include 'menu.php';
		?>
		<form action="#" method="post">
		    <fieldset>
			<fieldset class="grupo">
			    <div class="campo">
				<label for="nome">Nome</label>
				<input type="text" id="nome" name="nome" style="width: 10em" value="">
			    </div>
			    <div class="campo">
				<label for="snome">Sobrenome</label>
				<input type="text" id="snome" name="snome" style="width: 10em" value="">
			    </div>
			</fieldset>
			<div class="campo">
			    <label>Sexo</label>
			    <label>
				<input type="radio" name="sexo" value="masculino"> Masculino
			    </label>
			    <label>
				<input type="radio" name="sexo" value="feminino"> Feminino
			    </label>
			</div>
			<div class="campo">
			    <label for="email">E-mail</label>
			    <input type="text" id="email" name="email" style="width: 20em" value="">
			</div>
			<div class="campo">
			    <label for="telefone">Telefone</label>
			    <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
			</div>

			<fieldset class="grupo">
			    <div class="campo">
				<label for="cidade">Cidade</label>
				<input type="text" id="cidade" name="cidade" style="width: 10em" value="">
			    </div>
			    <div class="campo">
				<label for="estado">Estado</label>
				<select name="estado" id="estado">
				    <option value="">--</option>
				    <option value="PR">PR</option>
				</select>
			    </div>
			</fieldset>

			<div class="campo">
			    <label for="mensagem">Mensagem</label>
			    <textarea rows="6" style="width: 20em" id="mensagem" name="mensagem"></textarea>
			</div>

			<div class="campo">
			    <label>Newsletter</label>
			    <label>
				<input type="checkbox" name="newsletter" value="1"> Gostaria de receber a Newsletter da empresa
			    </label>
			</div>

			<button type="submit" name="submit">Enviar</button>
		    </fieldset>
		</form>
	</body>
<html>
