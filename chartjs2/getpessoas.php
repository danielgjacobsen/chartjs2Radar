<?php
$q = strval($_GET['q']);
$login_cookie = $_COOKIE['login'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT pessoa FROM avaliacoes WHERE login = '$login_cookie' and time = '$q' group by pessoa order by pessoa";
$select = mysqli_query($connect, $query);

echo "<label>Pessoa</label>
        <select name='pessoa' id='pessoa' style="width: 500px">";

while($row = mysqli_fetch_array($select)) {
  echo "<option value = " . $row['pessoa'] . ">" . $row['pessoa'] . "</option>";
}
echo "</select>";
mysqli_close($connect);
?>
