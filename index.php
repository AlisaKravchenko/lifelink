
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
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&family=Oswald:wght@400;500;700&zdisplay=swap" rel="stylesheet">
</head>
<body>
	<?php 
		include("php/nav.php") 
	 ?>
	
	 <div class="container">
	 	<div class="head">
	 		
	 		<div class="row">
	 			<div class="col-lg-5 col-md-6 col-sm-6 col-6 offset-1">
	 				<div class="head-text-section">
	 					<p>Подключай Настоящий Интернет</p>
	 					<p class="head-text-section-part2">Высокоскоростной безлимитный Интернет от ЛАЙФЛИНК!</p>
	 					<a class="btn head-text-btn1">Подключить</a>
	 					<a href="internet.php" class="btn head-text-btn2">Тарифные планы<img src="img/arrow-right.png" alt=""></a>
	 				</div>	
	 			</div>
	 		</div> 	
	 	</div>
	 </div>
    <!-- Заявка на подключение (форма) -->
    <div class="index-connect-popup inet-popup inet-popup-window">
        <div class="index-connect-popup-dialog">
            <div class="index-connect-popup-content inet-popup-content">
                <button class="popup-close inet-popup-close"></button>
                <h5 class="index-connect-popup-header">
                    Заявка на подключение
                </h5>
                <div class="index-connect-popup-form">
                    <form action="phpSendMail/connect-mail.php" method="POST">
                        <select class="index-connect-popup-select" placeholder="Выберите улицу" name="connect-street" required>
                            <option value="" disabled selected style='display:none'>Выберите улицу</option>
                            <option>Улица 1</option>
                            <option>Улица 2</option>
                            <option>Улица 3</option>
                            <option>Улица 4</option>
                            <option>Улица 5</option>
                            <option>Улица 6</option>
                        </select>
                        <input class="index-connect-popup-input" required type="name" name="connect-name" placeholder="ВАШЕ ИМЯ">
                        <input class="index-connect-popup-input" required type="tel" name="connect-tel" placeholder="ВАШ ТЕЛЕФОН">
                        <p><input type="checkbox" class="index-connect-popup-checkbox" required>Я даю согласие на обработку персональных данных</p>
                        <button type="submit" class="btn connect-popup-btn">Подключиться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	 <div class="container">
	 	<div class="index-info">
	 		<div class="row">
	 			<div class="col-lg-5">
	 				<!-- Заявка на подключение (index.php) -->
					<div class="index-connect-popup">
						<div class="index-connect-popup-dialog">
							<div class="index-connect-popup-content">
								<h5 class="index-connect-popup-header">
									Заявка на подключение
								</h5>
								<div class="index-connect-popup-form">
                                    <form action="phpSendMail/connect-mail.php" method="POST">
                                        <select class="index-connect-popup-select" placeholder="Выберите улицу" name="connect-street" required>
                                            <option value="" disabled selected style='display:none'>Выберите улицу</option>
                                            <option>Улица 1</option>
                                            <option>Улица 2</option>
                                            <option>Улица 3</option>
                                            <option>Улица 4</option>
                                            <option>Улица 5</option>
                                            <option>Улица 6</option>
                                        </select>
                                        <input class="index-connect-popup-input" required type="name" name="connect-name" placeholder="ВАШЕ ИМЯ">
                                        <input class="index-connect-popup-input" required type="tel" name="connect-tel" placeholder="ВАШ ТЕЛЕФОН">
                                        <p><input type="checkbox" class="index-connect-popup-checkbox" required>Я даю согласие на обработку персональных данных</p>
                                        <button type="submit" class="btn connect-popup-btn">Подключиться</button>
                                    </form>
								</div>
							</div>
						</div>
					</div>
					<!-- Пополнить счет (index.php) -->
					<div class="index-connect-popup">
						<div class="index-connect-popup-dialog">
							<div class="index-connect-popup-content">
								<h5 class="index-connect-popup-header">
									Пополнить счет
								</h5>
								<div class="index-connect-popup-form">
                                    <form action="phpSendMail/schet-mail1.php" method="POST">
										<input class="index-connect-popup-input" required type="text" name="schet-num" placeholder="№ ПЛАТЕЖНЫЙ">
										<input class="index-connect-popup-input" required type="text" name="schet-sum" placeholder="СУММА"><br>
										<p><input type="checkbox" class="index-connect-popup-checkbox" value="checked" required>Я даю согласие на обработку персональных данных</p>
											<img  src="img/bank.png" alt=""><br>
										<button type="submit" class="btn connect-popup-btn">Оплатить</button>						
									</form>
								</div>
							</div>
						</div>
					</div>		
	 			</div>
	 			<div class="col-lg-7">
	 				<div class="index-news">
	 					<div class="index-news-content">
		 					<div class="index-news-header">	
		 						<p>Наши новости</p>															
		 						<img src="img/logo.png">	
		 					</div>	
		 					<div class="index-news-items">
		 						<h4>Новые тарифы</h4>
		 						<p>У нас с 15 августа новые тарифы на Интернет стоимостью <span class="orangе">от 300 ₽</span> и со скоростью
		 						<span class="blue">до 500 Мбит/с.</span>
								Перейти на них можно самостоятельно в личном кабинете.</p>
		 						<h4>Новый адрес офиса в Новогиреево с 4 января.</h4>
		 						<p>Офис в Новогиреево с ул. Молостовых, д. 10Г переехал на ул. Мартеновская, д.39, стр. 2, этаж 2. Офис в праздничные дни будет работать по следующему графику:<br>1 декабря до 15:00,<br>с 4 по 10 января с 11:00 до 18:00,<br>с 11 января в обычном режиме.</p>
		 						<h4>Акции 6+1 и 12+3</h4>
		 						<p>Напоминаем, что можно оплатить Интернет за 6 или 12 месяцев сразу и получить в подарок один или три месяца. Оплатить можно любым доступным методом, но в случае, если вы платите не в офисе, пожалуйста, позвоните нам и сообщите об оплате, чтобы мы начислили подарочные месяцы.</p>
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

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	 
	 
	</script>
</body>
</html>