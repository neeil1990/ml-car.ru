<?
if(!$arParams['DESCRIPTION'])
    return false;
?>
<div class="main-index-man"></div>
<div class="main-desc hidden-desc"></div>
<div class="main-desc-inner hidden-desc"></div>
<div class="main-desc-content hidden-desc">
    <h1 class="main-desc-content-text" style="margin: 0;"><?=$arParams['DESCRIPTION']?></h1>
    <a href="javascript: void(0);" onclick="window.Calltouch.Callback.onClickCallButton();" class="learn-more"><span>Заказать звонок</span></a>
</div>
