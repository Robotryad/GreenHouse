<?php
/**
 * Created by PhpStorm.
 * User: AnSt
 * Date: 26.02.2018
 * Time: 17:12
 */

/**
    require_once ("db.php");
    require_once ("get.php");
 */

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Хохлов Кирилл, Старинин Андрей">
    <link rel="icon" href="favicon.ico">

    <title>Умная теплица 2.0 | Показания датчиков</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
 <img src="https://trello-attachments.s3.amazonaws.com/5aa4f00a0eea2bb6d7d3aff3/5b30f66a2ff726567c4b012f/cc838be196c04bd195a395641406cecf/Logo-SmartGreenHouse.png" width="100">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Ваша теплица</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Показания</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Управление</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="Auto-control.html">Автоматическое управление</a>
                    <a class="dropdown-item" href="Manual-control.html">Ручное управление</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Справочник</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Info.html">О теплице</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">

    <div class="row">
        <div class="col">
            <h1>Показания датчиков</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Текущие показания датчиков</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="list-group">
                <li>Дата и время</li>
                <li>Влажность воздуха</li>
                <li>Температура воздуха</li>
                <li>Влажность почвы</li>
                <li>Температура почвы</li>
                <li>Освещённость</li>
				<li>Уровень воды</li>
            </ul>
        </div>
        <!--
        <div class="col">
            <ul class="list-group">
                <li><?=$date_time?></li>
                <li><?=$humidity?></li>
                <li><?=$temperature?></li>
                <li><?=$moisture?></li>
                <li><?=$temperature_soil?></li>
                <li><?=$light?></li>
				<li><?=$water_level?></li>
            </ul>
        </div>
        -->
        <div class="col">
            <ul class="list-group">
                <li>Не поступили данные</li>
                <li>Не поступили данные</li>
                <li>Не поступили данные</li>
                <li>Не поступили данные</li>
                <li>Не поступили данные</li>
                <li>Не поступили данные</li>
				<li>Не поступили данные</li>
            </ul>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col">
            <h2>История показаний датчиков</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Дата и время</th>
                    <th scope="col">Температура воздуха</th>
                    <th scope="col">Влажность воздуха</th>
                    <th scope="col">Температура почвы</th>
                    <th scope="col">Влажность почвы</th>
                    <th scope="col">Освещение</th>
					<th scope="col">Уровень воды</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>3</td>
                    <td>3</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
					<td>328758345873487</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</main><!-- /.container -->
<footer class="container">

</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
