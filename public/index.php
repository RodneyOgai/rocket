<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Rocket</title>
<meta property="og:title" content="Rocket">
<meta property="og:description" content="Rocket">
<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header class="header">
	<div class="container">
		<div class="header__logo">
			<img src="img/header/logo.png" alt="">
		</div>
		<div class="header__menu">
			<nav>
				<ul>
					<li><a href="">Почему мы?</a></li>
					<li><a href="">Номера</a></li>
					<li><a href="">Отзывы</a></li>
					<li><a href="">Как нас найти</a></li>
				</ul>
			</nav>
		</div>
		<div class="header__burger">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</header>
        
<section class="main">
	<div class="container">
		<div class="main__top">
			<div class="main__title caption">
				<h1>Наши номера</h1>
			</div>
			<div class="main__filter">
				<select class="select" name="filter" id="filter">
					<option data-before="arrow_top">По площади</option>
					<option data-before="arrow_down">По площади</option>
					<option data-before="arrow_top">По цене</option>
					<option data-before="arrow_down">По цене</option>
				</select>
			</div>
		</div>
		<div class="main__wrapper">
			<section class="sidebar">
	<div class="sidebar__top">
		<div class="sidebar__title sidebar__top-title">Цена услуги, ₽</div>
		<div class="sidebar__top-inputs">
			<div class="sidebar__top-input">
				<input type="number" min="1">
				<label>от</label>
			</div>
			<div class="sidebar__top-input">
				<input type="number" min="1">
				<label>до</label>
			</div>
		</div>
	</div>
	<div class="sidebar__center">
		<div class="sidebar__title sidebar__center-title">Площадь</div>
		<div class="sidebar__center-inputs">
			<div class="sidebar__input sidebar__center-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>0.63 м2</label>
			</div>
			<div class="sidebar__input sidebar__center-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>0,90 м2</label>
			</div>
			<div class="sidebar__input sidebar__center-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>1,13 м2</label>
			</div>
			<div class="sidebar__input sidebar__center-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>1,56 м2</label>
			</div>
			<div class="sidebar__input sidebar__center-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>2,56 м2</label>
			</div>
			<div class="sidebar__input sidebar__center-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>2,56 м2</label>
			</div>
		</div>
	</div>
	<div class="sidebar__bottom">
		<div class="sidebar__title sidebar__bottom-title">Оснащение номера</div>
		<div class="sidebar__bottom-inputs">
			<div class="sidebar__input sidebar__bottom-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>Пустой номер</label>
			</div>
			<div class="sidebar__input sidebar__bottom-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>Лежак</label>
			</div>
			<div class="sidebar__input sidebar__bottom-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>Когтеточка</label>
			</div>
			<div class="sidebar__input sidebar__bottom-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>Игровой-комплекс</label>
			</div>
			<div class="sidebar__input sidebar__bottom-input">
				<label class="checkcontainer">
					<input type="checkbox" checked class="checkbox_custom">
					<span class="checkboxbtn"></span>
				</label>
				<label>Домик</label>
			</div>
		</div>
	</div>
	<div class="sidebar__buttons">
		<div class="sidebar__button">
			<button href="" class="button button_submit">Применить</button>
		</div>
		<div class="sidebar__button">
			<button href="" class="button button_filter">Сбросить фильтр</button>
		</div>
	</div>
