<?php

isset($_GET['years']) ? $years = $_GET['years'] : $years = '00';
isset($_GET['months']) ? $months = $_GET['months'] : $months = '00';
isset($_GET['days']) ? $days = $_GET['days'] : $days = '00';
isset($_GET['hour']) ? $hour = $_GET['hour'] : $hour = '00';
isset($_GET['minute']) ? $minute = $_GET['minute'] : $minute = '00';
isset($_GET['second']) ? $second = $_GET['second'] : $second = '00';
isset($_GET['moisture']) ? $moisture = $_GET['moisture'] : $moisture = '00';
isset($_GET['humidity']) ? $humidity = $_GET['humidity'] : $humidity = '00';
isset($_GET['temp_soil']) ? $temp_soil = $_GET['temp_soil'] : $temp_soil = '00';
isset($_GET['temperature']) ? $temperature = $_GET['temperature'] : $temperature = '00';
isset($_GET['light']) ? $light = $_GET['light'] : $light = '00';

$date_time =$years.$months.$days.$hour.$minute.$second;

$hn = 'mysql24.hostland.ru';
$db = 'host1323541_greenhouse';
$un = 'host1323541';
$pw = '149af709';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "INSERT INTO table_zone1 VALUES($date_time, $temperature_air, $humidity, $temperature_soil, $moisture, $lighting)";
$result = $conn->query($query);
echo $query;
?>

<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Управление теплицей</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="http://greenhouse.anst-foto.ru/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://greenhouse.anst-foto.ru/weather-icons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="http://greenhouse.anst-foto.ru/weather-icons/css/weather-icons.min.css">
    <link href="style.css" rel="stylesheet"/>


</head>

<body>
<h2>Управление теплицей</h2>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Ваша теплица</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Показания</a></li>
                <li><a href="directions.php">Руководство пользователя</a></li>
                <li><a href="directory.php">Справочник растений</a></li>
                <li><a href="#">Выйти</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Управление <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="auto-control.php">Автоматическое управление</a></li>

                    </ul>

                </li>
                <li><a href="#"><?= $date_time ?></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Здесь видны показания датчиков</p>
                <ul>
                    <li>Датчик влажности почвы:
                        <?= $moisture ?>
                    <li>Датчик освещения:
                        <?php
                        echo $_GET['years'];
                        echo $_GET['months'];
                        echo $_GET['days'];
                        echo $_GET['hour'];
                        echo $_GET['minute'];
                        echo $_GET['second'];
                        echo $_GET['moisture'];
                        echo $_GET['humidity'];
                        echo $_GET['temp_soil'];
                        echo $_GET['temperature'];
                        echo $_GET['light'];
                        ?>
                    </li>
                    <li>Температура:
                    <?= $temperature_soil?>
                    <i class="wi wi-celsius"></i></li>
                    <li>Температура воздуха:
                    <?= $temperature_air?>
                    <i class="wi wi-celsius"></i></li>
                    <li>Влажность воздуха:
                        <?= $humidity?>
                        <i class="wi wi-celsius"></i></li>
                </ul>
                <form action="" method="post">
                    <label for="plant">Какое растение вам нужно найти?
                        <select name="plant">
                            <option value="something">что-то</option>
                            <option value="flower">что-то ещё</option>
                        </select>
                    </label>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>

</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Тут должна быть информация об авторском праве

            </div>
        </div>
    </div>

</footer>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>