<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<p>
<?php
    echo $_GET['tempout'];
	?>
	</p>
	<p>
	<?php
	echo isset($_GET['tempin']) ? $_GET['tempin'] : 'нет данных';
	?>
	</p>
	<p>
	<?php
	echo isset($_GET['pulse']) ? $_GET['pulse'] : 'нет данных';
?>
</p>

</body>
</html>

