<?php
    $login_cookie = $_COOKIE['login'];
    $perfil_cookie = $_COOKIE['perfil'];
    if(isset($login_cookie)){
	    
        if($perfil_cookie == "admin"){
            include 'menu_admin.html';
        }else{
            include 'menu.html';
        }
    }else{
	
        echo"<script language='javascript' type='text/javascript'>alert('Para acessar o sistema, faça login!');</script>";
        header("Location:login.html");
    }
?>
