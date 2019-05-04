<!DOCTYPE html>
<html lang="ru">
	<head>
				
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
			
		<script src="script.js?<?echo time();?>"> </script>
		<link rel="stylesheet" type="text/css" href="./style.css?<?echo time();?>"/>
		<title>Убийцы игр</title>

		
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic"/>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css"/>
		<link href="./img/logo.ico" rel="shortcut icon" type="image/x-icon"/>
		<link href="./css/all.css" rel="stylesheet" type="text/css"/>
 	 	<link href="./css/header.css" rel="stylesheet" type="text/css"/>
		<link href="./css/nav.css" rel="stylesheet" type="text/css"/>
		<link href="./css/aside.css" rel="stylesheet" type="text/css"/>
		<link href="./css/article.css" rel="stylesheet" type="text/css"/>
		<link href="./css/footer.css" rel="stylesheet" type="text/css"/>
		<link href="./css/adaptability.css" rel="stylesheet" type="text/css"/>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="./js/mobileMenu.js"></script>
		<script type="text/javascript" src="./js/nav-toggle.js"></script>
		
	</head>
	
	<body>
		
		<header>
			<nav class="container">
				<a class="logo" href="">
					<img src="img/logo2.png" title="killer_games.com" alt=""/>
				</a>
				<div class="nav-toggle"><span></span></div>
				<form action="" method="get" id="searchform">
					<input type="text" placeholder="Искать на сайте..."/>
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
				<ul id="menu">
					<li><a href="">Стол заказов</a></li>
					<li><a href="">Обратная связь</a></li>
				</ul>
				<div id="reg_auth">
					<a href="" title="Войти в личный кабинет">
						<div class="btn">Войти</div>
					</a>
					<a href="" title="Зарегистрируйтесь на сайте">	   
					<div class="btn">Регистрация</div>
					</a>
				</div>
			</nav>
		</header>
		
		<div class="container">
  			<div class="posts-list">
				<article id="post-1" class="post">
					<div class="post-image"><a href=""><img src="./img/banner/Warface.jpg"/></a></div>
					<div class="post-content">
						<div class="category"><a href="">Макросы</a></div>
						<h2 class="post-title">Warface</h2>
						<p>Многопользовательский онлайн-шутер нового поколения от создателей Far Cry и Crysis.</p>
						<div class="post-footer">
							<a class="more-link" href="">Список покупок</a>
							<div class="post-social">
								<a href="" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
				</article>
				<article id="post-1" class="post">
					<div class="post-image"><a href=""><img src="./img/banner/Neverwinter.jpg"/></a></div>
					<div class="post-content">
						<div class="category"><a href="">Макросы</a></div>
							<h2 class="post-title">Neverwinter</h2>
							<p>В Neverwinter вам предстоит встать на защиту одного из самых почитаемых городов сеттинга
							D&D Forgotten Realms и лично участвовать в его возрождении. Эпический сюжет, лихие сражения, классическая ролевая 
							система - все это ждет отважных героев, готовых начать свои приключения в удивительном мире Neverwinter!</p>
							<div class="post-footer">
								<a class="more-link" href="">Список покупок</a>
								<div class="post-social">
									<a href="" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
				</article>
		</div> 
		
		
			<aside>
				<div class="widget">
					<h3 class="widget-title">Категории</h3>
					<ul class="widget-category-list">
						<li><a href="">Макросы</a> (15)</li>
						<li><a href="">Читы</a> (5)</li>
						<li><a href="">Видео</a> (1)</li>
					</ul>
				</div>
				<div class="widget">
					<h3 class="widget-title">Последние записи</h3>
					<ul class="widget-posts-list">
						<li>
							<div class="post-image-small">
								<a href=""><img src="https://image.shutterstock.com/image-vector/wf-initial-letters-looping-linked-260nw-424152571.jpg"/></a>
							</div>
							<h4 class="widget-post-title">Установили новый чит на варфейс</h4>
						</li>
						<li>
							<div class="post-image-small">
								<a href=""><img src="https://image.shutterstock.com/image-vector/wf-initial-letters-looping-linked-260nw-424152571.jpg"/></a>
							</div>
							<h4 class="widget-post-title">Добавили новый  макрос на ак-103</h4>
						</li>
						<li>
							<div class="post-image-small">
								<a href=""><img src="https://image.shutterstock.com/image-vector/wf-initial-letters-looping-linked-260nw-424152571.jpg"/></a>
							</div>
							<h4 class="widget-post-title">Создали сайт</h4>
						</li>
					</ul>
				</div>
				<div class="widget">
					<h3 class="widget-title">Подписка на рассылку</h3>
					<form action="" method="post" id="subscribe">
						<input type="email" name="email" placeholder="Ваш email" required/>
						<button type="submit"><i class="fa fa-paper-plane-o"></i></button>
					</form>
				</div>
			</aside>
		</div>
		
		
		<footer>
			<div class="container">
				<div class="footer-col"><span>Все права защищены © 2019</span></div>
				<div class="footer-col">
					<div class="social-bar-wrap">
						<a title="Facebook" href="" target="_blank"><i class="fa fa-facebook"></i></a>
						<a title="Twitter" href="" target="_blank"><i class="fa fa-twitter"></i></a>
						<a title="Pinterest" href="" target="_blank"><i class="fa fa-pinterest"></i></a>
 						<a title="Instagram" href="" target="_blank"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<div class="footer-col">
					<a href="mailto:admin@yoursite.ru">Написать письмо</a>
				</div>
			</div>
		</footer>

	</body>
</html>

