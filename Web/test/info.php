<?php
/**
 * Created by PhpStorm.
 * User: Upgrade
 * Date: 11.03.2018
 * Time: 12:55
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
    <title>Умная теплица 2.0</title>

    <!-- Bootstrap core CSS -->
	<link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#">Умная теплица</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.html">Ваша теплица</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sensor-readings.php">Показания</a>
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
					<a class="nav-link" href="#">О теплице</a>
				</li>
			</ul>
		</div>
	</nav>
	<main role="main" class="container">


	<div>
		<h1>Умная теплица 2.0</h1>
        <h2>Проект "Умная теплица"</h2>
		<p>Подготовили:</p>
		<div class="row">
            <div class="col">
				<!-- Button trigger modal -->
				<button type="button" data-toggle="modal" data-target="#exampleModal6">
					<img src="https://sun9-1.userapi.com/c831408/v831408913/aa073/3vkqGTxGdrk.jpg" class="rounded float-left" width="100">
				</button>
				<!-- Modal -->
					<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<p><a href="https://vk.com/id213881913">Жуков Павел</a></p>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Один из создателей теплицы, ученик МБОУ "Лицей №8".</p>
									<img src="https://sun9-1.userapi.com/c831408/v831408913/aa073/3vkqGTxGdrk.jpg" class="rounded mx-auto d-block" width="400">
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="col">
				<!-- Button trigger modal -->
				<button type="button" data-toggle="modal" data-target="#exampleModal7">
					<img src="https://pp.userapi.com/c845524/v845524913/66bf/hhZxy80AjN8.jpg" class="rounded float-left" width="100">
				</button>
				<!-- Modal -->
					<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<p><a href="https://vk.com/k.khokhlov1">Хохлов Кирилл</a></p>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Создатель сайта для удалённого управления теплицей, ученик МБОУ "Лицей №1".</p>
									<img src="https://pp.userapi.com/c845524/v845524913/66bf/hhZxy80AjN8.jpg" class="rounded mx-auto d-block" width="400">								
								</div>
							</div>
						</div>
					</div> 
			</div>
            <div class="col">
				<!-- Button trigger modal -->
				<button type="button" data-toggle="modal" data-target="#exampleModal8">
					<img src="https://pp.userapi.com/c982/u3707569/a_e091c8ce.jpg" class="rounded float-left"  width="100">
				</button>
				<!-- Modal -->
					<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<p><a href="https://vk.com/anst.foto">Старинин Андрей</a></p>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Один из создателей теплицы и преподаватель клуба робототехники "Роботрек" г. Воронеж.</p>
									<img src="https://pp.userapi.com/c982/u3707569/a_e091c8ce.jpg" class="rounded mx-auto d-block"  width="400">
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="col">
				<!-- Button trigger modal -->
				<button type="button" data-toggle="modal" data-target="#exampleModal9">
					<img src="https://vignette.wikia.nocookie.net/logopedia/images/e/e1/Incognito_logo.png/revision/latest/scale-to-width-down/220?cb=20160422124241" class="rounded float-down"width="100">
				</button>
				<!-- Modal -->
					<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<p>Лунь Андрей</p>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Один из создателей теплицы и преподаватель клуба робототехники "Роботрек" г. Воронеж.</p>
									<img src="https://vignette.wikia.nocookie.net/logopedia/images/e/e1/Incognito_logo.png/revision/latest/scale-to-width-down/220?cb=20160422124241" class="rounded mx-auto d-block" width="400">								
								</div>
							</div>
						</div>
					</div> 
			</div>
		</div>
		<div class="row">
			<div class="col">
			<p>Жуков Павел</p>
			</div>
			<div class="col">
			<p>Хохлов Кирилл</p>
			</div>
			<div class="col">
			<p>Старинин Андрей</p>
			</div>
			<div class="col">
			<p>Лунь Андрей</p>
			</div>
		</div> 
        <br>
        <h3>Цель проекта</h3>
		<br>
        <p>Создание теплицы, которой можно управлять удалённо.</p>
        <br>
        <h3>Кадры с места событий</h3>
		<div class="row">
			<div class="col">
			<!-- Button trigger modal -->
				<button type="button" data-toggle="modal" data-target="#exampleModal">
					<img src="https://pp.userapi.com/c844520/v844520913/5c1a/ceX7iI76NTQ.jpg" class="img-thumbnail">
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="https://pp.userapi.com/c844520/v844520913/5c1a/ceX7iI76NTQ.jpg" class="rounded mx-auto d-block" height="500">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<button type="button" data-toggle="modal" data-target="#exampleModal1">
					<img src="https://sun9-9.userapi.com/c840426/v840426913/67b6b/btw25sJWfqk.jpg" class="img-thumbnail">
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="https://sun9-9.userapi.com/c840426/v840426913/67b6b/btw25sJWfqk.jpg" class="rounded mx-auto d-block" height="500">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<button type="button" data-toggle="modal" data-target="#exampleModal2">
					<img src="https://sun9-6.userapi.com/c824504/v824504913/eff23/TCvIelQIsjk.jpg" class="img-thumbnail">
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="https://sun9-6.userapi.com/c824504/v824504913/eff23/TCvIelQIsjk.jpg" class="rounded mx-auto d-block" height="500">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<button type="button" data-toggle="modal" data-target="#exampleModal3">
					<img src="https://pp.userapi.com/c834100/v834100913/ef64a/UPnuA8dh2gs.jpg" class="img-thumbnail">
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="https://pp.userapi.com/c834100/v834100913/ef64a/UPnuA8dh2gs.jpg" class="rounded mx-auto d-block" height="500">
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="col">
				<button type="button" data-toggle="modal" data-target="#exampleModal4">
					<img src="https://pp.userapi.com/c831209/v831209913/af2ad/9xA68CXxG7k.jpg" class="img-thumbnail">
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="https://pp.userapi.com/c831209/v831209913/af2ad/9xA68CXxG7k.jpg" class="rounded mx-auto d-block" height="500">
							</div>
						</div>								
					</div>
				</div>
			</div>
			<div class="col">
				<button type="button" data-toggle="modal" data-target="#exampleModal5">
					<img src="https://pp.userapi.com/c847120/v847120913/15e9/r6P9PIxfUhQ.jpg" class="img-thumbnail">
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">	
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="https://pp.userapi.com/c847120/v847120913/15e9/r6P9PIxfUhQ.jpg" class="rounded mx-auto d-block" height="500">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h6>Наши награды</h6>
	<p></p>
	</div>