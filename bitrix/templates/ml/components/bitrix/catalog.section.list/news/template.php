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
<div class="heading">НАШИ УСЛУГИ</div>

<div class="services-list">
    <? foreach ($arResult['SECTIONS'] as &$arItem) :?>
        <div class="service-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" onclick="window.location.href='<?=$arItem['SECTION_PAGE_URL']?>'">
            <div class="service-item-in" style="background: url(<?=$arItem["PICTURE"]["SRC"]?>) no-repeat 27px 20px;"><?=$arItem['NAME']?></div>
            <? if($arItem['UF_PRICE']): ?>
            <div class="service-item-price">
                <span>от <?=$arItem['UF_PRICE']?> <?=RUB?></span>
            </div>
            <? endif; ?>
        </div>
    <? endforeach; ?>
</div>
