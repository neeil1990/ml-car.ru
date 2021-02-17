<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<div class="navbar-floating">
    <div class="wrapper clearfix">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "2",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        );?>
    </div>
</div>

<?$APPLICATION->IncludeComponent("bitrix:menu", "mobile", Array(
    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
    "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
    "DELAY" => "N",	// Откладывать выполнение шаблона меню
    "MAX_LEVEL" => "1",	// Уровень вложенности меню
    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
        0 => "",
    ),
    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
    "ROOT_MENU_TYPE" => "mobile",	// Тип меню для первого уровня
    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
),
    false
);?>

<div class="main-index">
    <div class="wrapper clearfix">
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "5",	// Код информационного блока
            "IBLOCK_TYPE" => "services",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "4",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
            false
        );?>
    </div>
</div>

<div class="car-brands">
    <div class="wrapper clearfix">
        <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cars", Array(
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
            "IBLOCK_ID" => "1",	// Инфоблок
            "IBLOCK_TYPE" => "cars",	// Тип инфоблока
            "SECTION_CODE" => "",	// Код раздела
            "SECTION_FIELDS" => array(	// Поля разделов
                0 => "",
                1 => "",
            ),
            "SECTION_ID" => "",	// ID раздела
            "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
            "SECTION_USER_FIELDS" => array(	// Свойства разделов
                0 => "",
                1 => "",
            ),
            "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
            "TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
            "VIEW_MODE" => "LINE",	// Вид списка подразделов
        ),
            false
        );?>
    </div>
</div>

<div class="services" id="services">
    <div class="wrapper clearfix">
        <?
        $GLOBALS['serviceFilter']['!PROPERTY_HIDDEN_VALUE'] = 'Y';
        $APPLICATION->IncludeComponent("bitrix:news.list", "service", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "serviceFilter",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "2",	// Код информационного блока
            "IBLOCK_TYPE" => "services",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "8",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Наши услуги",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "PRICE",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
            false
        );?>
        <a href="/services/" class="discount-learn" style="display: block;max-width: max-content;margin: 10px auto;"><span>Все услуги</span></a>
    </div>
</div>

<div class="discount-card">
    <div class="wrapper clearfix">
        <?
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/discount.php", Array(), Array(
            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
            "NAME"      => "Seo текст",      // текст всплывающей подсказки на иконке
            "TEMPLATE"  => ""                    // имя шаблона для нового файла
        ));
        ?>
    </div>
</div>

<div class="about-us" id="about-us" >
    <div class="wrapper clearfix">
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "about.us", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "3",	// Код информационного блока
            "IBLOCK_TYPE" => "services",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "4",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "О нашем автоцентре",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
            false
        );?>
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

<div class="seo-block">
    <div class="wrapper clearfix">
        <?
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/seo.php", Array(), Array(
            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
            "NAME"      => "Seo текст",      // текст всплывающей подсказки на иконке
            "TEMPLATE"  => ""                    // имя шаблона для нового файла
        ));
        ?>

        <?
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/seo-side.php", Array(), Array(
            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
            "NAME"      => "Seo адрес",      // текст всплывающей подсказки на иконке
            "TEMPLATE"  => ""                    // имя шаблона для нового файла
        ));
        ?>
    </div>
</div>

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

<div style="width: 100%; height: 400px; margin-top: 40px;" class="clearfix" id="yamap"></div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
