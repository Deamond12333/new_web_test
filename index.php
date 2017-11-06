<?php
	include "lib.php";
	$countOfEnters = 0;
	date_default_timezone_set("Asia/Omsk");
	setlocale(LC_ALL, "RUS");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	$hour = strftime('%H');
	
	if (isset($_COOKIE['countOfEnters']))
	{
		$countOfEnters = $_COOKIE['countOfEnters'];
		if ($_COOKIE['setDay'] != $day || $_COOKIE['setMon'] != $mon
			|| $_COOKIE['setYear'] != $year || (int)$hour - (int)$_COOKIE['setHour'] > 4)
		{
			setcookie('countOfEnters', $countOfEnters+=1);
			setcookie('setHour', $hour);
			setcookie('setDay', $day);
			setcookie('setMon', $mon);
			setcookie('setYear', $year);
		}			
	}
	
	$parts = explode('/', $_SERVER['REDIRECT_URL']);
	switch ($parts[1])
	{
		case "get":
			echo file_get_contents($_GET['attr'].'.php');
		return;
	}
	/*if ($_GET['towns'] != null)
	{
		$towns[0] = "Омск";
		$towns[1] = "Красноярск";
		echo json_encode($towns);
	}*/
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<meta http-equiv="Cache-Control" content="no-cache">
		<link rel="stylesheet" href="css/styles.scss" />
		<title>Швейцарские часы Cosmograph Daytona</title>
	</head>
	
	<body>
		<script
			src="https://code.jquery.com/jquery-3.2.1.js"
			integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			crossorigin="anonymous">
		</script>
		
		<div class="header" style="background: url(../content/header-<?php echo getHeader((int)$hour);?>.jpg) no-repeat center;">
			<div class="container">
				<h1 class="header_h1"><?php echo getWelcome((int)$hour); ?></h1>
				<h2 class="header_h2">Вы были на нашем сайте <?=$countOfEnters?>
					раз<?php echo getCountOfEnters_end($countOfEnters); ?></h2>
			</div>
		</div>
		
		<div class="nav">
			<div class="nav_container">
				<button class="nav_button logo_button nb_active" id="general"> </button>
				<button class="nav_button" id="description">Описание</button>
				<button class="nav_button" id="characteristics">Технические характеристики</button>
				<button class="nav_button" id="instruction">Инструкция по уходу</button>
				<button class="nav_button" id="using">Руководство по эксплуатации</button>
				<button class="nav_button" id="classic">Классический стиль</button>
				<button class="nav_button" id="feedback">Связаться с нами</button>
			</div>
			<script src="js/nav.js"></script>
		</div>
		
		<div class="content">
		<? include "general.php"; ?>
		</div>

		<div class="footer">
			
		</div>
	</body>
</html>