<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="seo-block">
    <div class="wrapper clearfix">
        <div class="seo-text">
            <div class="car-brands">
                <div class="heading">Осуществляем ремонт</div>
                <div class="wrapper clearfix">
                    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cars.news", Array(
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
            <br/>
        </div>

        <? if($arResult['PROPERTIES']['ADDRESS']['VALUE'] || $arResult['PROPERTIES']['REVIEWS']['VALUE'] || $arResult['PROPERTIES']['BONUS']['VALUE']): ?>
            <div class="seo-side">

                <? if($arResult['PROPERTIES']['ADDRESS']['VALUE']): ?>
                <img src="<?=CFile::GetPath($arResult['PROPERTIES']['ADDRESS_P']['VALUE']);?>" alt="<?=$arResult['NAME']?>" /><br />
                <div class="office-address">
                    <div class="office-address-wrapper">
                        <div class="office-address-heading">Адрес офиса:</div>
                        <div class="office-address-text"><?=$arResult['PROPERTIES']['ADDRESS']['VALUE'];?><br />
                            <a href="#yamap">Как добраться</a>
                        </div>
                    </div>
                </div>
                <? endif; ?>

                <?
                $GLOBALS['reviewsFilter'] = ['ID' => $arResult['PROPERTIES']['REVIEWS']['VALUE']];
                $APPLICATION->IncludeComponent("bitrix:news.list", "reviews.news", Array(
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
                    "FILTER_NAME" => "reviewsFilter",	// Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => $arResult['PROPERTIES']['REVIEWS']['LINK_IBLOCK_ID'],	// Код информационного блока
                    "IBLOCK_TYPE" => "services",	// Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "30",	// Количество новостей на странице
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

                <? if($arResult['PROPERTIES']['BONUS']['VALUE']): ?>
                <div class="bonus-news">
                    <img src="/bitrix/templates/ml/assets/images/card_vn1.png" alt="">
                    <div class="discount-card-list">
                        <ul>
                            <? foreach ($arResult['PROPERTIES']['BONUS']['VALUE'] as $bonus): ?>
                                <li><?=$bonus?></li>
                            <? endforeach; ?>
                        </ul>
                        <p>*Об условиях программы Вы можете узнать на сайте <a href="http://www.ml-bonus.ru/">ml-bonus.ru</a></p>
                        <a href="https://ml-car.ru/bonus-programm.html#seo_title" class="discount-learn"><span>Узнать подробности</span></a>
                    </div>
                </div>
                <? endif; ?>

            </div>
        <? endif; ?>
    </div>
</div>


<div class="about-us" id="about-us" >
    <div class="wrapper clearfix">
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "about.us.news", Array(
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


<? if($arResult['SERVICES']): ?>
    <div class="services" id="services">
        <div class="wrapper clearfix">
            <div class="heading">Возможно вам будет интересно</div>
            <div class="services-list">
                <? foreach($arResult['SERVICES'] as $arService):?>
                    <div class="service-item" onclick="window.location.href = '<?=$arService['DETAIL_PAGE_URL']?>'" style="height: 150px">
                        <div class="service-item-in" style="background: url(<?=$arService['PREVIEW_PICTURE']?>) no-repeat 27px 20px;flex-direction: column;">
                            <span style="margin-bottom: 5px;"><?=$arService['NAME']?> </span>
                            <span style="font-weight: normal;font-size: smaller;"><?=$arService['PREVIEW_TEXT']?></span>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<? endif; ?>


<? if($arResult['PROPERTIES']['MAP']['VALUE'] && $arResult['PROPERTIES']['MARK_MAP']['VALUE'] && $arResult['PROPERTIES']['DESC_MAP']['VALUE']):
    $coords = explode(',', $arResult['PROPERTIES']['MAP']['VALUE']);
    ?>
    <div style="display:none" id="map-setting"
         centerx="<?=trim($coords[0])?>"
         centery="<?=trim($coords[1])?>"
         markx="<?=trim($coords[0])?>"
         marky="<?=trim($coords[1])?>"
         marktitl="<?=$arResult['PROPERTIES']['MARK_MAP']['VALUE']?>"
         markdescr="<?=$arResult['PROPERTIES']['DESC_MAP']['VALUE']?>">
    </div>
<? endif; ?>
