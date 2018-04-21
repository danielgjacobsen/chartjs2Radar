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
	   <title>Selo</title>
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='index.php'>Home</a></li>
				<?php
				if($perfil_cookie == "admin"){
					echo"<li><a href='cadastroForm.php'>Usu&aacute;rios</a></li>";
				}
				?>		
				<li><a href='#'>Novo</a></li>
			  <li><a href='radar-db-php.html'>Gráficosss</a></li>
			  <li><a href='logout.php'>Sair</a></li>
			</ul>
		</div>
	</body>
<html>
