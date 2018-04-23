<?php
    $menuSel = $_COOKIE['menuSel'];
?>

<div id='cssmenu'>
  <ul>
    <li <?php if($menuSel=='Home'){ echo"class='active'"; } ?>><a href='index.php'>Home</a></li>
    <?php
      if($perfil_cookie == "admin"){
        echo"<li><a href='cadastroForm.php'>Usu&aacute;rios</a></li>";
      }
    ?>		
    <li <?php if($menuSel=='Novo'){ echo"class='active'"; } ?>><a href='cadastroPessoaForm.php' onclick='setcookie("menuSel","Novo");'>Novo</a></li>
    <li ><a href='graficos.php'>Gr&aacute;ficos</a></li>
    <li><a href='logout.php'>Sair</a></li>
  </ul>
</div>
