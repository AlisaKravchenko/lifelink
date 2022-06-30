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
	 			<div class="phone-info">
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
	 				<div class="row">
	 					<div class="col-lg-6 col-md-12 tv-info-img-cont phone-info-img-cont">
	 						<img class="tv-info-img" style="max-width: 54rem;" src="img/phone-main.png" alt="">
	 					</div>
	 					<div class="col-lg-6">
	 						<div style="margin-bottom: 4rem;" class="inet-text">
				 	      		<div class="inet-text-main">
				 					<img src="img/receipt-icon.png" alt="">
				 					<h4>Об услуге</h4>
				 				</div>
				 				<p>Цифровая телефония — ваша возможность в полной мере воспользоваться современным качеством телефонной связи, общаясь со всем миром за разумные деньги. Основные пользователи данной услуги — предприятия, которым помимо высоких показателей качества связи крайне важен доступный спектр дополнительных услуг.</p>
				 				<div class="inet-text-main">
				 					<img src="img/good-icon.png" alt="">
									<h4>Преимущества</h4>
			 					</div>
			 					<p>Используя предоставляемую нами услугу цифровой телефонной связи вы получаете возможность легкой организации многоканальных телефонных номеров, а также перестаете зависить от конкретного места расположения вашей организации. Все что будет нужно при переезде — подклчить в новом офисе Интернет от любого оператора, оповестить нас, и наши специалисты помогут вам с процессом переноса телефонного номера.</p>
			 					<div class="inet-text-main">
			 						<img src="img/price-icon.png" alt="">
			 						<h4>Цена</h4>
								</div>
								<p>Ознакомьтесь с нашими тарифами на подключение цифровой телефонии, а также с тарифами на местную, междугородную и международную связь. Если вас не устраивают стандартные тарифы и вы захотите обсудить их, мы будем рады выслушать и предложить индивидуальные условия, соотвествующие потребностям вашего бизнеса.</p>
							</div>
	 					</div>
	 				</div>
	 			</div>

	 			<div class="phone-options">
	 				<div class="row" style="max-width:100%; margin-left: 0">
	 					<div class="col-lg-4 col-md-6 phone-options-block-wrap">
	 						<div class="phone-options-block">
	 							<p>Инсталляция номера в коде 495 (единоразово)</p>
	 							<h3>10 000 руб.</h3>
	 							<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>

	 						</div>
	 					</div>
	 					
	 					<div class="col-lg-4 col-md-6 phone-options-block-wrap">
	 						<div class="phone-options-block">
	 							<p>Залоговый платеж за оборудование VoIP1 (единоразово)</p>
	 							<h3>6000 руб.</h3>
	 							<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>

	 						</div>
	 					</div>
	 					<div class="col-lg-4 col-md-6 phone-options-block-wrap">
	 						<div class="phone-options-block">
	 							<p>Абонентская плата за основную линию</p>
	 							<h3>1500 руб/мес.</h3>
	 							<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>

	 						</div>
	 					</div>
	 					<div class="col-lg-4 col-md-6 phone-options-block-wrap">
	 						<div class="phone-options-block">
	 							<p>Абонентская плата за дополнительную линию</p>
	 							<h3>1200 руб/мес.</h3>
	 							<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>

	 						</div>
	 					</div>
	 					<div class="col-lg-4 col-md-6 phone-options-block-wrap">
	 						<div class="phone-options-block">
	 							<p>Количество минут местных вызовов включенных <br>в абонентскую плату за каждую линию</p>
	 							<h3>600 минут</h3>
	 							<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>

	 						</div>
	 					</div>
	 					<div class="col-lg-4 col-md-6 phone-options-block-wrap">
	 						<div class="phone-options-block">
	 							<p>Инсталляция дополнительной телефонной линии<br> к основному номеру (единоразово)</p>
	 							<h3>7000 руб.</h3>
	 							<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>

	 						</div>
	 					</div>
	 				</div>
	 				<div class="phone-options-label row">
	 					<p class="col-lg-5 col-md-12"><span class="phone-options-label-one">Цены на внутризоновую, междугородную и международную связь</span><p>
	 					<p class="col-lg-5 col-md-12"><span class="phone-options-label-two">*Залоговый платеж возвращается абоненту при прекращении действия договора.
	 					</span></p>
	 				</div>
	 			</div>
	 			<div class="phone-offers">
	 				<h2 class="">Наши спецпредложения</h2>
	 				<table>
	 					<tr>
	 						<th><img src="img/office-phone.png" alt=""></th>
	 						<th>
	 							<p>Подключение многоканального<br>Московского номера за <span style="color:#1e880d;">3 ДНЯ</span></p>
	 						</th>
	 					</tr>
	 				</table>
	 				
	 				<p style="display: block; margin-bottom: 2rem;">Мы рады предложить вам возможность приобрести телефонный номер и получить в течение трех дней готовое решение для обеспечения телефонной связи в вашем офисе или ином объекте.</p>
	 			</div>

	 	</div>

	<?php 
	include("php/footer.php")
	?>
	<script src="js/script.js"></script>
</body>
</html>