<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="logo">
		  <a href="" title="На главную">
		  	<span>Н</span>овости
		  </a>
		</div>
		<div class="menuHead">
		  <a href="/about.php">
		    <div style="margin-right: 5%;">О нас</div>
		  </a>
		  <a href="/feedback.php">
			<div>Обратная связь</div>
		  </a>
		</div>
		<div class="regAuth">
		  <a href="/reg.php">Регистрация</a> | <a href="/auth.php">Авторизация</a>
		</div>
	</header>
<!-- sidebar -->
	<div class="wrapper">
		<div class="leftCol">
		  <div class="bigArticle">
		  	<img src="img/articles/01.jpg" alt="Статья 1" title="Статья 1">
		  	<h2>Статья 1</h2>
		  	<p>
		  		<!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
		  		Нам нравится работать с данными. Мы уделяем много времени изучению аналитической информации о наших веб-сайтах. Нам нравится работать с данными. Мы уделяем много времени изучению аналитической информации о наших веб-сайтах. Нам нравится работать с данными. Мы уделяем много времени изучению аналитической информации о наших веб-сайтах. Нам нравится работать с данными. Мы уделяем много времени изучению аналитической информации о наших веб-сайтах.
		  	</p>
		  	<a href="/article.php">
		  	  <div class="more">Далее</div>
		  	</a>
		  </div>
		  <div class="clear"><br></div>
		  <div class="article">
		     <img src="img/articles/02.png" alt="Статья 2" title="Статья 2">
		  	<h2>Статья 2</h2>
		  	<p>
		  		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  	</p>
		  	<a href="/article.php">
		  	  <div class="more-next">Далее</div>
		  	</a>
		  </div>
		  <div class="article">
		     <img src="img/articles/03.jpg" alt="Статья 3" title="Статья 3">
		  	<h2>Статья 3</h2>
		  	<p>
		  		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  	</p>
		  	<a href="/article.php">
		  	  <div class="more-next">Далее</div>
		  	</a>
		  </div>
		</div>
		<div class="rightCol">
			<div class="banner">
				<img src="img/banner1.gif" alt="Баннер 1" title="Баннер 1">
			</div>
			<div class="banner">
				<img src="img/banner2.jpg" alt="Баннер 2" title="Баннер 2">
			</div>
		</div>
	</div>
<!-- end sidebar -->
	<footer>
		<div class="social">
			<a href="https://vk.com" title="ВКонтакте" target="_blank">
				<img src="img/vk.png" alt="vk.com">
			</a>
			<a href="https://facebook.com" title="Facebook" target="_blank">
				<img src="img/facebook.png" alt="facebook.com">
			</a>
			<a href="https://twitter.com" title="Twitter" target="_blank">
				<img src="img/twitter.png" alt="twitter.com">
			</a>
		</div>
		<div class="rights">
			Все права защищены &copy; <?= date("Y"); ?>
		</div>
	</footer>

</body>
</html>