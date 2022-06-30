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
	 	<div class="stock">
	 		<div class="row">
	 			<div class="col-lg-7">
				 	<div class="inet-text">
				 	<div class="inet-text-main">
				 		<img src="img/search1.png" alt="">
				 		<h4>Наши спецпредложения</h4>
				 	</div>
				 	<p class="inet-text-edge"><span class="inet-text-green">Бесплатное подключение</span><br>
					Вся сумма авансового платежа при подключении зачисляется на ваш счет и вы, фактически, ничего не платите за подключения. Эти деньги идут на оплату доступа в Интернет.</p>
					<p class="inet-text-edge"><span class="inet-text-green">6+1 месяц в подарок</span><br>
					При оплате услуг доступа в Интернет сразу за 6 месяцев мы дарим вам месяц по тарифу, которым вы пользуетесь на момент платежа. Предложение не действует, если вы оплачиваете услуги со скидкой. Например, если на вашем тарифе предусмотрена скидка от обычного размера абонентской платы.</p>
					<p class="inet-text-edge"><span class="inet-text-green">12+3 в подарок</span><br>
					А еще можно заплатить сразу за 12 месяцев и целых 3 получить в подарок!</p>
					<p class="inet-text-edge"><span class="inet-text-green">Приходи с друзьями</span><br>
					Если вы подключены к нам и посетите наш офис вместе с другом, подругой или просто знакомым при заключении ими договора, или они назовут ваше имя, как рекомендовавшего подключиться к нам, при заключении договора, мы подарим вам месяц доступа в Интернет.</p>
					<p class="inet-text-edge"><span class="inet-text-green">Подключение многоканального Московского номера за 3 ДНЯ</span><br>
					Мы рады предложить вам возможность приобрести телефонный номер и получить в течение трех дней готовое решение для обеспечения телефонной связи в вашем офисе или ином объекте.</p>
				 </div>
	 			</div>
	 			<div class="col-lg-5">			
	 				<div class="stock-img-block">		
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