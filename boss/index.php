<?php
session_start();
if (!isset($_SESSION['utms'])) {
	$_SESSION['utms'] = array();
	$_SESSION['utms']['utm_source'] = '';
	$_SESSION['utms']['utm_medium'] = '';
	$_SESSION['utms']['utm_term'] = '';
	$_SESSION['utms']['utm_content'] = '';
	$_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'];
session_id();
$newcena = 1099; // Цена со скидкой
$valuta = "грн";
$skidka = 53;  // Процент скидки
$oldcena = floor(($newcena / (100 - $skidka)) * 100); // Считаем цену без скидки
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Boss</title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="wrapper">
	<div class="unit">
		<div class="wr">
			<div class="burger burger-1">
				<input type="checkbox" name="burger1" id="burger1"/>
				<label for="burger1">
					<span class="bar bar-1"></span>
					<span class="bar bar-2"></span>
					<span class="bar bar-3"></span>
				</label>
			</div>
			<div class="nav">
				<div class="nav-link-wr">
					<p class="title-nav">Меню</p>
					<a class="line line_top" onclick="changeClick()" href="#first">Галерея</a>
					<a class="line line_top" onclick="changeClick()" href="#about">О товаре</a>
					<a class="line line_top" onclick="changeClick()" href="#delivery">Доставка и оплата</a>
					<a class="line line_top" onclick="changeClick()" href="#contact">Контакты</a>
				</div>

				<div class="soc-wr line line_top">
					<a href="http://t.me/MarVol_Store" title="Telegram" class="soc-link">
						<svg width="50" height="42" viewBox="0 0 50 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
									d="M49.3583 3.78509L41.9645 38.6538C41.4063 41.1143 39.952 41.7268 37.8853 40.5683L26.6188 32.2663L21.1833 37.4953C20.5813 38.0973 20.079 38.5996 18.9188 38.5996L19.729 27.1266L40.6083 8.25984C41.5165 7.45134 40.4105 7.00159 39.1978 7.81184L13.3853 24.0658L2.27276 20.5868C-0.143987 19.8326 -0.187737 18.1701 2.77676 17.0098L46.2415 0.264094C48.254 -0.490156 50.0145 0.712094 49.3583 3.78684V3.78509Z"
									fill="white"/>
						</svg>
					</a>
					<a href="http://bit.ly/3bDvTIy" title="Instagram" class="soc-link">
						<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
									d="M22 14.71C17.9859 14.71 14.7102 17.9858 14.7102 21.9999C14.7102 26.0139 17.9859 29.2897 22 29.2897C26.0141 29.2897 29.2898 26.0139 29.2898 21.9999C29.2898 17.9858 26.0141 14.71 22 14.71ZM43.8641 21.9999C43.8641 18.9811 43.8914 15.9897 43.7219 12.9764C43.5523 9.47643 42.7539 6.37018 40.1945 3.81081C37.6297 1.24596 34.5289 0.452994 31.0289 0.283462C28.0102 0.113931 25.0187 0.141275 22.0055 0.141275C18.9867 0.141275 15.9953 0.113931 12.982 0.283462C9.48203 0.452994 6.37578 1.25143 3.81641 3.81081C1.25156 6.37565 0.458594 9.47643 0.289062 12.9764C0.119531 15.9952 0.146875 18.9866 0.146875 21.9999C0.146875 25.0131 0.119531 28.01 0.289062 31.0233C0.458594 34.5233 1.25703 37.6296 3.81641 40.1889C6.38125 42.7538 9.48203 43.5467 12.982 43.7163C16.0008 43.8858 18.9922 43.8585 22.0055 43.8585C25.0242 43.8585 28.0156 43.8858 31.0289 43.7163C34.5289 43.5467 37.6352 42.7483 40.1945 40.1889C42.7594 37.6241 43.5523 34.5233 43.7219 31.0233C43.8969 28.01 43.8641 25.0186 43.8641 21.9999ZM22 33.2163C15.793 33.2163 10.7836 28.2069 10.7836 21.9999C10.7836 15.7928 15.793 10.7835 22 10.7835C28.207 10.7835 33.2164 15.7928 33.2164 21.9999C33.2164 28.2069 28.207 33.2163 22 33.2163ZM33.6758 12.9436C32.2266 12.9436 31.0562 11.7733 31.0562 10.3241C31.0562 8.87487 32.2266 7.70456 33.6758 7.70456C35.125 7.70456 36.2953 8.87487 36.2953 10.3241C36.2957 10.6682 36.2283 11.009 36.0968 11.327C35.9653 11.6451 35.7724 11.934 35.529 12.1773C35.2857 12.4207 34.9968 12.6136 34.6787 12.7451C34.3607 12.8766 34.0199 12.944 33.6758 12.9436Z"
									fill="white"/>
						</svg>
					</a>
					<a href="http://bit.ly/3bDvTIy" title="Viber" class="soc-link">
						<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
									d="M20.8972 0.00689078C17.3662 0.0495158 9.77487 0.629766 5.52887 4.52514C2.3705 7.65464 1.26775 12.2815 1.1385 18.0029C1.03125 23.7036 0.901996 34.4094 11.2214 37.3244V41.7643C11.2214 41.7643 11.1567 43.5408 12.331 43.9051C13.7775 44.363 14.6011 42.9963 15.9761 41.5278L18.5405 38.6279C25.6011 39.215 31.009 37.862 31.6319 37.6613C33.0646 37.2034 41.1345 36.1721 42.4531 25.465C43.8061 14.4073 41.7945 7.44014 38.1631 4.28864H38.1411C37.0452 3.27939 32.6411 0.0701408 22.8016 0.0343908C22.8016 0.0343908 22.0715 -0.0151092 20.8972 0.00551578V0.00689078ZM21.0182 3.11577C22.0206 3.10889 22.6297 3.15152 22.6297 3.15152C30.9581 3.17352 34.9332 5.68014 35.871 6.52439C38.929 9.14514 40.5047 15.4261 39.3511 24.6579C38.2552 33.6091 31.7102 34.1756 30.4989 34.562C29.9832 34.727 25.2202 35.9013 19.2197 35.5149C19.2197 35.5149 14.751 40.9076 13.354 42.2964C13.1326 42.5398 12.8741 42.6113 12.7091 42.5755C12.4726 42.5178 12.4011 42.2249 12.4149 41.8234L12.4575 34.4548C3.70562 32.0348 4.22125 22.9034 4.31475 18.1335C4.422 13.3636 5.31712 9.46139 7.98187 6.81864C11.5692 3.57502 18.0152 3.13777 21.0155 3.11577H21.0182ZM21.6782 7.88427C21.6062 7.88354 21.5348 7.89708 21.468 7.9241C21.4012 7.95112 21.3404 7.99109 21.2892 8.04171C21.2379 8.09232 21.1972 8.15258 21.1693 8.21901C21.1415 8.28544 21.127 8.35673 21.1269 8.42877C21.1269 8.73677 21.3771 8.98014 21.6782 8.98014C23.0416 8.95421 24.3965 9.19845 25.665 9.69875C26.9335 10.1991 28.0903 10.9455 29.0689 11.8951C31.0667 13.8353 32.0402 16.4423 32.0774 19.8509C32.0774 20.152 32.3207 20.4023 32.6287 20.4023V20.3803C32.7739 20.3806 32.9133 20.3236 33.0166 20.2216C33.1199 20.1196 33.1787 19.9809 33.1801 19.8358C33.2469 18.2313 32.9867 16.6301 32.4154 15.1294C31.8441 13.6286 30.9736 12.2597 29.8567 11.1059C27.6801 8.97877 24.9219 7.88289 21.6782 7.88289V7.88427ZM14.4306 9.14514C14.0414 9.08827 13.6445 9.1664 13.3059 9.36652H13.277C12.4909 9.82733 11.7827 10.4098 11.1787 11.0921C10.6769 11.6724 10.4046 12.2595 10.3331 12.8246C10.2905 13.1615 10.3194 13.4984 10.4197 13.8201L10.4555 13.8421C11.0206 15.5031 11.759 17.1009 12.661 18.6051C13.8229 20.7185 15.2528 22.6729 16.9152 24.42L16.9647 24.4915L17.0431 24.5493L17.0926 24.607L17.1504 24.6565C18.9038 26.3238 20.863 27.7604 22.9804 28.9314C25.4004 30.2486 26.8689 30.8715 27.7502 31.13V31.1438C28.0087 31.2221 28.2439 31.2579 28.4804 31.2579C29.2315 31.2029 29.9426 30.8979 30.5002 30.3916C31.1795 29.7876 31.7555 29.0765 32.2052 28.2865V28.2728C32.6274 27.478 32.4844 26.7259 31.8752 26.2171C30.6554 25.1508 29.3362 24.2037 27.9359 23.3888C26.9981 22.88 26.0452 23.188 25.6589 23.7036L24.8352 24.7418C24.4131 25.2574 23.6459 25.1859 23.6459 25.1859L23.6239 25.1996C17.9025 23.738 16.3762 17.9451 16.3762 17.9451C16.3762 17.9451 16.3047 17.1573 16.8341 16.7558L17.8654 15.9253C18.359 15.5238 18.7027 14.5723 18.1734 13.6331C17.364 12.2309 16.419 10.9114 15.3519 9.69377C15.1186 9.40671 14.7913 9.2114 14.4279 9.14239L14.4306 9.14514ZM22.6297 10.7786C21.8996 10.7786 21.8996 11.8814 22.6366 11.8814C23.5445 11.8961 24.4406 12.0896 25.2737 12.4508C26.1067 12.812 26.8605 13.3339 27.4917 13.9865C28.0676 14.6218 28.5102 15.3662 28.7931 16.1756C29.0761 16.985 29.1937 17.8429 29.139 18.6986C29.1415 18.8435 29.2006 18.9815 29.3037 19.0833C29.4067 19.1851 29.5455 19.2424 29.6904 19.2431L29.7124 19.272C29.8583 19.2709 29.9979 19.2125 30.1011 19.1093C30.2042 19.0062 30.2627 18.8665 30.2637 18.7206C30.3132 16.5358 29.634 14.7029 28.3016 13.2344C26.9624 11.7659 25.0937 10.9423 22.7081 10.7786H22.6297V10.7786ZM23.5331 13.7431C22.781 13.7211 22.7521 14.8459 23.4974 14.8679C25.3096 14.9614 26.1896 15.8771 26.3051 17.7609C26.3076 17.9039 26.366 18.0402 26.4678 18.1407C26.5696 18.2412 26.7066 18.2978 26.8496 18.2985H26.8716C26.9451 18.2954 27.0173 18.2776 27.0839 18.2463C27.1505 18.2149 27.2101 18.1706 27.2594 18.116C27.3087 18.0613 27.3466 17.9974 27.3709 17.9279C27.3952 17.8585 27.4054 17.7848 27.401 17.7114C27.2717 15.2556 25.9325 13.8724 23.5551 13.7445H23.5331V13.7431Z"
									fill="white"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
	<header class="unit unit_header">
		<div class="wr wr_header">

		</div>
	</header>
	<div class="unit unit_first">
		<div class="wr wr_first">
			<h1 class="title">В аутлетах <span>Европы</span> сейчас аукционы на <span>коллекции</span> прошлых сезонов...</h1>
			<p>смотри что мы тебе привезли на этот раз!</p>
		</div>
	</div>
	<div id="first" class="unit unit_slider">
		<div class="wr">
			<div class="sl sl_1">
				<div class="sl-item">
					<img src="img/Big-logo-T-shirt-blue.jpg" alt=""/>
					<p class="btn">Цена <span>899</span> грн</p>
				</div>
				<div class="sl-item">
					<img src="img/Big-logo-T-shirt-black.jpg" alt=""/>
					<p class="btn">Цена <span>899</span> грн</p>
				</div>
				<div class="sl-item">
					<img src="img/Small-logo-T-shirt-white.jpg" alt=""/>
					<p class="btn">Цена <span>899</span> грн</p>
				</div>
				<div class="sl-item">
					<img src="img/Small-logo-T-shirt-blue.jpg" alt=""/>
					<p class="btn">Цена <span>899</span> грн</p>
				</div>
				<div class="sl-item">
					<img src="img/Small-logo-T-shirt-black.jpg" alt=""/>
					<p class="btn">Цена <span>899</span> грн</p>
				</div>
			</div>
			<div class="arrow-sl-wr">
				<div class="arrow-sl   arrow-sl_left arrow-sl_left_1"><img src="img/arrow_sl.svg" alt=""/></div>
				<div class="arrow-sl   arrow-sl_right arrow-sl_right_1"><img src="img/arrow_sl.svg" alt=""/></div>
			</div>
		</div>
	</div>
	<div class="unit unit_form">
		<div class="wr wr_form">
			<form class="form" method="post" action="zakaz.php">
<!--				<p class="title-form">Выбрать футболку</p>-->
<!--				<div id="radio-wrapper-product" class="slider-nav slider-nav-0 radio-wrapper-product">-->
<!--					<label class="itemRadioButton line line_top">-->
<!--						<input value="Big logo T-shirt blue" class="product-radio" checked type="radio" name="product">-->
<!--						<span>Big logo T-shirt blue</span>-->
<!--					</label>-->
<!--					<label class="itemRadioButton line line_top">-->
<!--						<input value="Big logo T-shirt black" class="product-radio" type="radio" name="product">-->
<!--						<span>Big logo T-shirt black</span>-->
<!--					</label>-->
<!--					<label class="itemRadioButton line line_top">-->
<!--						<input value="Small logo T-shirt white" class="product-radio" type="radio" name="product">-->
<!--						<span>Small logo T-shirt white</span>-->
<!--					</label>-->
<!--					<label class="itemRadioButton line line_top">-->
<!--						<input value="Small logo T-shirt blue" class="product-radio" type="radio" name="product">-->
<!--						<span>Small logo T-shirt blue</span>-->
<!--					</label>-->
<!--					<label class="itemRadioButton line line_top">-->
<!--						<input value="Small logo T-shirt black" class="product-radio" type="radio" name="product">-->
<!--						<span>Small logo T-shirt black</span>-->
<!--					</label>-->
<!--				</div>-->
                <div>
                    <select id="selectTest">
                        <option value="0">Test 1</option>
                        <option value="1">Test 2</option>
                        <option value="2" selected>Test 3</option>
                        <option value="3">Test 4</option>
                        <option value="4">Test 5</option>
                    </select>
                </div>
				<div class="radio-wrapper-size">
					<label>
						<input value="S" checked type="radio" name="size">
						<span>S</span>
					</label>
					<label>
						<input value="M" type="radio" name="size">
						<span>M</span>
					</label>
					<label>
						<input value="L" type="radio" name="size">
						<span>L</span>
					</label>
					<label>
						<input value="XL" type="radio" name="size">
						<span>XL</span>
					</label>
					<label>
						<input value="XXL" type="radio" name="size">
						<span>XXL</span>
					</label>
				</div>
				<div class="form-input-wr">
					<label class="line label label-user">
						<input type="text" name="name" placeholder="имя">
					</label>
					<label class="line label label-phone">
						<input class="ss" type="tel" name="phone" placeholder="Телефон">
					</label>
					<input type="hidden" name="form" value="Перевая форма">
					<button class="btn custom-btn" type="submit">Купить сейчас</button>
				</div>
			</form>
		</div>
	</div>
	<div id="about" class="unit unit_sl-2">
		<div class="wr">
			<div class="logo">
				<img src="img/logo.png" alt=""/>
			</div>
			<h2 class="title"><span>Большой</span> логотип для тех кто хочет подчеркнуть
				<span>свой статус</span> или базовая с маленьким логотипом на <span>каждый день</span></h2>
			<div class="sl sl_2">
				<a href="#formModal" class="sl-item fancybox">
					<img src="img/1.jpg" alt=""/>
					<span class="btn custom-btn">Оформить заказ</span>
				</a>
				<a href="#formModal" class="sl-item fancybox">
					<img src="img/2.jpg" alt=""/>
					<span class="btn custom-btn">Оформить заказ</span>
				</a>
				<a href="#formModal" class="sl-item fancybox">
					<img src="img/3.jpg" alt=""/>
					<span class="btn custom-btn">Оформить заказ</span>
				</a>
				<a href="#formModal" class="sl-item fancybox">
					<img src="img/4.jpg" alt=""/>
					<span class="btn custom-btn">Оформить заказ</span>
				</a>
				<a href="#formModal" class="sl-item fancybox">
					<img src="img/6.jpg" alt=""/>
					<span class="btn custom-btn">Оформить заказ</span>
				</a>

			</div>
			<div class="arrow-sl-wr">
				<div class="arrow-sl  sss_1 arrow-sl_left arrow-sl_left_2"><img src="img/arrow_sl.svg" alt=""/></div>
				<div class="arrow-sl  sss arrow-sl_right arrow-sl_right_2"><img src="img/arrow_sl.svg" alt=""/></div>
			</div>
			<p class="text">Приятная, качественная ткань от Хьюго, а также безупречная репутация бренда говорят сами за себя .... здесь нам нечего добавить... тебе осталось только выбрать цвет</p>

		</div>
	</div>
	<div class="unit unit_five">
		<div class="wr">
			<img class="img_brend" src="img/img_brend.jpg" alt=""/>
			<p class="text">Outleto – это торговый центр, в котором можно приобрести брендовую вещь, прошлых сезонов, с грандиозной скидкой, от 30 до 70%. Впечатляет? При чем скидки действуют круглый год. Здесь сразу стоит понимать, что фраза «прошлые сезоны» совсем не означает, что это куча одежды, которая уже не актуальна. Нет это вовсе не так. В таких магазинах, можно сказать бутиках, собраны новые, качественные, а главное модные вещи, которые хочется носить</p>
		</div>
	</div>
	<div id="delivery" class="unit unit_step">
		<div class="wr wr_step">
			<div class="logo"><img src="img/logo.png" alt=""/></div>
			<div class="step-wr">
				<div class="step-item">
					<div class="step-item-round">
						<img src="img/step-1.png" alt="#"/>
					</div>
					<span class="step-item-text">Вы оставляете заявку</span>
				</div>
				<div class="step-item">
					<div class="step-item-round">
						<img src="img/step-2.png" alt="#"/>
					</div>
					<span class="step-item-text">Наши менеджеры связываются с вами</span>
				</div>
				<div class="step-item">
					<div class="step-item-round">
						<img src="img/step-3.png" alt="#"/>
					</div>
					<span
							class="step-item-text">Отправка день-в-день... но если твоего размера не оказалось мы доставим его в течении недели, так как у нас авиа доставка дважды в неделю с Эвропы</span>
				</div>
				<div class="step-item">
					<div class="step-item-round">
						<img src="img/step-4.png" alt="#"/>
					</div>
					<span class="step-item-text">Вы проверяете и оплачиваете заказ на почте</span>
				</div>
			</div>
			<div class="btn-wr">
				<a href="#formModalSimple" class="btn btn_simple fancybox">Сделать оптовий заказ</a>
			</div>
		</div>
	</div>
	<footer id="contact" class="unit unit_footer">
		<div class="wr wr_footer">
			<h2 class="title title_footer">Наши <span>социальные</span> сети</h2>
			<div class="soc-wr">

				<a href="http://t.me/MarVol_Store" title="Telegram" class="soc-link">
					<svg width="50" height="42" viewBox="0 0 50 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
								d="M49.3583 3.78509L41.9645 38.6538C41.4063 41.1143 39.952 41.7268 37.8853 40.5683L26.6188 32.2663L21.1833 37.4953C20.5813 38.0973 20.079 38.5996 18.9188 38.5996L19.729 27.1266L40.6083 8.25984C41.5165 7.45134 40.4105 7.00159 39.1978 7.81184L13.3853 24.0658L2.27276 20.5868C-0.143987 19.8326 -0.187737 18.1701 2.77676 17.0098L46.2415 0.264094C48.254 -0.490156 50.0145 0.712094 49.3583 3.78684V3.78509Z"
								fill="white"/>
					</svg>
				</a>
				<a href="http://bit.ly/3bDvTIy" title="Instagram" class="soc-link">
					<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
								d="M22 14.71C17.9859 14.71 14.7102 17.9858 14.7102 21.9999C14.7102 26.0139 17.9859 29.2897 22 29.2897C26.0141 29.2897 29.2898 26.0139 29.2898 21.9999C29.2898 17.9858 26.0141 14.71 22 14.71ZM43.8641 21.9999C43.8641 18.9811 43.8914 15.9897 43.7219 12.9764C43.5523 9.47643 42.7539 6.37018 40.1945 3.81081C37.6297 1.24596 34.5289 0.452994 31.0289 0.283462C28.0102 0.113931 25.0187 0.141275 22.0055 0.141275C18.9867 0.141275 15.9953 0.113931 12.982 0.283462C9.48203 0.452994 6.37578 1.25143 3.81641 3.81081C1.25156 6.37565 0.458594 9.47643 0.289062 12.9764C0.119531 15.9952 0.146875 18.9866 0.146875 21.9999C0.146875 25.0131 0.119531 28.01 0.289062 31.0233C0.458594 34.5233 1.25703 37.6296 3.81641 40.1889C6.38125 42.7538 9.48203 43.5467 12.982 43.7163C16.0008 43.8858 18.9922 43.8585 22.0055 43.8585C25.0242 43.8585 28.0156 43.8858 31.0289 43.7163C34.5289 43.5467 37.6352 42.7483 40.1945 40.1889C42.7594 37.6241 43.5523 34.5233 43.7219 31.0233C43.8969 28.01 43.8641 25.0186 43.8641 21.9999ZM22 33.2163C15.793 33.2163 10.7836 28.2069 10.7836 21.9999C10.7836 15.7928 15.793 10.7835 22 10.7835C28.207 10.7835 33.2164 15.7928 33.2164 21.9999C33.2164 28.2069 28.207 33.2163 22 33.2163ZM33.6758 12.9436C32.2266 12.9436 31.0562 11.7733 31.0562 10.3241C31.0562 8.87487 32.2266 7.70456 33.6758 7.70456C35.125 7.70456 36.2953 8.87487 36.2953 10.3241C36.2957 10.6682 36.2283 11.009 36.0968 11.327C35.9653 11.6451 35.7724 11.934 35.529 12.1773C35.2857 12.4207 34.9968 12.6136 34.6787 12.7451C34.3607 12.8766 34.0199 12.944 33.6758 12.9436Z"
								fill="white"/>
					</svg>
				</a>
				<a href="http://bit.ly/3bDvTIy" title="Viber" class="soc-link">
					<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
								d="M20.8972 0.00689078C17.3662 0.0495158 9.77487 0.629766 5.52887 4.52514C2.3705 7.65464 1.26775 12.2815 1.1385 18.0029C1.03125 23.7036 0.901996 34.4094 11.2214 37.3244V41.7643C11.2214 41.7643 11.1567 43.5408 12.331 43.9051C13.7775 44.363 14.6011 42.9963 15.9761 41.5278L18.5405 38.6279C25.6011 39.215 31.009 37.862 31.6319 37.6613C33.0646 37.2034 41.1345 36.1721 42.4531 25.465C43.8061 14.4073 41.7945 7.44014 38.1631 4.28864H38.1411C37.0452 3.27939 32.6411 0.0701408 22.8016 0.0343908C22.8016 0.0343908 22.0715 -0.0151092 20.8972 0.00551578V0.00689078ZM21.0182 3.11577C22.0206 3.10889 22.6297 3.15152 22.6297 3.15152C30.9581 3.17352 34.9332 5.68014 35.871 6.52439C38.929 9.14514 40.5047 15.4261 39.3511 24.6579C38.2552 33.6091 31.7102 34.1756 30.4989 34.562C29.9832 34.727 25.2202 35.9013 19.2197 35.5149C19.2197 35.5149 14.751 40.9076 13.354 42.2964C13.1326 42.5398 12.8741 42.6113 12.7091 42.5755C12.4726 42.5178 12.4011 42.2249 12.4149 41.8234L12.4575 34.4548C3.70562 32.0348 4.22125 22.9034 4.31475 18.1335C4.422 13.3636 5.31712 9.46139 7.98187 6.81864C11.5692 3.57502 18.0152 3.13777 21.0155 3.11577H21.0182ZM21.6782 7.88427C21.6062 7.88354 21.5348 7.89708 21.468 7.9241C21.4012 7.95112 21.3404 7.99109 21.2892 8.04171C21.2379 8.09232 21.1972 8.15258 21.1693 8.21901C21.1415 8.28544 21.127 8.35673 21.1269 8.42877C21.1269 8.73677 21.3771 8.98014 21.6782 8.98014C23.0416 8.95421 24.3965 9.19845 25.665 9.69875C26.9335 10.1991 28.0903 10.9455 29.0689 11.8951C31.0667 13.8353 32.0402 16.4423 32.0774 19.8509C32.0774 20.152 32.3207 20.4023 32.6287 20.4023V20.3803C32.7739 20.3806 32.9133 20.3236 33.0166 20.2216C33.1199 20.1196 33.1787 19.9809 33.1801 19.8358C33.2469 18.2313 32.9867 16.6301 32.4154 15.1294C31.8441 13.6286 30.9736 12.2597 29.8567 11.1059C27.6801 8.97877 24.9219 7.88289 21.6782 7.88289V7.88427ZM14.4306 9.14514C14.0414 9.08827 13.6445 9.1664 13.3059 9.36652H13.277C12.4909 9.82733 11.7827 10.4098 11.1787 11.0921C10.6769 11.6724 10.4046 12.2595 10.3331 12.8246C10.2905 13.1615 10.3194 13.4984 10.4197 13.8201L10.4555 13.8421C11.0206 15.5031 11.759 17.1009 12.661 18.6051C13.8229 20.7185 15.2528 22.6729 16.9152 24.42L16.9647 24.4915L17.0431 24.5493L17.0926 24.607L17.1504 24.6565C18.9038 26.3238 20.863 27.7604 22.9804 28.9314C25.4004 30.2486 26.8689 30.8715 27.7502 31.13V31.1438C28.0087 31.2221 28.2439 31.2579 28.4804 31.2579C29.2315 31.2029 29.9426 30.8979 30.5002 30.3916C31.1795 29.7876 31.7555 29.0765 32.2052 28.2865V28.2728C32.6274 27.478 32.4844 26.7259 31.8752 26.2171C30.6554 25.1508 29.3362 24.2037 27.9359 23.3888C26.9981 22.88 26.0452 23.188 25.6589 23.7036L24.8352 24.7418C24.4131 25.2574 23.6459 25.1859 23.6459 25.1859L23.6239 25.1996C17.9025 23.738 16.3762 17.9451 16.3762 17.9451C16.3762 17.9451 16.3047 17.1573 16.8341 16.7558L17.8654 15.9253C18.359 15.5238 18.7027 14.5723 18.1734 13.6331C17.364 12.2309 16.419 10.9114 15.3519 9.69377C15.1186 9.40671 14.7913 9.2114 14.4279 9.14239L14.4306 9.14514ZM22.6297 10.7786C21.8996 10.7786 21.8996 11.8814 22.6366 11.8814C23.5445 11.8961 24.4406 12.0896 25.2737 12.4508C26.1067 12.812 26.8605 13.3339 27.4917 13.9865C28.0676 14.6218 28.5102 15.3662 28.7931 16.1756C29.0761 16.985 29.1937 17.8429 29.139 18.6986C29.1415 18.8435 29.2006 18.9815 29.3037 19.0833C29.4067 19.1851 29.5455 19.2424 29.6904 19.2431L29.7124 19.272C29.8583 19.2709 29.9979 19.2125 30.1011 19.1093C30.2042 19.0062 30.2627 18.8665 30.2637 18.7206C30.3132 16.5358 29.634 14.7029 28.3016 13.2344C26.9624 11.7659 25.0937 10.9423 22.7081 10.7786H22.6297V10.7786ZM23.5331 13.7431C22.781 13.7211 22.7521 14.8459 23.4974 14.8679C25.3096 14.9614 26.1896 15.8771 26.3051 17.7609C26.3076 17.9039 26.366 18.0402 26.4678 18.1407C26.5696 18.2412 26.7066 18.2978 26.8496 18.2985H26.8716C26.9451 18.2954 27.0173 18.2776 27.0839 18.2463C27.1505 18.2149 27.2101 18.1706 27.2594 18.116C27.3087 18.0613 27.3466 17.9974 27.3709 17.9279C27.3952 17.8585 27.4054 17.7848 27.401 17.7114C27.2717 15.2556 25.9325 13.8724 23.5551 13.7445H23.5331V13.7431Z"
								fill="white"/>
					</svg>
				</a>
			</div>
			<a class="copywrite" href="politik.html">Политика конфиденциальности</a>
			<p class="copywrite">© 2020 all rights reserved</p>
		</div>
	</footer>
</div>
<div style="display: none;" id="formModal">
	<form class="form form_popup " method="post" action="zakaz.php">
		<a class="logo" href="/"><img src="img/logo.png" alt=""/></a>
<!--		<p class="title-form">Выбрать футболку</p>-->
<!--		<div id="radio-wrapper-product" class="slider-nav slider-nav-1 radio-wrapper-product">-->
<!--			<label class=" itemRadioButton_1 line line_top">-->
<!--				<input value="Big logo T-shirt blue" class="product-radio" checked type="radio" name="product">-->
<!--				<span>Big logo T-shirt blue</span>-->
<!--			</label>-->
<!--			<label class=" itemRadioButton_1 line line_top">-->
<!--				<input value="Big logo T-shirt black" class="product-radio" type="radio" name="product">-->
<!--				<span>Big logo T-shirt black</span>-->
<!--			</label>-->
<!--			<label class=" itemRadioButton_1 line line_top">-->
<!--				<input value="Small logo T-shirt white" class="product-radio" type="radio" name="product">-->
<!--				<span>Small logo T-shirt white</span>-->
<!--			</label>-->
<!--			<label class=" itemRadioButton_1 line line_top">-->
<!--				<input value="Small logo T-shirt blue" class="product-radio" type="radio" name="product">-->
<!--				<span>Small logo T-shirt blue</span>-->
<!--			</label>-->
<!--			<label class=" itemRadioButton_1 line line_top">-->
<!--				<input value="Small logo T-shirt black" class="product-radio" type="radio" name="product">-->
<!--				<span>Small logo T-shirt black</span>-->
<!--			</label>-->
<!--		</div>-->
		<div class="radio-wrapper-size">
			<label>
				<input value="S" checked type="radio" name="size">
				<span>S</span>
			</label>
			<label>
				<input value="M" type="radio" name="size">
				<span>M</span>
			</label>
			<label>
				<input value="L" type="radio" name="size">
				<span>L</span>
			</label>
			<label>
				<input value="XL" type="radio" name="size">
				<span>XL</span>
			</label>
			<label>
				<input value="XXL" type="radio" name="size">
				<span>XXL</span>
			</label>
		</div>
		<div class="form-input-wr">
			<label class="line label label-user">
				<input type="text" name="name" placeholder="имя">
			</label>
			<label class="line label label-phone">
				<input class="ss" type="tel" name="phone" placeholder="Телефон">
			</label>
			<input type="hidden" name="form" value="Вторая форма">
			<button class="btn" type="submit">Купить сейчас</button>
		</div>
	</form>
</div>
<div style="display: none;" id="formModalSimple">
	<form class="form form_popup " method="post" action="zakaz.php">
		<a class="logo" href="/"><img src="img/logo.png" alt=""/></a>
		<div class="form-input-wr">
			<label class="line label label-user">
				<input type="text" name="name" placeholder="имя">
			</label>
			<label class="line label label-phone">
				<input class="ss" type="tel" name="phone" placeholder="Телефон">
			</label>
			<input type="hidden" name="form" value="Упрощенная форма">
			<button class="btn" type="submit">Купить сейчас</button>
		</div>
	</form>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>