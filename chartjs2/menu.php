<div id='cssmenu'>
  <ul>
    <li class='active'><a href='index.php'>Home</a></li>
    <?php
      if($perfil_cookie == "admin"){
        echo"<li><a href='cadastroForm.php' onClick="alert('Hello World')">Usu&aacute;rios</a></li>";
      }
    ?>		
    <li><a href='cadastroPessoaForm.php'>Novo</a></li>
    <li><a href='graficos.php'>Gr&aacute;ficos</a></li>
    <li><a href='logout.php'>Sair</a></li>
  </ul>
</div>
