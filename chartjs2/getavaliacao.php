<?php
$p = strval($_GET['p']);
$t = strval($_GET['t']);
$login_cookie = $_COOKIE['login'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT * FROM avaliacoes WHERE login = '$login_cookie' and time = '$t' and pessoa = '$p' ";
$select = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($select)) {
  
  echo "<hr>
        <div class='campo'>
                <label>Time</label>
                <input type='text' id='time' name='time' style='width: 500px' value=" . $row['time'] . ">
        </div>
        <div class='campo'>
                <label>Pessoa</label>
                <input type='text' id='pessoa' name='pessoa' style='width: 500px' value=" . $row['pessoa'] . ">
        </div>
        <div class='campo'>
                <label>L&iacute;der</label>
                <label>";
  if($row['lider'] == 'sim'){
    echo "<input type='radio' name='lider' value='sim' checked=true> Sim ";
  }else{
    echo "<input type='radio' name='lider' value='sim' checked=false> Sim ";
  }
  echo "        </label>
                <label>";
  if($row['lider'] == 'sim'){
    echo "<input type='radio' name='lider' value='nao' checked=false> N&atilde;o ";
  }else{
    echo "<input type='radio' name='lider' value='nao' checked=true> N&atilde;o ";
  }
  echo "                    
                </label>
        </div>";
}

mysqli_close($connect);
?>
