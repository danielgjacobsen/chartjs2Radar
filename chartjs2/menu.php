<div id='cssmenu'>
  <ul>
    <li ><a href='index.php'>Home</a></li>
    <?php
      if($perfil_cookie == "admin"){
        echo"<li><a href='cadastroForm.php'>Usu&aacute;rios</a></li>";
      }
    ?>		
    <li><a href='cadastroPessoaForm.php' onclick='setcookie("menuSel","Novo");' <?php if($_COOKIE['menuSel']=='Novo'){ echo"class='active'";} ?>>Novo</a></li>
    <li><a href='graficos.php'>Gr&aacute;ficos</a></li>
    <li><a href='logout.php'>Sair</a></li>
  </ul>
</div>
