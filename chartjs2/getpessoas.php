<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$q = intval($_GET['q']);
$login_cookie = $_COOKIE['login'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT pessoa FROM avaliacoes WHERE login = '$login_cookie' and time = '".$q."' group by pessoa order by pessoa";

echo $query;
mysqli_close($connect);
?>
</body>
</html>
