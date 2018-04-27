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
	   	<script>
			function showPessoas(str) {
			    if (str == "") {
				document.getElementById("txtHint").innerHTML = "";
				return;
			    } else { 
				if (window.XMLHttpRequest) {
				    // code for IE7+, Firefox, Chrome, Opera, Safari
				    xmlhttp = new XMLHttpRequest();
				} else {
				    // code for IE6, IE5
				    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				    }
				};
				xmlhttp.open("GET","getpessoas.php?q="+str,true);
				xmlhttp.send();
			    }
			}
	    	</script>
	</head>
	<body>
		<?php 
			include 'menu.php';
		?>
		<form action="cadastroPessoa.php" method="post">
			<fieldset>
				<div class="campo">
					<select name="time" id="time" onchange="showPessoas(this.value)">
				      		<?php echo $optionTime; ?>
				  	</select>
				</div>
				<div class="campo" id="txtHint"><b>Selecione o time para abrir a lista das pessoas...</b></div>
				<button type="submit" name="submit">Salvar</button>
			</fieldset>
		</form>
	</body>
<html>
