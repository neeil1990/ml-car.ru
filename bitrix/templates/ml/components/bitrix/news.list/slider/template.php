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
<? if($arResult["ITEMS"]):?>
<div class="main-index-man"></div>
<div class="main-desc hidden-desc"></div>
<div class="main-desc-inner hidden-desc"></div>
<div class="main-desc-content hidden-desc">
    <h1 class="main-desc-content-text" style="margin: 0;"><?=$arResult['DESCRIPTION']?></h1>
    <a href="javascript: void(0);" onclick="window.Calltouch.Callback.onClickCallButton();" class="learn-more"><span>Узнать подробности</span></a>
</div>

<div class="main-slider-gradient main-slider-25"></div>
<div class="main-slider-gradient main-slider-50"></div>
<div class="main-slider-gradient main-slider-block">
    <a href="javascript:void(0);" class="mslider-arrow-left"></a>
    <a href="javascript:void(0);" class="mslider-arrow-right"></a>
    <div class="mslider-counter"></div>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="mslider-content" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="mslider-icon-wrapper">
            <div class="mslider-icon"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/slider-icon.png" alt="" /></div>
        </div>
        <div class="mslider-text"><?=$arItem['NAME']?></div>
    </div>
    <? endforeach; ?>
</div>
<? endif; ?>

