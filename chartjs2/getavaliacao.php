<?php
$p = strval($_GET['p']);
$t = strval($_GET['t']);
$login_cookie = $_COOKIE['login'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT * FROM avaliacoes WHERE login = '$login_cookie' and time = '$t' and pessoa = '$p' ";
$select = mysqli_query($connect, $query);

echo "<div class="campo">
        <label for="time">Time</label>
        <input type="text" id="time" name="time" style="width: 500px" value="<?php echo $time_cookie;?>">
</div>";
$row = mysqli_fetch_row($select)
  echo "<option value = " . $row['pessoa'] . ">" . $row['pessoa'] . "</option>";
echo "</select>";

mysqli_close($connect);
?>
