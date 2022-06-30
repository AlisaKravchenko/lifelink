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
	 	<div class="contacts">
	 		<div class="row">
	 			<div class="col-lg-6">
	 				<div class="inet-text-main">
						<img src="img/contacts-info.png" alt="">
						<h4>Оcновная информация</h4>
					</div>
					<div class="contacts-content">
						<p> Отдел продаж и техническая поддержка: 8 (495) 648-00-20, с 09:30 до 20:00.</p>
						<p>Общая электропочта: info@lifelink.ru<br>
						Отдел продаж: op@lifelink.ru<br>
						Техподдержка: support@lifelink.ru<br></p>
					</div>
					<div class="inet-text-main">
						<img src="img/contacts-deparment.png" alt="">
						<h4>Центральное отделение</h4>
					</div>
					<div class="contacts-content">
						<p>Москва, ул. Краснодонская, д. 24. <br>
						8 (495) 648-00-20<br>
						<a href="contacts-maps.php" style="color: #60c2c2">Как проехать?</a></a><br>
						Будни — с 09:30 до 19:30,<br>
						выходные и праздничные дни — с 12:00 до 19:00.</p>
					</div>
					<div class="inet-text-main">
						<img src="img/contacts-deparment.png" alt="">
						<h4>Отделение в Новогиреево</h4>
					</div>
					<div class="contacts-content">
						<p>Москва, ул. Мартеновская, д.39, стр. 2, этаж 2.<br>
						8 (495) 648-06-24<br>
						<a href="contacts-maps.php" style="color: #60c2c2">Как проехать?</a></a><br>
						Будни — с 09:30 до 19:30,<br>
						выходные и праздничные дни — с 11:00 до 18:00.</p>
					</div>
					<div class="contacts-tels">
													
							<table>
								<tr>	
									<th rowspan="2"><img src="img/header-sales.png" alt=""></th>
									<th><p style="font-weight: bold;">Отдел продаж</p></th>
									<th><p style="font-weight: normal;" >8 (495) 648-00-20</p></th>
								</tr>
								<tr>
									<th><p style="font-weight: bold;">Техническая поддержка</p></th>
									<th><p style="font-weight: normal;">8 (495) 662-44-20</p></th>
								</tr>
							</table>						
						
					</div>
					<div class="contacts-social">												
						<table>
							<tr>	
								<th><img src="img/contacts-social.png" alt=""></th>
								<th><p>Мы в социальных сетях</p></th>	
								<th><a href=""><img src="img/contacts-vk.png" alt=""></a></th>
								<th><a href=""><img src="img/contacts-telegram.png" alt=""></a></th>
								<th><a href=""><img src="img/contacts-twitter.png" alt=""></a></th>						
							</tr>							
						</table>											
					</div>
	 			</div>
	 			<div class="col-lg-6">			
	 				<div class="contacts-img-block">		
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>

	<?php 
		include("php/footer.php")
	?>
	
</body>
</html>