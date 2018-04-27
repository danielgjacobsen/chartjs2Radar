<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT pessoa FROM avaliacoes WHERE login = '$login_cookie' and time = '".$q."' group by pessoa order by pessoa";
$select = mysqli_query($connect, $query);
$optionPessoa = '';
while($row = mysqli_fetch_assoc($select)){
    $optionPessoa .= '<option value = "'.$row['pessoa'].'">'.$row['pessoa'].'</option>';
}

echo "<label>Time</label>
<select name="time" id="time">
$option
</select>";
mysqli_close($connect);
?>
