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

<div class="services" id="services">
	<div class="wrapper clearfix">
        <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "news", Array(
            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => $arParams["CACHE_TIME"],	// Время кеширования (сек.)
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],	// Тип кеширования
            "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],	// Инфоблок
            "IBLOCK_TYPE" => "services",	// Тип инфоблока
            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],	// Код раздела
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
            "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
            "VIEW_MODE" => "LINE",	// Вид списка подразделов
        ),
            false
        );?>
	</div>
</div>

