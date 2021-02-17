<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul>
        <? foreach($arResult as $arItem): ?>
            <?if($arItem["SELECTED"]):?>
                <li><a href="<?=$arItem["LINK"]?>" class="selected"><span><?=$arItem["TEXT"]?></span></a></li>
            <?else:?>
                <li><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
            <?endif?>
        <?endforeach?>
    </ul>
<?endif?>

