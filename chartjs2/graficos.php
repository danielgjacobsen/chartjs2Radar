<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);
  $login_cookie = $_COOKIE['login'];
  $perfil = $_COOKIE['perfil'];
  if(!isset($login_cookie)){
    echo"<script language='javascript' type='text/javascript'>alert('Necessário realizar login para acessar esta funcionalidade!');window.location.href='login.html';</script>";
    die();
  }
  $connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
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
		<form action="apresentaRadar.php" method="post">
			<fieldset>
				<div class="campo">
					<label>Time</label>
          <select name="time" id="time">
              <?php
                $register = new Option();
                $query = "SELECT time FROM avaliacoes WHERE login = '$login_cookie' group by time";
                $option = $register->optionList($query);

                foreach ($option as $o) {
                    echo "<option>" . $o['time'] . "</option>";
                }
              ?>
          </select>           
				</div>
				<button type="submit" name="submit">Salvar</button>
			</fieldset>
		</form>
	</body>
<html>
