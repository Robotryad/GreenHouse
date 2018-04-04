<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 06.02.2018
 * Time: 19:30
 */

$hn = 'mysql24.hostland.ru';
$db = 'host1323541_greenhouse';
$un = 'host1323541';
$pw = '149af709';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$hour = $_GET['hour'];
$minute = $_GET['minute'];
$second = $_GET['second'];
$moisture = $_GET['moisture'];
 $lighting = $_GET['light'];
$temperature_soil = $_GET['temp_soil'];
$temperature_air = $_GET['temperature'];
$humidity = $_GET['humidity'];

$hour = 1;
$minute = 22;
$second = 10;
$moisture = 50;
$lighting = 60;
$temperature_soil = 15;
$temperature_air = 27;
$humidity = 765;

$query = "INSERT INTO table_zone1 VALUES($hour, $temperature_air, $humidity, $temperature_soil, $moisture, $lighting)";
$result = $conn->query($query);
echo $query;
?>