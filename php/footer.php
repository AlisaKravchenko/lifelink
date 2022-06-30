<div class="container">
	<div class="footer">
		<div class="footer-content">
			<div class="row">
					<div class="col-lg-1 offset-lg-0 offset-md-2 col-md-3 ">
						<img class="header-logo-img" src="img/logo-dark.png" alt="">
					</div>
					<div class="header-logo-text col-lg-2 offset-md-1 col-md-3 col-12">
						<a href="index.php" class="header-logo-text"><span class="header-logo-text-part1">лайф</span><span class="header-logo-text-part2">линк</span></a>
					</div>
					<div class="header-sale footer-sale offset-lg-1 col-lg-4 col-md-12 offset-md-2 col-12">
						<div class="footer-sale-wrap">	
							<table>
								<tr>
									<th rowspan="2"><img src="img/header-sales.png" alt="" style="margin-right: 1rem;"></th>
									<th><p class="footer-sale-text">Отдел продаж</p></th>
									<th><img src="../img/phone-white.png" alt="">
										<p class="footer-sale-text" style="font-weight: normal;" >8 (495) 648-00-20</p></th>
								</tr>
								<tr>
									<th><p class="footer-sale-text">Техническая поддержка</p></th>
									<th><img src="../img/phone-white.png" alt="">
										<p class="footer-sale-text" style="font-weight: normal;">8 (495) 662-44-20</p></th>
								</tr>
							</table>						
						</div>
					</div>
					
					<div class="col-lg-2 col-md-12  col-12">
						<div class="call-wrap">
							<div class="call-wrap-block">
								<button class="btn header-call footer-call">Заказать звонок</button>
							</div>
						</div>
					</div>
			</div>
				<div class="row">
					<div class="col-lg-10 footer-nav-wrap">
						<ul class="nav footer-nav">
							<li><a class="nav-element footer-nav-element" href="../internet.php">Интернет</a></li>
							<li><a class="nav-element footer-nav-element" href="../tv.php">Телевидение</a></li>
							<li><a class="nav-element footer-nav-element" href="../phone.php">Телефон</a></li>
							<li><a class="nav-element footer-nav-element" href="../connect.php">Подключиться</a></li>
							<li><a class="nav-element footer-nav-element" href="../coverage.php">Карта покрытия</a></li>
							<li><a class="nav-element footer-nav-element" href="../stock.php">Акции</a></li>
							<li><a class="nav-element footer-nav-element" href="../support.php">Поддержка</a></li>
							<li><a class="nav-element-last footer-nav-element-last" href="../contacts.php">Контакты</a></li>
						</ul>
					</div>
					<div class="col-lg-2 footer-scroll-up" id="scroll">
						<button href="#header" class="footer-scroll-up-btn btn"><img src="../img/footer-arrow.png" alt=""></button>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 offset-lg-5">
						<p class="footer-text">© 2020 http://www.lifelink.ru<br>
						Все права защищены</p>
					</div>
				</div>
		</div>
	</div>
</div>
<script src="js/script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Плавная прокрутка-->
  	<script>
 		$(document).ready(function(){
   			$("#scroll").on("click","button", function (event) {
        		event.preventDefault();
        		var id  = $(this).attr('href'),
           		top = $(id).offset().top;
        		$('body,html').animate({scrollTop: top}, 1000);
   			 });
		});
	</script>

