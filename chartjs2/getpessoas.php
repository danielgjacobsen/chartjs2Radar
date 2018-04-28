<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);

$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT pessoa FROM avaliacoes WHERE login = '$login_cookie' and time = '".$q."' group by pessoa order by pessoa";
$select = mysqli_query($connect, $query);
$option = '';
while($row = mysqli_fetch_assoc($select)){
$option .= '<option value = "'.$row['pessoa'].'">'.$row['pessoa'].'</option>';
}
mysqli_close($connect);

echo "<label>Pessoa</label>
      <select name="pessoa" id="pessoa">
          <?php echo $option; ?>
      </select>";
?>
</body>
</html>
