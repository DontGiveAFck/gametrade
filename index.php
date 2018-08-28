<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GameTrade[DEV]</title>	
		<link href="css/main-style.css" rel="stylesheet" type="text/css">
		<link href="libs/ionicons/c.css" rel="stylesheet" type="text/css">	
	</head>
	
	<body class="flex flex-col">
	
		<div class="header-wrapper" id="header-wrapper">	
			<div class="header-container flex">
				<a class="logo">Game.Trade</a>
				<form class="search-box flex">
					<input type="text" placeholder="Поиск по сайту">
					<button><i class="ion-a-search"></i></button>
				</form>
				<i class="ion-a-menu" id="toggle"></i>
				<ul class="nav-menu flex" id="nav-menu">	
					<li><a href="#"><i class="ion-a-star"></i>Избранное</a></li>
					<li><a href="#"><i class="ion-log-in"></i>Войти в кабинет</a></li>
					<!--<a href="#"><i class="ion-a-add-circle"></i>Добавить</a>-->
				</ul>
			</div>
		</div>
		
		<div class="main-wrapper">				
			<div class="main-container flex">	
			
				<form class="aside" id="aside">
					<div class="flex flex-col">
						<span>Город</span>
						<select>
							<option name="c1">--- Все города ---</option>
							<option name="c1">Симферополь</option>
							<option name="c1">Севастополь</option>
							<option name="c1">Алло</option>
						</select>
					</div>
					<div class="flex flex-col">
						<span>Платформа</span>						
						<label><input type="checkbox" name="ps4">Play Statuion 4</label>
						<label><input type="checkbox" name="ps3">Play Statuion 3</label>			
						<label><input type="checkbox" name="xboxone">Xbox One</label>
						<label><input type="checkbox" name="xbox360">Xbox 360</label>
					</div>
					<div class="flex flex-col">
						<span>Тип сделки</span>
						<label><input type="checkbox" name="trade">Обмен</label>
						<label><input type="checkbox" name="sale">Продажа</label>
						<label><input type="checkbox" name="buy">Покупка</label>						
					</div>
					<button>Показать</button>
				</form>
				
				<div class="main flex" id="main">
					<div class="item ps">
						<div class="info flex">
							<!--
							<span>
								<i>PS4</i>
								<i class="ion-a-star-outline"></i>
							</span>
							-->
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>
						<img src="img/ps4/game1.jpg" width="178px"/>
						<h3 class="cost">2000 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game2.jpg" width="178px"/>
						<h3 class="cost">1500 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game3.jpg" width="178px"/>
						<h3 class="cost">3000 руб.</h3>
					</div>					
					<div class="item xbox">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/xboxone/game1.jpg" width="178px"/>
						<h3 class="cost">Обмен</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game1.jpg" width="178px"/>
						<h3 class="cost">2000 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game2.jpg" width="178px"/>
						<h3 class="cost">1500 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game3.jpg" width="178px"/>
						<h3 class="cost">3000 руб.</h3>
					</div>					
					<div class="item xbox">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/xboxone/game1.jpg" width="178px"/>
						<h3 class="cost">1200 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game1.jpg" width="178px"/>
						<h3 class="cost">Обмен</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>
						<img src="img/ps4/game1.jpg" width="178px"/>
						<h3 class="cost">2000 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game2.jpg" width="178px"/>
						<h3 class="cost">1500 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game3.jpg" width="178px"/>
						<h3 class="cost">3000 руб.</h3>
					</div>					
					<div class="item xbox">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/xboxone/game1.jpg" width="178px"/>
						<h3 class="cost">Обмен</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game1.jpg" width="178px"/>
						<h3 class="cost">2000 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game2.jpg" width="178px"/>
						<h3 class="cost">1500 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game3.jpg" width="178px"/>
						<h3 class="cost">3000 руб.</h3>
					</div>					
					<div class="item xbox">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/xboxone/game1.jpg" width="178px"/>
						<h3 class="cost">1200 руб.</h3>
					</div>
					<div class="item ps">
						<div class="info flex">
							<ul>
								<li>Имя: ***</li>
								<li>Телефон: ***</li>
								<li>Skype: ***</li>
							</ul>
						</div>					
						<img src="img/ps4/game1.jpg" width="178px"/>
						<h3 class="cost">Обмен</h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-wrapper">
			<div class="footer-container">
				<div class="footer-main flex">
					<ul>
						<h3>*******</h3>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
					</ul>
					<ul>
						<h3>*******</h3>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
					</ul>
					<ul>
						<h3>*******</h3>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
					</ul>
					<ul>
						<h3>*******</h3>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
					</ul>
					<ul>
						<h3>*******</h3>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
						<li>*******</li>
					</ul>
				</div>
				<div class="notice">Администрация Сайта не несет ответственности за размещаемые Пользователями материалы (в т.ч. информации и изображений), их содержание, качество.</div>
				<div class="copyright">© 2016—2018 Компания SOSI</div>
			</div>
		</div>

		<script src="js/toggle.js"></script>
		<script src="js/fi1x-scroll.js"></script>
		
	</body>
</html>
