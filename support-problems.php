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
			<div class="support-connect">
				<div class="row">
					<div class="col-lg-12">
						<div class="inet-text-main">
							<img src="img/support-computer.png" alt="">
							<h4>Самостоятельное устранение проблем</h4>
						</div>
						<div class="support-connect-content">
							<h5>После попытки подключения к Интернету операционная система сообщает об ошибке</h5>
							<h5>«Ошибка 691 (неправильное имя пользователя или пароль)»</h5>
							<p> Эта ошибка говорит о неправильно указанном имени пользователя или пароле. Попробуйте ввести заново учетные данные (login, password), найти эти данные вы можете в учетной карточке абонента. Проверьте раскладку вашей клавиатуры - пароль чувствителен к регистру символов. Возможно, ваша учетная запись заблокирована, скорее всего по причине нехватки средств на лицевом счету.</p>
							<h5>«Ошибка 629 (подключение было закрыто удаленном компьютером)»</h5>
							<p> Неправильно указаны имя пользователя или пароль. Попробуйте ввести заново учетные данные (LOGIN и PASSWORD), найти эти данные вы можете в учетной карточке абонента. Проверьте раскладку вашей клавиатуры - пароль чувствителен к регистру символов. Если Вы используете несколько учетных записей, убедитесь, что подключение с данным Login(ом) в данный момент не запущено. Возможно, Вы некорректно отключились от Интернет (перезагрузка компьютера, отключение интерфейса или отсоединение кабеля в процессе работы). Не делайте попыток подключений к Интернет порядка 3-х минут, затем повторите попытку.</p>
							<h5>«Ошибка 678, 815, 651 (удаленный компьютер не отвечает)»</h5>
							<p>Попробуйте пересоздать соединение PPPoE, воспользовавшись памяткой по настройке соединения, которую вам оставили монтажники. Выключите-включите подключение по локальной сети. Проверьте настройки Вашего файрволла, антивируса (если он установлен на Вашем компьютере). Если при этой ошибке, в нижнем правом углу монитора, у вас также появилось сообщение «Сетевой кабель не подключен» и изображение двух мониторов перечеркнуто красным крестом, извлеките и вставьте обратно кабель из разъема сетевого адаптера. Проверьте целостность Интернет провода, проходящего по квартире.</p>
							<h5>«Ошибка 769, 814 (указанное назначение недостижимо)»</h5>
							<p>Как правило, данная ошибка возникает из-за отключенного подключения по локальной сети или отсутствия физического линка (не светятся светодиоды возле разъема сетевого адаптера.) Включите подключение по локальной сети. Убедитесь в отсутствии сообщения о разрыве кабеля (сетевой кабель не подключен.) Возможно, вышла из строя ваша сетевая карта.</p>
							<h5>«Ошибка 619 (не удается подключиться к удаленному компьютеру, поэтому порт подключения закрыт)»</h5>
							<p>Попробуйте пересоздать соединение, воспользовавшись памяткой по настройке соединения, которую вам оставили монтажники. Проверьте настройки Вашего брандмауэра и, если не уверены в их правильности, отключите его.</p>
							<h5>«Ошибка 720 (отсутствие сетевого протокола управления PPP)»</h5>
							<p>Нажмите Пуск, затем Выполнить и в появившемся окне “Запуск программы” выполнить следующие команды: netsh int ip reset resetlog.txt [Enter] netsh winsock reset [Enter] Затем перезагрузите компьютер и пересоздайте подключение, воспользовавшись памяткой по настройке соединения, которую вам оставили монтажники. В ряде случаев помогает отключение компьютера от питания на 2 минуты. Возможно, поможет переустановка драйверов сетевой карты.</p>
							<h5>«Ошибка 718 (удаленный компьютер не отвечает)»</h5>
							<p>Причиной этой ошибки практически во всех случаях является неправильно указанный логин, введите имя пользователя заново, опираясь на данные из учетной карточки абонента.</p>
							<h5>Подключение происходит, но что-то не работает</h5>
							<h5>Отсутствует сообщение об ошибке, интернет работает, но страницы ресурсов сети не открываются</h5>
							<p>Попробуйте пересоздать соединение (PPPoE), воспользовавшись памяткой по настройке соединения, которую вам оставили монтажники. Убедитесь, что в свойствах «Подключения по локальной сети» сняты флажки со следующих пунктов: «Протокол Интернета TCP/IP», «Служба доступа к файлам и принтерам сетей Microsoft» и «Клиент для сетей Майкрософт». Проверьте настройки файрволла/брандмауэра, антивируса, если они установлены.</p>
							<h5>Отсутствует сообщение об ошибке, но страницы не открываются или открываются слишком медленно</h5>
							<p>Попробуйте пересоздать соединение (PPPoE), воспользовавшись памяткой по настройке соединения, которую вам оставили монтажники. Убедитесь в наличие средств на вашем счете. Проверить это можно в личном кабинете. Проверьте настройки файрволла, антивируса (если они установлены).</p>

							<p>Если рекомендуемые действия не устранили проблему с открытием страничек, то для ускорения решения вопроса, рекомендуем вам перед звонком в техподдержку провести ряд мероприятий, направленных на получение дополнительной диагностической информации. Эти манипуляции подробно описаны в инструкциях, использование которых значительно сократит время, необходимое для решения проблемы.</p>
							<p>При возникновении вопросов, связанных со скоростью работы Интернета, рекомендуем помимо указанных выше диагностических мероприятий, дополнительно воспользоваться сервисом \замера скорости соединения, согласно инструкции.</p>
							<p>К сожалению, невозможно охватить весь перечень возможных рекомендаций по решению возникающих проблем, поэтому если предложенные решения не помогли, ждем звонка в службу поддержки.</p>
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