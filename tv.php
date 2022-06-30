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
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	<?php 
		include("php/nav.php")
	 ?>

	 	<div class="container">
	 			<div class="tv-info">
	 				<div class="row">
	 					<div class="col-lg-6 col-md-12 tv-info-img-cont">
	 						<img class="tv-info-img" style="max-width: 54rem;" src="img/tv-main.png" alt="">
	 					</div>
	 					<div class="col-lg-6">
	 						<div class="inet-text">
				 	      		<div class="inet-text-main">
				 					<img src="img/receipt-icon.png" alt="">
				 					<h4>Об услуге</h4>
				 				</div>
				 				<p>Цифровое телевидение — неотъемлемая составляющая современного пакета телекоммуникационных услуг. Мы осуществляем показ почти 100 каналов цифрового спутникового телевидения без потерь качества.</p>
				 				<div class="inet-text-main">
				 					<img src="img/good-icon.png" alt="">
									<h4>Преимущества</h4>
			 					</div>
			 					<p>Особой популярностью пользуется возможность просмотра без использования дополнительных устройств, прямо с экранов ваших мониторов, что избавляет от необходимости вложения денег в быстро устаревающие устройства приема. </p>
			 					<div class="inet-text-main">
			 						<img src="img/price-icon.png" alt="">
			 						<h4>Цена</h4>
								</div>
								<p>Услуга предоставляется нашим абонентам, подключившим Интернет, бесплатно, но есть ограничения по количеству транслируемых каналов на младших тарифных планах.</p>
							</div>
	 					</div>
	 				</div>

	 				<div class="tv-search">
	 					<h1 class="inet-slider-head">Транслируемые нами каналы</h1>
	 					<div class="tv-search-content">
	 						<div class="row">
	 							<div class="col-lg-5">
	 								<label for="#tv-select">Показывать</label>
	 								<select id="tv-select" class="tv-search-int" placeholder="Все" required>
										<option value="1">Все</option>
										<option value="2">Эфирный пакет</option>
										<option value="3">Расширенный пакет</option>
										<option value="4">Каналы высокой четкости (HDTV)</option>
									</select>
	 							</div>
	 							<div class="col-lg-4 offset-lg-2">
	 								<div class="tv-search-box">
	 									<span class="tv-search-label">🔍</span>
	 									<input placeholder="Поиск" type="search" id="tv-search" class="tv-search-int" id=channels-search>
	 									
	 								</div>
	 								
	 							</div>	
	 						</div>
	 						
	 					</div>
	 					
	 					
	 						
	 				</div>
	 			</div>
	 		
	 	</div>
	 	<div class="container">
	 		
	 		<div class="tv-channels">
	 			<h1 class="inet-slider-head broadcast-head">Эфирный пакет</h1><br>
	 			<div style="max-width:100%; margin-left: 0" class="row broadcast1">

	 						<!-- Эфирный пакет (18 каналов) -->

	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 10.42 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Первый</h2>
	 												<br>
	 												<p>Сайт : <a href="https://www.1tv.ru" class="tv-blue-a">1tv.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">	
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 10.59 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Россия 1</h2><br>
	 												<p>Сайт : <a href="https://m.russia.tv/" class="tv-blue-a">www.rutv.ru</a></p>
	 											</div>	
	 										</th>
	 									</tr>
	 								</table>	 								
	 							</div>
	 						</div>
	 						
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.03 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">НТВ</h2>
	 												<br>
	 												<p>Сайт : <a href="https://www.ntv.ru/" class="tv-blue-a">www.ntv.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.07 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Матч ТВ</h2>
	 												<br>
	 												<p>Сайт : <a href="https://matchtv.ru/" class="tv-blue-a">matchtv.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.43 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Россия К</h2>
	 												<br>
	 												<p>Сайт : <a href="https://smotrim.ru/" class="tv-blue-a">www.tvkultura.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.44 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Пятница</h2>
	 												<br>
	 												<p>Сайт : <a href="https://friday.ru/" class="tv-blue-a">www.friday.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.45 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">РЕН ТВ</h2>
	 												<br>
	 												<p>Сайт : <a href="https://ren.tv/" class="tv-blue-a">www.ren-tv.com</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.46 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Домашний</h2>
	 												<br>
	 												<p>Сайт : <a href="https://domashniy.ru/" class="tv-blue-a">www.domashniy.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.48 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">СТС</h2>
	 												<br>
	 												<p>Сайт : <a href="https://ctc.ru/" class="tv-blue-a">www.ctc.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.49 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">ТНТ</h2>
	 												<br>
	 												<p>Сайт : <a href="https://tnt-online.ru/" class="tv-blue-a">tnt-online.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.50 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Общественное телевидение России</h2>
	 												<br>
	 												<p>Сайт : <a href="https://otr-online.ru/" class="tv-blue-a">www.otr-online.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.51 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">ТВ3</h2>
	 												<br>
	 												<p>Сайт : <a href="https://tv3.ru/" class="tv-blue-a">www.tv3russia.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.52 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">ТВ Центр</h2>
	 												<br>
	 												<p>Сайт : <a href="http://www.tvc.ru/" class="tv-blue-a">www.tvc.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.53 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">5 канал</h2>
	 												<br>
	 												<p>Сайт : <a href="https://www.5-tv.ru/" class="tv-blue-a">www.5-tv.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.54 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Россия 24</h2>
	 												<br>
	 												<p>Сайт : <a href="https://www.vesti.ru/ы" class="tv-blue-a">www.vesti.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.56 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">2x2</h2>
	 												<br>
	 												<p>Сайт : <a href="https://2x2tv.ru/" class="tv-blue-a">www.2x2tv.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.57 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Звезда</h2>
	 												<br>
	 												<p>Сайт : <a href="https://tvzvezda.ru/" class="tv-blue-a">www.tvzvezda.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 						<div class="col-lg-6 tv-card-wrap">
	 							<div class="tv-card broadcast">
	 								<table>
	 									<tr>
	 										<th><img src="img/Channels/Снимок экрана 2021-01-14 в 11.58 1.png" alt=""></th>
	 										<th>
	 											<div class="tv-card-caption">
	 												<h2 class="tv-blue">Москва-24</h2>
	 												<br>
	 												<p>Сайт : <a href="https://www.m24.ru/" class="tv-blue-a">www.m24.ru</a></p>
	 											</div>
	 										</th>
	 									</tr>
	 								</table>
	 							</div>
	 						</div>
	 			</div>			
	 						





	 									
	 								
	 			<!-- Расширенный пакет (61 канал) -->
	 			<h1 style="margin-top: 0;" class="inet-slider-head extended-head">Расширенный пакет</h1><br>
	 			<div style="max-width:100%; margin-left: 0" class="row extended">
	 				
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.09 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">МИР 24</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.09 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Матч! Боец</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.09 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Матч! Игра</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.09 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Матч! Арена</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.10 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Спас</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.10 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">ТНТ4</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.10 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">СТС Love</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.11 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Подмосковье</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.18 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">DANGE TV</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.18 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Gulli</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.18 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">TiJi</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.19 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Ю</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.19 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Rusong TV</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.19 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Футбол-Медиа</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.19 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Москва. Доверие</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.20 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Europa Plus TV</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 12.53 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">JimJam</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.09 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">SONY SCI-FI</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.09 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">TV XXI</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.09 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">VH1 Classic</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.09 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Че</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.10 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">8 Канал</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.10 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">TLC</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.10 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">ТНВ</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.10 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">National Geographic</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.11 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">FOX</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.11 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Fashion TV</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.11 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Russian Travel Guide</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.11 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Nickelodeon</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.12 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Cartoon Network</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.12 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">MTV Dance</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.12 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">CBS Drama</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.12 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Время</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.13 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Eurosport</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.13 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">РБК</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.13 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">VH1 European</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.13 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">МИР</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.13 5.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">THT Music</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.14 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Русский Иллюзион</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.14 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Наука 2.0</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.38 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">SONY ТВ</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.38 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Комеди ТВ</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.39 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Авто Плюс</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.39 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Nat Geo WILD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.40 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Russia Today</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.40 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Канал Disney</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.40 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Карусель</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.42 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Настоящее Страшное Телевидение</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.43 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Телекафе</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.43 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Fox Life</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.43 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">РЖД</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.43 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">World Fashion Channel</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.44 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">ТРО Союз</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.44 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">BRIDGE TV</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.44 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">MCM TOP</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.44 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Mezzo</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.45 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">24 ДОК</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.45 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Eurosport 2</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card extended">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.45 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Extreme Sports</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 					<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.45 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">CBS Reality</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-14 в 13.46 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Еврокино</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>


	 			</div>		




	 									
	 								
	 			<!-- Каналы авсокой четкости (9 каналов)-->
	 			<h1 style="margin-top: 0;" class="inet-slider-head clarity-head">Каналы высокой четкости (HDTV)</h1><br>
	 			<div style="max-width:100%; margin-left: 0" class="row clarity">
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.25 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Первый канал HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.25 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Россия HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.25 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Nat Geo Wild HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.25 4.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">HD Life</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.26 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">RT Doc HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.27 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">МИР HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.28 1.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">RTG TV HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.28 2.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">Nickelodeon HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
	 					</div>
	 				</div>
	 				<div class="col-lg-6 tv-card-wrap">
	 					<div class="tv-card">
	 						<table>
	 							<tr>
	 								<th><img src="img/Channels/Снимок экрана 2021-01-17 в 12.28 3.png" alt=""></th>
	 								<th>
	 									<div class="tv-card-caption">
	 										<h2 class="tv-blue">MTV Live HD</h2>
	 										<br>
	 										<p>Сайт : <a href="" class="tv-blue-a"></a></p>
	 									</div>
	 								</th>
	 							</tr>
	 						</table>
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