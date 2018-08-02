<?php
/**
 * Created by PhpStorm.
 * User: AnSt
 * Date: 26.02.2018
 * Time: 17:47
 */

$error_get_data = "Не поступили данные";

if (isset($_GET['years'])) {
    $years = $_GET['years'];
} else {
    $years = $error_get_data;
}
if (isset($_GET['months'])) {
    $months = $_GET['months'];
} else {
    $months = $error_get_data;
}
if (isset($_GET['days'])) {
    $days = $_GET['days'];
} else {
    $days = $error_get_data;
}
if (isset($_GET['hour'])) {
    $hour = $_GET['hour'];
} else {
    $hour = $error_get_data;
}
if (isset($_GET['minute'])) {
    $minute = $_GET['minute'];
} else {
    $minute = $error_get_data;
}
if (isset($_GET['second'])) {
    $second = $_GET['second'];
} else {
    $second = $error_get_data;
}
if (isset($_GET['moisture'])) {
    $moisture = $_GET['moisture'];
} else {
    $moisture = $error_get_data;
}
if (isset($_GET['humidity'])) {
    $humidity = $_GET['humidity'];
} else {
    $humidity = $error_get_data;
}
if (isset($_GET['temp_soil'])) {
    $temperature_soil = $_GET['temp_soil'];
} else {
    $temperature_soil = $error_get_data;
}
if (isset($_GET['temperature'])) {
    $temperature = $_GET['temperature'];
} else {
    $temperature = $error_get_data;
}
if (isset($_GET['light'])) {
    $light = $_GET['light'];
} else {
    $light = $error_get_data;
}
if (isset($_GET['water_level'])) {
    $light = $_GET['water_level'];
} else {
    $light = $error_get_data;
}
$date_time =$years.$months.$days.$hour.$minute.$second;

?>