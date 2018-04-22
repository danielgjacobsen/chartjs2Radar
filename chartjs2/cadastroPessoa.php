<?php 
$login = $_COOKIE['login'];
$time = $_POST['time'];
$pessoa = $_POST['pessoa'];
$lider = $_POST['lider'];
$Agressividade = $_POST['Agressividade'];
$Desenv_Relacionamento = $_POST['Desenv_Relacionamento'];
$Facilidade_Mudancas = $_POST['Facilidade_Mudancas'];
$Extroversao = $_POST['Extroversao'];
$Dominancia = $_POST['Dominancia'];
$Desenv_Trab = $_POST['Desenv_Trab'];
$Formalidade = $_POST['Formalidade'];
$Condescendencia = $_POST['Condescendencia'];
$Perfil_Tecnico = $_POST['Perfil_Tecnico'];
$Exatidao = $_POST['Exatidao'];
$Detalhismo = $_POST['Detalhismo'];
$Perfil_Artistico = $_POST['Perfil_Artistico'];
$Paciencia = $_POST['Paciencia'];
$Empatia = $_POST['Empatia'];
$Sociabilidade = $_POST['Sociabilidade'];
$Entusiasmo = $_POST['Entusiasmo'];
$Cap_Sonhar = $_POST['Cap_Sonhar'];
$Automotivacao = $_POST['Automotivacao'];
$Independencia = $_POST['Independencia'];
setcookie("time",$time);

$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
if(isset($login)){
	if($time == "" || $time == null || $pessoa == "" || $pessoa == null || $Agressividade == "" || $Agressividade == null || $Desenv_Relacionamento == "" || $Desenv_Relacionamento == null || $Facilidade_Mudancas == "" || $Facilidade_Mudancas == null || $Extroversao == "" || $Extroversao == null || $Dominancia == "" || $Dominancia == null || $Desenv_Trab == "" || $Desenv_Trab == null || $Formalidade == "" || $Formalidade == null || $Condescendencia == "" || $Condescendencia == null || $Perfil_Tecnico == "" || $Perfil_Tecnico == null || $Exatidao == "" || $Exatidao == null || $Detalhismo == "" || $Detalhismo == null || $Perfil_Artistico == "" || $Perfil_Artistico == null || $Paciencia == "" || $Paciencia == null || $Empatia == "" || $Empatia == null || $Sociabilidade == "" || $Sociabilidade == null || $Entusiasmo == "" || $Entusiasmo == null || $Cap_Sonhar == "" || $Cap_Sonhar == null || $Automotivacao == "" || $Automotivacao == null || $Independencia == "" || $Independencia == null){
		echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos');window.location.href='cadastroPessoaForm.php';</script>";
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('Ah Velha');window.location.href='cadastroPessoaForm.php';</script>";
	}
}else{	
	echo"<script language='javascript' type='text/javascript'>alert('Para acessar o sistema, faça login!');</script>";
	header("Location:login.html");
}
?>
