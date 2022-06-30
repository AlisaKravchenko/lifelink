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
		<div class="maps">
			<div class="row">
				<div class="col-lg-12">
					<div class="inet-text-main">
						<img src="img/treasure.png" alt="">
						<h4>Карты проезда в офисы</h4>
					</div>
					<p><span style="font-weight: bold;">Офис в Люблино — ул. Краснодонская, д. 24</span><br>Вход с улицы напротив пешеходного перехода.</p>
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2e4a64bdc14604c1e84cfed68a1607d34842a7b4c7e8f51064478c33dc71d54e&amp;width=420&amp;height=420&amp;lang=ru_RU&amp;scroll=true">	</script>
					<p style="margin-top: 3rem;"><span style="font-weight: bold;">Офис в Новогиреево — ул. Мартеновская, д. 39, стр. 2</span><br>Второй этаж.</p>
					<p>Проезд общественным транспортом с ул. Молостовых:<br> Троллейбусы №64, №75 и автобусы №237, №247 до остановки «платформа Новогиреево» (Свободный проспект), далее 5-10 минут пешком. <br>Автобус №776, остановка «завод Торос», 3 минуты пешком.<br> Автобус №133, выход под мостом Свободный проспект – Перовская улица (ориентир театр на Перовской), 6 минут пешком</p>
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A40cc09c1f3d3c3aedb868698b32e17838f8e4447a811033ca5e3c799ab6fd6bf&amp;width=420&amp;height=420&amp;lang=ru_RU&amp;scroll=true">  </script>
				</div>
			</div>
		</div>
	</div>

	<?php 
		include("php/footer.php")
	?>
	
</body>
</html>