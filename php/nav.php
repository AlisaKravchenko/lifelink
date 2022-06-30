<div class="container">
		<div class="header" id="header">
			<div class="row">
				<div class="col-lg-2 offset-lg-0 offset-md-3 col-md-3 ">
					<img class="header-logo-img" src="img/logo.png" alt="">
				</div>
				<div class="header-logo-text col-lg-2 col-md-3 col-12">
					<a href="index.php" class="header-logo-text"><span class="header-logo-text-part1">лайф</span><span class="header-logo-text-part2">линк</span></a>
				</div>
				<div class="header-sale col-lg-2 offset-lg-1 offset-md-1 col-md-3 col-12">
					<div class="sales-wrap">
						<img src="img/header-sales.png" alt="">
						<p class="header-sale-text">Отдел продаж</p>
					</div>
				</div>
				<div class="header-phone col-lg-2 col-md-3 col-12">
					<div class="phone-wrap">
						<img class="header-phone-img" src="img/phone.png" alt="">
						<p class="header-phone-text">8 (495) 648-00-20</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-12">
					<div class="call-wrap">
						<div class="call-wrap-block">
							<button class="btn header-call">Заказать звонок</button>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>	



<!-- Заказать звонок -->
<div class="call-popup popup">
	<div class="call-popup-dialog popup-dialog">
		<div class="call-popup-content  popup-content">
			<button class="call-popup-close popup-close"></button>
				<h5 class="call-popup-header popup-header">
				Введите данные и наш<br>специалист позвонит Вам
				</h5>
				<div class="call-popup-form popup-form">
					<form action="../phpSendMail/call-main.php">
						<input class="call-popup-input popup-input" required type="name" name="call-name" placeholder="Введите имя">
						<input class="call-popup-input popup-input" required type="tel" name="call-tel" placeholder="Введите телефон">
						<input class="call-popup-input popup-input" required type="email" name="call-email" placeholder="Введите Ваш email (не обязательно)">
						<button type="submit" class="btn header-call call-popup-btn">Заказать звонок</button>						
					</form>
				</div>
		</div>
	</div>
</div>				


<div class="container">
	<div class="nav-wrap">
		<ul class="nav">
			<li><a class="nav-element" href="../internet.php">Интернет</a></li>
			<li><a class="nav-element" href="../tv.php">Телевидение</a></li>
			<li><a class="nav-element" href="../phone.php">Телефон</a></li>
			<li><a class="nav-element" href="../connect.php">Подключиться</a></li>
			<li><a class="nav-element" href="../coverage.php">Карта покрытия</a></li>
			<li><a class="nav-element" href="../stock.php">Акции</a></li>
			<li><a class="nav-element" href="../support.php">Поддержка</a></li>
			<li><a class="nav-element-last" href="../contacts.php">Контакты</a></li>
		</ul>
	</div>
</div>



<!-- Модальное окно -->
<!-- <div class="popup">
	<div class="popup-dialog">
		<div class="popup-content">
			<button class="popup-close"></button>
				<h5 class="popup-header">
					Введите данные и наш<br>специалист позвонит Вам
				</h5>
				<div class="popup-form">
					<form action="#" class="call-popup">
						<input class="call-input" required type="text" name="call-name" placeholder="Введите имя">
						<input class="call-input" required type="number" name="call-tel" placeholder="Введите телефон">
						<input class="call-input" required type="text" name="call-email" placeholder="Введите Ваш адрес (не обязательно)">
						<button type="submit" class="btn header-call call-popup-btn">Заказать звонок</button>						
					</form>
				</div>
		</div>
	</div>
</div> -->	