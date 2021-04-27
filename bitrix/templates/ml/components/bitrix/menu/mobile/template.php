<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="mobile-navbar">
        <ul>
             <? foreach($arResult as $arItem): ?>
            <li>
                <a href="<?=$arItem["LINK"]?>" title="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></a>
                <? if($arItem['PARAMS']['MODEL']): ?>
                <ul>
                    <? foreach ($arItem['PARAMS']['MODEL'] as $m): ?>
                    <li><a href="<?=$m['DETAIL_PAGE_URL']?>" title="<?=$m['NAME']?>" ><?=$m['NAME']?></a></li>
                    <? endforeach; ?>
                </ul>
                <? endif; ?>
            </li>
             <?endforeach?>
        </ul>
    </div>
<?endif?>