</section>
			<div class="main__items">
				
				<a class="main__item">
					<div class="main__item-photo">
						<img src="img/main/1.jpg" alt="">
					</div>
					<div class="main__item-info">
						<div class="main__item-title">
							Эконом
						</div>
						<div class="main__item-size">
							Размеры (ШхГхВ) - 90х70х180 см
						</div>
						<div class="main__item-square">
							Площадь - 0,63 м2
						</div>
						<div class="main__item-number">
							Оснащение номера <img src="img/main/numbers/none.svg" alt="">
						</div>
						<div class="main__item-price">
							Цена за сутки: <span>100₽</span>
						</div>
						<div class="main__item-button">
							<button class="button">Забронировать</button>
							<div class="icon">
								<img src="img/main/icons/paw.svg" alt="">
							</div>
						</div>
					</div>
				</a>
				
				<a class="main__item">
					<div class="main__item-photo">
						<img src="img/main/2.jpg" alt="">
					</div>
					<div class="main__item-info">
						<div class="main__item-title">
							Эконом плюс
						</div>
						<div class="main__item-size">
							Размеры (ШхГхВ) - 90х100х180 см
						</div>
						<div class="main__item-square">
							Площадь - 0,90 м2
						</div>
						<div class="main__item-number">
							Оснащение номера <img src="img/main/numbers/bed.svg" alt="">
					   <img src="img/main/numbers/tower.svg" alt="">
		
						</div>
						<div class="main__item-price">
							Цена за сутки: <span>200₽</span>
						</div>
						<div class="main__item-button">
							<button class="button">Забронировать</button>
							<div class="icon">
								<img src="img/main/icons/paw.svg" alt="">
							</div>
						</div>
					</div>
				</a>
				
				<a class="main__item">
					<div class="main__item-photo">
						<img src="img/main/3.jpg" alt="">
					</div>
					<div class="main__item-info">
						<div class="main__item-title">
							Комфорт
						</div>
						<div class="main__item-size">
							Размеры (ШхГхВ) - 100х125х180 см
						</div>
						<div class="main__item-square">
							Площадь - 1,13 м2
						</div>
						<div class="main__item-number">
							Оснащение номера <img src="img/main/numbers/bed.svg" alt="">
					   <img src="img/main/numbers/tower.svg" alt="">
					   <img src="img/main/numbers/toy.svg" alt="">
		
						</div>
						<div class="main__item-price">
							Цена за сутки: <span>200₽</span>
						</div>
						<div class="main__item-button">
							<button class="button">Забронировать</button>
							<div class="icon">
								<img src="img/main/icons/paw.svg" alt="">
							</div>
						</div>
					</div>
				</a>
				
				<a class="main__item">
					<div class="main__item-photo">
						<img src="img/main/4.jpg" alt="">
					</div>
					<div class="main__item-info">
						<div class="main__item-title">
							Сьют
						</div>
						<div class="main__item-size">
							Размеры (ШхГхВ) - 125х125х180 см
						</div>
						<div class="main__item-square">
							Площадь - 1,56 м2
						</div>
						<div class="main__item-number">
							Оснащение номера <img src="img/main/numbers/bed.svg" alt="">
					   <img src="img/main/numbers/tower.svg" alt="">
					   <img src="img/main/numbers/toy.svg" alt="">
		
						</div>
						<div class="main__item-price">
							Цена за сутки: <span>350₽</span>
						</div>
						<div class="main__item-button">
							<button class="button">Забронировать</button>
							<div class="icon">
								<img src="img/main/icons/paw.svg" alt="">
							</div>
						</div>
					</div>
				</a>
				
				<a class="main__item">
					<div class="main__item-photo">
						<img src="img/main/5.jpg" alt="">
					</div>
					<div class="main__item-info">
						<div class="main__item-title">
							Люкс
						</div>
						<div class="main__item-size">
							Размеры (ШхГхВ) - 160х160х180 см
						</div>
						<div class="main__item-square">
							Площадь - 2,56 м2
						</div>
						<div class="main__item-number">
							Оснащение номера <img src="img/main/numbers/bed.svg" alt="">
					   <img src="img/main/numbers/tower.svg" alt="">
					   <img src="img/main/numbers/toy.svg" alt="">
					   <img src="img/main/numbers/house.svg" alt="">
		
						</div>
						<div class="main__item-price">
							Цена за сутки: <span>500₽</span>
						</div>
						<div class="main__item-button">
							<button class="button">Забронировать</button>
							<div class="icon">
								<img src="img/main/icons/paw.svg" alt="">
							</div>
						</div>
					</div>
				</a>
				
				<a class="main__item">
					<div class="main__item-photo">
						<img src="img/main/6.jpg" alt="">
					</div>
					<div class="main__item-info">
						<div class="main__item-title">
							Супер-Люкс
						</div>
						<div class="main__item-size">
							Размеры (ШхГхВ) - 180х160х180 см
						</div>
						<div class="main__item-square">
							Площадь - 2,88 м2
						</div>
						<div class="main__item-number">
							Оснащение номера <img src="img/main/numbers/bed.svg" alt="">
					   <img src="img/main/numbers/tower.svg" alt="">
					   <img src="img/main/numbers/toy.svg" alt="">
					   <img src="img/main/numbers/house.svg" alt="">
		
						</div>
						<div class="main__item-price">
							Цена за сутки: <span>600₽</span>
						</div>
						<div class="main__item-button">
							<button class="button">Забронировать</button>
							<div class="icon">
								<img src="img/main/icons/paw.svg" alt="">
							</div>
						</div>
					</div>
				</a>
				
			</div>
		</div>
	</div>
</section>
    </div><!-- wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
