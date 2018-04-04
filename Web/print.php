<?php
$hn = 'mysql24.hostland.ru';
$db = 'host1323541_greenhouse';
$un = 'host1323541';
$pw = '149af709';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);


$query = "SELECT * FROM table_zone1";
$result = $conn->query($query);
$rows = $result->num_rows;
for ($k = 0; $k < $rows ; ++$k)
$result->data_seek($k);
$row  = $result->fetch_array(MYSQLI_ASSOC);
echo 'date: ' .$row['date_time']. '<br>';
echo 'moisture: ' .$row['moisture']. '<br>';
echo 'humidity: ' .$row['humidity']. '<br>';
echo 'temp_soil: ' .$row['temperature_soil']. '<br>';
echo 'temp_air: ' .$row['temperature_air']. '<br>';
echo 'light: ' .$row['lighting']. '<br>';
$result->close();
$conn->close();

?>