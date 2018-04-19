<?php
    $login_cookie = $_COOKIE['login'];
    $perfil_cookie = $_COOKIE['perfil'];
    if(isset($login_cookie)){
	echo"<script language='javascript' type='text/javascript'>alert('Bem vindo ao Sistema Selo!');</script>";
    }else{	
        echo"<script language='javascript' type='text/javascript'>alert('Para acessar o sistema, faça login!');</script>";
        header("Location:login.html");
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
			   	<li><a href='radar-db-php.html'>Gráficosss</a></li>
			   	<li><a href='logout.php'>Sair</a></li>
				<li><a href='#'>Contact</a></li>
			</ul>
		</div>
	</body>
<html>
