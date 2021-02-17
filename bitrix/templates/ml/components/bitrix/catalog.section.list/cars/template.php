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

<? if (0 < $arResult["SECTIONS_COUNT"]): ?>

    <? foreach ($arResult['SECTIONS'] as &$arSection):
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
        <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="car-brand" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
            <div class="car-brand-bg car-brand-renault"></div>
            <span><?=$arSection['NAME']?></span>
        </a>
    <? endforeach; ?>

<? endif; ?>
