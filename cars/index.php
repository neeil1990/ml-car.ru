<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("cars");
?>

<?$APPLICATION->IncludeComponent("bitrix:catalog", "cars", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
		"DETAIL_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"DETAIL_BRAND_USE" => "N",	// Использовать компонент "Бренды"
		"DETAIL_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
		"DETAIL_DETAIL_PICTURE_MODE" => "MAGNIFIER",	// Режим показа детальной картинки
		"DETAIL_DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса на детальной странице
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"DETAIL_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для детального показа элемента
		"DETAIL_USE_COMMENTS" => "N",	// Включить отзывы о товаре
		"DETAIL_USE_VOTE_RATING" => "N",	// Включить рейтинг товара
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
		"FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
		"IBLOCK_ID" => "1",	// Инфоблок
		"IBLOCK_TYPE" => "cars",	// Тип инфоблока
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => "-",	// Свойство меток товара
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
		"LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
		"LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
		"LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
		"LIST_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства раздела
		"LIST_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства раздела
		"LIST_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства раздела
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_COMPARE" => "Сравнение",	// Текст кнопки "Сравнение"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => "",	// Тип цены
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"SECTIONS_VIEW_MODE" => "LIST",	// Вид списка подразделов
		"SECTION_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"SECTION_COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SEF_FOLDER" => "/cars/",	// Каталог ЧПУ (относительно корня сайта)
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEF_URL_TEMPLATES" => array(
			"compare" => "compare.php?action=#ACTION_CODE#",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"section" => "#SECTION_CODE#/",
			"sections" => "",
			"smart_filter" => "#ELEMENT_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "Y",	// Показ специальной страницы
		"SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"SHOW_TOP_ELEMENTS" => "Y",	// Выводить топ элементов
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"TOP_ELEMENT_COUNT" => "9",	// Количество выводимых элементов
		"TOP_ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
		"TOP_ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
		"TOP_ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
		"TOP_ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
		"TOP_LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"TOP_VIEW_MODE" => "SECTION",	// Показ элементов top'а
		"USER_CONSENT" => "N",	// Запрашивать согласие
		"USER_CONSENT_ID" => "0",	// Соглашение
		"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
		"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
		"USE_COMPARE" => "N",	// Разрешить сравнение товаров
		"USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "N",	// Показывать фильтр
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"USE_STORE" => "N",	// Показывать блок "Количество товара на складе"
	),
	false
);?>

<div class="feedback" id="contacts">
    <div class="wrapper clearfix">
        <?
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/feedback.php", Array(), Array(
            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
            "NAME"      => "Seo текст",      // текст всплывающей подсказки на иконке
            "TEMPLATE"  => ""                    // имя шаблона для нового файла
        ));
        ?>
    </div>
</div>

<?$APPLICATION->IncludeComponent("bitrix:news.line", "gallery", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "300",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
    "FIELD_CODE" => array(	// Поля
        0 => "PREVIEW_PICTURE",
        1 => "",
    ),
    "IBLOCKS" => array(	// Код информационного блока
        0 => "4",
    ),
    "IBLOCK_TYPE" => "services",	// Тип информационного блока
    "NEWS_COUNT" => "20",	// Количество новостей на странице
    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
),
    false
);?>

<div style="width: 100%; height: 400px; margin-top: 40px;" class="clearfix" id="yamap"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
