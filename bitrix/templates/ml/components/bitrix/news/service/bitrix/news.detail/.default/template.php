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
