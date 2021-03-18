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

<div class="main-index">
    <div class="wrapper clearfix">
        <div class="landing-navigation">
            <ul>
                <li class="with-arrow"><a href="/cars/">Автосервис</a></li>
                <li class="with-arrow">
                    <a href="<?=$arResult['SECTION']['SECTION_PAGE_URL']?>"><?=$arResult['SECTION']['NAME']?></a>
                </li>

                <li ><a href="<?=$arItems['DETAIL_PAGE_URL']?>" title="<?=$arResult['NAME']?>" ><span><?=$arResult['NAME']?></span></a></li>
            </ul>
        </div>
    </div>
</div>

<? if($arResult['SERVICES']): ?>
    <div class="services" id="services">
        <div class="wrapper clearfix">
            <div class="services-list">
                <? foreach($arResult['SERVICES'] as $arService):?>
                    <div class="service-item" onclick="window.location.href = '<?=$arService['DETAIL_PAGE_URL']?>'">
                        <div class="service-item-in" style="background: url(<?=$arService['PREVIEW_PICTURE']?>) no-repeat 27px 20px"><?=$arService['NAME']?></div>
                        <div class="service-item-price">
                            <span>от <?=$arService['PROPERTY_PRICE_VALUE']?> <?=RUB?></span>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<? endif; ?>


<div class="seo-block">
    <div class="wrapper clearfix">
        <? if($arResult['DETAIL_TEXT']): ?>
        <div class="seo-text">
            <?=$arResult['DETAIL_TEXT']?>
            <br/>
        </div>
        <? endif; ?>

        <? if($arResult['PROPERTIES']['ADDRESS']['VALUE']): ?>
            <div class="seo-side">
                <img src="<?=CFile::GetPath($arResult['PROPERTIES']['ADDRESS_P']['VALUE']);?>" alt="<?=$arResult['NAME']?>" /><br />
                <div class="office-address">
                    <div class="office-address-wrapper">
                        <div class="office-address-heading">Адрес офиса:</div>
                        <div class="office-address-text"><?=$arResult['PROPERTIES']['ADDRESS']['VALUE'];?><br />
                            <a href="#yamap">Как добраться</a>
                        </div>
                    </div>
                </div>
            </div>
        <? endif; ?>

    </div>
</div>

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

