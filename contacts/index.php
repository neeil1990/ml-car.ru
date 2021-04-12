<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="navbar-floating">
	<div class="wrapper clearfix">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"main",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
	</div>
</div>
 <br>
 <br>
<h1 style="text-align: center;"><br>
 </h1>
<div style="text-align: center; font-size: 17px;">
	<p>
	</p>
 <br>
	<p>
	</p>
	<h1>Как нас найти</h1>
	<p>
		 Автосервис «Мотор Ленд»
	</p>
	<p>
		 Адрес: Воронеж, ул. Шишкова, 75Б
	</p>
	<p>
		 Телефон:&nbsp;<a href="tel:74732324262">+7(473)232-42-62</a>
	</p>
	<p>
		 Дни и часы работы:
	</p>
	<p>
		 Пн-Сб с 8:00 до 20:00
	</p>
	<p>
		 Вс с 9:00 до 18:00
	</p>
	<p>
 <br>
	</p>
	<p>
 <br>
	</p>
</div>
<div style="width: 100%; height: 400px; margin-top: 40px;" class="clearfix" id="yamap">
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>