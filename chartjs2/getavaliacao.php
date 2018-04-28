<?php
$p = strval($_GET['p']);
$t = strval($_GET['t']);
$login_cookie = $_COOKIE['login'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT * FROM avaliacoes WHERE login = '$login_cookie' and time = '$t' and pessoa = '$p' ";
$select = mysqli_query($connect, $query);


$row = mysqli_fetch_row($select);
  echo "<option value = " . $row['pessoa'] . ">" . $row['pessoa'] . "</option>";

mysqli_close($connect);
?>
