<?php
    $login_cookie = $_COOKIE['login'];
    $perfil_cookie = $_COOKIE['perfil'];
    if(isset($login_cookie)){
        echo"Bem-Vindo, $login_cookie <br>";
        echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você<br>";
	    include 'menu.html';
        if($perfil_cookie == "admin"){
            echo "Hummmmm, vc é Administrador do sistema.......Parabéns!";
        }else{
            echo "Seja muito bem vindo, usuário!";
        }
    }else{
	
        echo"<script language='javascript' type='text/javascript'>alert('Para acessar o sistema, faça login!');</script>";
        header("Location:login.html");
    }
?>
