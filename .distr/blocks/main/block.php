{% from './data.php' import data as items %}
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
			{% include 'sidebar/block.php' %}
			<div class="main__items">
				{% for item in items %}
				<a class="main__item">
					<div class="main__item-photo">
						{{item.img | safe}}
					</div>
					<div class="main__item-info">
						<div class="main__item-title">
							{{item.title}}
						</div>
						<div class="main__item-size">
							Размеры (ШхГхВ) - {{item.size}}
						</div>
						<div class="main__item-square">
							Площадь - {{item.square}}
						</div>
						<div class="main__item-number">
							Оснащение номера {{item.number | safe}}
						</div>
						<div class="main__item-price">
							Цена за сутки: <span>{{item.price}}</span>
						</div>
						<div class="main__item-button">
							<button class="button">Забронировать</button>
							<div class="icon">
								<img src="img/main/icons/paw.svg" alt="">
							</div>
						</div>
					</div>
				</a>
				{% endfor %}
			</div>
		</div>
	</div>
</section>