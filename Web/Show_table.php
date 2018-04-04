
<?php // query.php
$hn = 'mysql24.hostland.ru';
$db = 'host1323541_greenhouse';
$un = 'host1323541_gh';
$pw = '1234';
 $conn = new mysqli ($hn, $un, $pw, $db );
 if ($conn->connect_error) die($conn->connect_error);
 $query = "SELECT * FROM table_zone1";
 $result = $conn->query($query);
 if (!$result) die ($conn->error);
 $rows = $result->num_rows;
 for ($j = 0 ; $j < $rows ; ++$j)
 {
     $result->data_seek($j);
     $row = $result->fetch_array(MYSQLI_ASSOC);
     echo 'Date: ' . $row['date_time'] . '<br>';
     echo 'temp_air: ' . $row['temperature_air'] . '<br>';
     echo 'humidity: ' . $row['humidity'] . '<br>';
     echo 'temp_soil: ' . $row['temperature_soil'] . '<br>';
     echo 'moisture: ' . $row['moisture'] . '<br>';
     echo 'lighting: ' . $row['lighting'];
 }
$result->close();
$conn->close();
?>
