
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
}
$result->close();
$conn->close();
?>