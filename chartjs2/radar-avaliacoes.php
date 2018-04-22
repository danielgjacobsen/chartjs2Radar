<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);
  $login_cookie = $_COOKIE['login'];
  if(!isset($login_cookie)){
    echo"<script language='javascript' type='text/javascript'>alert('Necessário realizar login para acessar esta funcionalidade!');window.location.href='login.html';</script>";
    die();
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Radar de Avaliações Selo</title>
    
    <link href="css/default.css" rel="stylesheet">
    
</head>
<body>

	<div class="chart-container">
		<div class="doughnut-chart-container">
			<canvas id="radar-avaliacoes"></canvas>
		</div>

	</div>

	<!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/radar-db-php.js"></script>
    
</body>
</html>
