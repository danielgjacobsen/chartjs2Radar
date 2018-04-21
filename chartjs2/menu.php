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
