<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("services");
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

<br/>

<?$APPLICATION->IncludeComponent("bitrix:news", "service", Array(
    "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
    "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "DETAIL_FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "",
    ),
    "DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
    "DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
    "DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
    "DETAIL_PROPERTY_CODE" => array(	// Свойства
        0 => "PRICE",
        1 => "",
    ),
    "DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "2",	// Инфоблок
    "IBLOCK_TYPE" => "services",	// Тип инфоблока
    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "LIST_FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "",
    ),
    "LIST_PROPERTY_CODE" => array(	// Свойства
        0 => "PRICE",
        1 => "",
    ),
    "MEDIA_PROPERTY" => "",
    "MESSAGE_404" => "",
    "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
    "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
    "NEWS_COUNT" => "20",	// Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",	// Название категорий
    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    "SEF_FOLDER" => "/services/",	// Каталог ЧПУ (относительно корня сайта)
    "SEF_MODE" => "Y",	// Включить поддержку ЧПУ
    "SEF_URL_TEMPLATES" => array(
        "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
        "news" => "",
        "section" => "#SECTION_CODE#/",
    ),
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_STATUS_404" => "Y",	// Устанавливать статус 404
    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
    "SHOW_404" => "Y",	// Показ специальной страницы
    "SLIDER_PROPERTY" => "",
    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
    "TEMPLATE_THEME" => "blue",
    "USE_CATEGORIES" => "N",	// Выводить материалы по теме
    "USE_FILTER" => "N",	// Показывать фильтр
    "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
    "USE_RATING" => "N",	// Разрешить голосование
    "USE_RSS" => "N",	// Разрешить RSS
    "USE_SEARCH" => "N",	// Разрешить поиск
    "USE_SHARE" => "N",	// Отображать панель соц. закладок
),
    false
);?>


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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
