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

<? if($arResult['DETAIL_TEXT']): ?>
    <div class="seo-block">
        <div class="wrapper clearfix">
            <div class="seo-text">
                <?=$arResult['DETAIL_TEXT']?>
                <br/>
            </div>
            <?
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/seo-side.php", Array(), Array(
                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                "NAME"      => "Seo адрес",      // текст всплывающей подсказки на иконке
                "TEMPLATE"  => ""                    // имя шаблона для нового файла
            ));
            ?>
        </div>
    </div>
<? endif; ?>
