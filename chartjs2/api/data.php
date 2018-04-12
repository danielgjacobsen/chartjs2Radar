<?php
//setting header to json
header('Content-Type: application/json');

$connect = mysqli_connect('db1mysql3p.sicredi.net', 'sonar', 'S0n@r', 'sonar');
if (!$connect) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$query  = " SELECT 'Alcemar' as nome, ";
$query .= "	   '10' as agressividade, ";
$query .= "	   '20' as extroversao, ";
$query .= "	   '20' as dominancia, ";
$query .= "       '20' as exatidao, ";
$query .= "       '20' as empatia, ";
$query .= "       '20' as entusiasmo, ";
$query .= "       '20' as multitarefas ";
$query .= " UNION  ";
$query .= " SELECT 'Paulo' as nome, ";
$query .= "	   '10' as agressividade, ";
$query .= "	   '55' as extroversao, ";
$query .= "	   '20' as dominancia, ";
$query .= "       '30' as exatidao, ";
$query .= "       '10' as empatia, ";
$query .= "       '70' as entusiasmo, ";
$query .= "       '90' as multitarefas ";
$query .= " UNION  ";
$query .= " SELECT 'Ana' as nome, ";
$query .= "	   '80' as agressividade, ";
$query .= "	   '40' as extroversao, ";
$query .= "	   '20' as dominancia, ";
$query .= "       '60' as exatidao, ";
$query .= "       '20' as empatia, ";
$query .= "       '90' as entusiasmo, ";
$query .= "       '100' as multitarefas ";  

$result = mysqli_query($connect, $query);
$data = array();
while ($row = mysqli_fetch_object($result)) {
    $data[] = $row;
}


// Free result set
mysqli_free_result($result);

//close connection
mysqli_close($connect);

//now print the data
print json_encode($data);

?>