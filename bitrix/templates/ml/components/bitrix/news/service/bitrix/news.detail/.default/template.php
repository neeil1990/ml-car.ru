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
<? if($arResult['DETAIL_TEXT']): ?>
    <div class="seo-block">
        <div class="wrapper clearfix">
            <div class="seo-text">
                <?=$arResult['DETAIL_TEXT']?>
                <br/>
            </div>
        </div>
    </div>
<? endif; ?>

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
