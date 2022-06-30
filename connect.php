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
	 	<div class="connect">
	 		<div class="row">
	 			<div class="col-lg-6">
	 				<form action="phpSendMail/connectPage-mail.php">
		 				<div class="connect-form">
		 					<div class="connect-form-content">
		 						<h1>Заявка на подключение</h1>
		 						<input class="connect-form-input" name="conPage-name" required placeholder="Введите имя" type="text">
		 						<input class="connect-form-input" name="conPage-surname" required placeholder="Введите фамиилию" type="text">
		 						<input class="connect-form-input" name="conPage-tel" required placeholder="Введите телефон" type="tel">
		 						<input class="connect-form-input" name="conPage-address" required placeholder="Введите адрес" type="text">
		 						<input class="connect-form-input" name="conPage-email" required placeholder="Введите Email" type="email">
		 						<button type="submit" class="btn connect-popup-btn">Отправить заявку</button>
		 						<p>Отправляя заявку, вы подтверждаете своё согласие с «Политикой конфиденциальности»<br>и с передачей информации, в том числе персональных данных,<br> по открытым каналам связи сети Интернет.</p>
		 					</div>
		 				</div>
	 				</form>	
	 			</div>
	 			<div class="col-lg-6">
	 				<div class="connect-info">
	 					<div class="connect-info-section">
	 						<div class="connect-info-content">
	 							<h2>Подключенные дома</h2>
	 							<p>Мы подключаем к Интернету в Люблино, Тектильщиках, Кузьминках, Печатниках, Новогиреево, Ивановском, Южном Измайлово, Кожухово (Косино-Ухтомский).<br><br>
	 							Проверьте, подключен ли ваш дом, а затем, если решите подключиться к нашей сети, просто позвоните нам или заполните заявку на подключение. Этого достаточно, чтобы заключить договор, вам не придется тратить время на посещение офиса. Наши специалисты с удовольствием проконсультируют вас по вопросу выбора тарифного плана и передадут ваши пожелания по времени подключения.</p>
	 							<button type="submit" class="btn connect-popup-btn">Перейти</button>
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 		</div>

	 	</div>
	 </div>

	 <?php 
	include("php/footer.php")
	?>
	<script src="js/script.js"></script>
</body>
</html>