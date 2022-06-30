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
    	<div class="business">
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
    		<div class="business-main">
	    		<img src="img/cooperation.png" alt="">
	    		<h1 class="inet-slider-head business-main-text">Для вашего бизнеса</h1>
    		</div>
		 	<div class="business-slider1">
					   <div class="inet-slider-block business-slider-block">
						   	<div class="inet-slider-block-wrap">
							   	<p style=" margin-bottom: -2rem;">Офис-Старт</p>
							   	<img class="inet-slider-img" src="img/Мбит в сек/75,50.png" alt="">
							   	<p style="font-size: 1.5rem; margin-top: -11rem;">25 Мбит/сек<sup><small>1</small></sup></p>
							   	<p style="font-weight: 300; font-size: 1.2rem;">Публичный IP-адрес - бесплатно</p>
							   	<p style="font-size: 1.7rem; color: #FD961E;">2000 руб/мес</p>
							   	<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>
						   </div>
					   </div>

					    <div class="inet-slider-block business-slider-block">
						   	<div class="inet-slider-block-wrap">
							   	<p style=" margin-bottom: -2rem;">Офис-Норма</p>
							   	<img class="inet-slider-img" src="img/Мбит в сек/300.png" alt="">
							   	<p style="font-size: 1.5rem; margin-top: -11rem;">50 Мбит/сек<sup><small>1</small></sup></p>
							   	<p style="font-weight: 300; font-size: 1.2rem;">Публичный IP-адрес - бесплатно</p>
							   	<p style="font-size: 1.7rem; color: #FD961E;">3500 руб/мес</p>
							   	<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>
						   </div>
					   </div>

					    <div class="inet-slider-block business-slider-block">
						   	<div class="inet-slider-block-wrap">
							   	<p style=" margin-bottom: -2rem;">Офис-Максимум</p>
							   	<img class="inet-slider-img" src="img/Мбит в сек/500,100.png" alt="">
							   	<p style="font-size: 1.5rem; margin-top: -11rem;">50 Мбит/сек<sup><small>1</small></sup></p>
							   	<p style="font-weight: 300; font-size: 1.2rem;">Публичный IP-адрес - бесплатно</p>
							   	<p style="font-size: 1.7rem; color: #FD961E;">5000 руб/мес</p>
							   	<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>
						   </div>
					   </div>
					 
			</div>
			<div class="inet-text">
				<div class="business-slider-sign">
					<p><span style="font-weight: 500; font-size: 1.5rem; margin-right: 0.6rem;">Подключение </span>обсуждается индивидуально</p>
					<p><span style="font-weight: 500; font-size: 1.5rem; margin-right: 0.6rem;">Минимальный авансовый платеж при подключении (руб.) </span>в размере абонентской платы за 1 месяц по выбранному тарифному плану</p>
					<p><span style="font-weight: 500; font-size: 1.5rem; margin-right: 0.6rem;">Дополнительный публичный IP-адрес (руб./месяц)<sup> <small style="color: #60c2c2;">2</small></sup></span>Офис-Старт  250 руб.   Офис-Норма 150 руб.  Офис-Максимум 100 руб.</p>				
				</div>
				
				<div class="inet-text-main">
					<img src="img/attention-icon.png" alt="">
					<h4>Обращаем Ваше внимание</h4>
				</div>
				<p><sup><small style="color: #60c2c2;">1</small> </sup>Указанная скорость передачи данных является максимально возможной, фактическая же скорость зависит от различных факторов и может отличаться от приведенных значений.<br>
				<sup><small style="color: #60c2c2;">2</small> </sup>Выделение дополнительных публичных IP-адресов осуществляется подсетями /29, /28, /27 что эквивалентно 8, 16 адресам и 32 адресам. Для использования на вашем оборудовании в силу технических причин организации маршрутизации из этих адресов доступно 5, 13 или 29, соответственно. Подключение подсети публичных IP-адресов замещает собой услугу «Публичный IP-адрес», так как их одновременное использование технически ограничено.</p>	
    		</div>

    		<div class="business-slider2">
					   <div class="inet-slider-block">
						   	<div class="inet-slider-block-wrap">
							   	<p style=" margin-bottom: -2rem;">Бизнес-200</p>
							   	<img class="inet-slider-img" src="img/Мбит в сек/75,50.png" alt="">
							   	<p style="font-size: 1.5rem; margin-top: -11rem;">200 Мбит/сек<sup><small>1</small></sup></p>
							   	<p style="font-weight: 300; font-size: 1.2rem;">Публичный IP-адрес - бесплатно</p>
							   	<p style="font-size: 1.7rem; color: #FD961E;">7000 руб/мес</p>
							   	<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>
						   </div>
					   </div>

					    <div class="inet-slider-block">
						   	<div class="inet-slider-block-wrap">
							   	<p style=" margin-bottom: -2rem;">Бизнес-300</p>
							   	<img class="inet-slider-img" src="img/Мбит в сек/75,50.png" alt="">
							   	<p style="font-size: 1.5rem; margin-top: -11rem;">300 Мбит/сек<sup><small>1</small></sup></p>
							   	<p style="font-weight: 300; font-size: 1.2rem;">Публичный IP-адрес - бесплатно</p>
							   	<p style="font-size: 1.7rem; color: #FD961E;">8000 руб/мес</p>
							   	<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>
						   </div>
					   </div>

					    <div class="inet-slider-block">
						   	<div class="inet-slider-block-wrap">
							   	<p style=" margin-bottom: -2rem;">Бизнес-500</p>
							   	<img class="inet-slider-img" src="img/Мбит в сек/75,50.png" alt="">
							   	<p style="font-size: 1.5rem; margin-top: -11rem;">500 Мбит/сек<sup><small>1</small></sup></p>
							   	<p style="font-weight: 300; font-size: 1.2rem;">Публичный IP-адрес - бесплатно</p>
							   	<p style="font-size: 1.7rem; color: #FD961E;">10000 руб/мес</p>
							   	<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>
						   </div>
					   </div>
					   <div class="inet-slider-block">
						   	<div class="inet-slider-block-wrap">
							   	<p style=" margin-bottom: -2rem;">Корпоративный</p>
							   	<img class="inet-slider-img" src="img/Мбит в сек/75,50.png" alt="">
							   	<p style="font-size: 1.5rem; margin-top: -11rem;">1000 Мбит/сек<sup><small>1</small></sup></p>
							   	<p style="font-weight: 300; font-size: 1.2rem;">Публичный IP-адрес - бесплатно</p>
							   	<p style="font-size: 1.7rem; color: #FD961E;">20000 руб/мес</p>
							   	<button type="button" class="btn connect-popup-btn inet-open-popup-btn">Подключить</button>
						   </div>
					   </div>
					 
			</div>
			<div class="inet-text">
				
				
				<div class="inet-text-main">
					<img src="img/attention-icon.png" alt="">
					<h4>Обращаем Ваше внимание</h4>
				</div>
				<p><sup><small style="color: #60c2c2;">1</small> </sup>Указанная скорость передачи данных является максимально возможной, фактическая же скорость зависит от различных факторов и может отличаться от приведенных значений.<br>
				<sup><small style="color: #60c2c2;">2</small> </sup>Выделение дополнительных публичных IP-адресов осуществляется подсетями /29, /28, /27 что эквивалентно 8, 16 адресам и 32 адресам. Для использования на вашем оборудовании в силу технических причин организации маршрутизации из этих адресов доступно 5, 13 или 29, соответственно. Подключение подсети публичных IP-адресов замещает собой услугу «Публичный IP-адрес», так как их одновременное использование технически ограничено.</p>	

				<div class="business-slider-sign">
					<p><span style="font-weight: 500; font-size: 1.5rem; margin-right: 0.6rem;">Подключение </span>обсуждается индивидуально</p>
					<p><span style="font-weight: 500; font-size: 1.5rem; margin-right: 0.6rem;">Минимальный авансовый платеж при подключении (руб.) </span>в размере абонентской платы за 1 месяц по выбранному тарифному плану</p>	
					<p style="color: #60c2c2; font-size: 1.5rem; margin-bottom: 5rem;">L2/3 каналы = $ обсуждается индивидуально</p>	
				</div>
    		</div>
  		</div>
	</div>

<?php 
	include("php/footer.php")
?>
<script type="text/javascript">
   
    // sliders
    $(document).ready(function(){
  			$('.business-slider1').slick({
  				infinite: true,
  				slidesToShow: 3,
  				slidesToScroll: 1,
  				arrows: false,
  				autoplay: true,
  				autoplaySpeed: 2000,
  				responsive: [
				    
				    {
				      breakpoint: 992,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 2
				      }
				    },
				    {
				      breakpoint: 768,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
				      }
				    }
				  ]
    			
  			});
		});

        $(document).ready(function(){
  			$('.business-slider2').slick({
  				infinite: true,
  				slidesToShow: 4,
  				slidesToScroll: 1,
  				arrows: false,
  				autoplay: true,
  				autoplaySpeed: 2000,
  				responsive: [
				    
				    {
				      breakpoint: 992,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 2
				      }
				    },
				    {
				      breakpoint: 768,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 1
				      }
				    }
				  ]
    			
  			});
		});
</script>
<script src="js/script.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
</body>
</html>