<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);
  $login_cookie = $_COOKIE['login'];
  $perfil_cookie = $_COOKIE['perfil'];
  if(isset($_COOKIE['time'])) {
    $time_cookie = $_COOKIE['time'];
  }else{
    $time_cookie = "";
  }
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
		<form action="cadastroPessoa.php" method="post">
			<fieldset>
				<div class="campo">
					<label for="time">Time</label>
					<input type="text" id="time" name="time" style="width: 500px" value="<?php echo $time_cookie;?>">
				</div>
				<div class="campo">
					<label for="Pessoa">Pessoa</label>
					<input type="text" id="pessoa" name="pessoa" style="width: 500px" value="">
				</div>
				<div class="campo">
					<label>L&iacute;der</label>
					<label>
						<input type="radio" name="lider" value="sim"> Sim
					</label>
					<label>
						<input type="radio" name="lider" value="nao" checked=true> N&atilde;o
					</label>
				</div>
				<div class="campo">
					<label>Agressividade</label>
					<input type="text" id="Agressividade" name="Agressividade" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Desenv_Relacionamento</label>
					<input type="text" id="Desenv_Relacionamento" name="Desenv_Relacionamento" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Facilidade_Mudancas</label>
					<input type="text" id="Facilidade_Mudancas" name="Facilidade_Mudancas" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Extroversao</label>
					<input type="text" id="Extroversao" name="Extroversao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Dominancia</label>
					<input type="text" id="Dominancia" name="Dominancia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Desenv_Trab</label>
					<input type="text" id="Desenv_Trab" name="Desenv_Trab" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Formalidade</label>
					<input type="text" id="Formalidade" name="Formalidade" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Condescendencia</label>
					<input type="text" id="Condescendencia" name="Condescendencia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Perfil_Tecnico</label>
					<input type="text" id="Perfil_Tecnico" name="Perfil_Tecnico" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Exatidao</label>
					<input type="text" id="Exatidao" name="Exatidao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Detalhismo</label>
					<input type="text" id="Detalhismo" name="Detalhismo" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Perfil_Artistico</label>
					<input type="text" id="Perfil_Artistico" name="Perfil_Artistico" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Paciencia</label>
					<input type="text" id="Paciencia" name="Paciencia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Empatia</label>
					<input type="text" id="Empatia" name="Empatia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Sociabilidade</label>
					<input type="text" id="Sociabilidade" name="Sociabilidade" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Entusiasmo</label>
					<input type="text" id="Entusiasmo" name="Entusiasmo" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Cap_Sonhar</label>
					<input type="text" id="Cap_Sonhar" name="Cap_Sonhar" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Automotivacao</label>
					<input type="text" id="Automotivacao" name="Automotivacao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Concentracao</label>
					<input type="text" id="Concentracao" name="Concentracao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Independencia </label>
					<input type="text" id="Independencia" name="Independencia" style="width: 50px" value="">
				</div>
				<button type="submit" name="submit">Salvar</button>
			</fieldset>
		</form>
	</body>
<html>
