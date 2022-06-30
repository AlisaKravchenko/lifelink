<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лайфлинк</title>
    <!-- favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#70c3db">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#5b9dd2">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

	<?php 
		include("php/nav.php")
	 ?>
	 <div class="container">
	 	<div class="support">
	 		<div class="inet-text-main">
				<img src="img/support-computer.png" alt="">
				<h4>Поддержка</h4>
			</div>
			<ul>
				<li><a href="support-connect.php">Настройка подключения</a></li>
				<li><a href="support-speed.php">Проверка скорости</a></li>
				<li><a href="support-problems.php">Самостоятельное устранение проблем</a></li>
				<li><a href="support-sub.php">Подписка на программы</a></li>
				<li><a href="support-policy.php">Политика конфиденциальности</a></li>
			</ul>
	 	</div>
	 </div>
	 <?php 
	include("php/footer.php")
	?>
	<script src="js/script.js"></script>
</body>
</html>