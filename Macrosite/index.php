

<!DOCTYPE html>
<html lang="ru">

<head>
    <script src="script.js?<?echo time();?>"></script>
    <link rel="stylesheet" type="text/css" href="style.css?<?echo time();?>">
    <meta charset="utf-8">
	<title>Killer Games</title>
	<link href="./css/style-body.css" rel="stylesheet" type="text/css"/>
	<link href="./css/style-header.css" rel="stylesheet" type="text/css"/>
	<link href="./css/style-nav.css" rel="stylesheet" type="text/css"/>
	<link href="./css/style-footer.css" rel="stylesheet" type="text/css"/>
	<link href="./css/style-article.css" rel="stylesheet" type="text/css"/>
	<link href="./css/style-main_page.css" rel="stylesheet" type="text/css"/>
	<meta neme="viewport" content="width=device-width, initial-scale=1">
	<link href="./img/logo.ico" rel="shortcut icon" type="image/x-icon"/>
	<link href="./css/all.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
		<div cclass="content">
		
			<header>
				<div id="logo">
					<a href="https://killer_games.com/" title="На главную страницу">
					<img src="img/logo2.png" title="killer_games.com" alt="">
                    <span>Killer Games</span>
					</a>
				</div>
				<div id="about">	
					<a href="" title="Работа под заказ">Стол заказов</a>
					<a href="" title="Написать нам письмо">Обратная связь</a>
				</div>
				<div id="reg_auth">
					<a href="" title="Войти в личный кабинет">
				    <div class="btn">
						Войти
					</div>
					</a>
				<a href="" title="Зарегистрируйтесь на сайте">	   
					<div class="btn">
						Регистрация
                    </div>					 
				</a>
				</div>				
			</header>
	                <nav>
					       <div id="menuShow"><i class="fas fa-bars"></i></div>
					       <div id="hideMenu">
		                       <a href="">Warface</a>
					           <a href="">Neverwinter Online</a>
					           <a href="">Рейтинг авторов</a>
						       <a href="">Игровые новости</a>
						       <a href="">Вопрос и Ответ</a>
						       <a href="">Форум</a>  
						    </div>
				      <div id="search">
						<span>Поиск</span>
						    <i class="fas fa-search"></i>
						</div>
				            <div id="mobileMenu"> 
					          <a href="">Warface</a><br>
					           <a href="">Neverwinter Online</a><br>
					           <a href="">Рейтинг авторов</a><br>
						       <a href="">Игровые новости</a><br>
						       <a href="">Вопрос и Ответ</a><br>
						       <a href="">Форум</a>
							   <hr>  
					           <a href="">Регистрация</a>
							   <a href="">Войти</a>						
					        </div>
					 </nav> 
                  
				 <div id="main">
				      <div id="news">
					     <h2 class="heading">Новинки</h2>
                           <div style="clear: both"><br></div>
						     <?php
							    for ($i = 0; $i < 4; $i++)  
								     echo ' 
									<div id="article">
							   <img src="https://xgames-online.ru/media/k2/items/cache/36fdb1a35cd2f54f95cf2119fb5bc7ed_M.jpg" alt="Test" title="Test">
							   <span> В Neverwinter вам предстоит встать на защиту одного из самых почитаемых городов сеттинга D&D Forgotten Realms и лично участвовать в его возрождении. Эпический сюжет, лихие сражения, классическая ролевая система - все это ждет отважных героев, готовых начать свои приключения в удивительном мире Neverwinter!</span>
							</div> 
								'; 
							   ?>
							   
							      <a href="" title="В деталях">	   
					                    <div class="btn">
						                 Изучить 
                                       </div>					 
				                  </a>	  
					   </div>						
					</div> 
			  <aside>	
                  <div id="courses">
					     <h2 class="heading">Видео курсы</h2>
                          <div style="clear: both"><br></div>						 
					</div>       
               </aside>
					
			<article>
				<section>
					<div id="wf">Warface</div>
				</section>
		
				<section>
					<div id="nwo">Neverwinter Online</div>
				</section>
			</article>
		</div>
		        <footer>
		        <div id="site_name"><span>Killer Games</span> - дуэт верстальщиков</div>
				<div id="clear"></div>
				<div id="footer_menu">
					<a href="" title="Узнать о рекламе">Реклама</a>
					<a href="" title="Поддержи проект">Спасибо</a>
					<a href="" title="Напиши письмо">Обратная связь</a>
				</div>
				<div id="rights">
					<a href="">Все права защищены  &copy  <?=date ('Y')?></a>
				</div>
				<div id="social">
					<a href="" title="Группа VK"><i class="fab fa-vk"></i></a>
				    <a href="" title="Группа FaceBoook"><i class="fab fa-facebook-square"></i></a>
					<a href="" title="Канал YouTube"><i class="fab fa-youtube"></i></a>
					<a href="" title="Google+"><i class="fab fa-google-plus"></i></a>
	            </div>			
	        </footer>
		</div>	
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	    <script>
		    $('#menuShow').click (function () {
			    if ($('#mobileMenu').is(':visible'))
                    $('#mobileMenu').hide ();
                  else
                    $('#mobileMenu').show ();
            });  
               $(document).scroll (function () {
			      if ($(document).width ()> 785) {
				    if ($(document).scrollTop () > $('header').height () + 10)
					   $('nav').addClass ('fixed');
					else
					   $('nav').removeClass ('fixed');
				}	   
			});		   
			  widow.onresize = function (event) {
			     $('#mobileMenu').hide ();
			};
		 </script>
</body>
</html>