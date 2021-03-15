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
<div class="heading"><?=$arResult['SECTION']['PATH'][0]['NAME']?></div>
<div class="services-list" id="drop-down-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="service-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" onclick="window.location.href='<?=$arItem['DETAIL_PAGE_URL']?>'">
        <div class="service-item-in" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat 27px 20px;"><?=$arItem['NAME']?></div>
        <div class="service-item-price">
            <span>от <?=$arItem['PROPERTIES']['PRICE']['VALUE']?> <?=RUB?></span>
        </div>
    </div>
    <? endforeach; ?>
</div>
