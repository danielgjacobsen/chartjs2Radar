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
  $connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
  $query = "SELECT time FROM avaliacoes WHERE login = '$login_cookie' group by time order by time";
  $select = mysqli_query($connect, $query);
  $optionTime = '';
  while($row = mysqli_fetch_assoc($select)){
    $optionTime .= '<option value = "'.$row['time'].'">'.$row['time'].'</option>';
  }
  mysqli_close($connect);
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
				
				<button type="submit" name="submit">Salvar</button>
			</fieldset>
		</form>
	</body>
<html>
