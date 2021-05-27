<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/jquery-ui.css?" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/slick.css?" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/common.css?v2" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(38565720, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/38565720" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body>
<panel><?$APPLICATION->ShowPanel()?></panel>
<header>
    <div class="wrapper clearfix">
        <div class="logo-block">
            <a href="/" title="Автосервис Моторленд">
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/logo.png" alt="Автосервис Моторленд" />
            </a>
        </div>
        <div class="address-block">
            <div class="address-block-address">
                <?
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/street.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Street",      // текст всплывающей подсказки на иконке
                    "TEMPLATE"  => ""                    // имя шаблона для нового файла
                ));
                ?>
            </div>
            <div class="address-block-link">
                <a href="#contacts" class="how-to-get">Как добраться</a>
                <a href="javascript: void(0);" onclick="window.Calltouch.Callback.onClickCallButton();" class="record-online">Запись онлайн</a>
            </div>
        </div>
        <div class="phone-block">
            <div class="phone-block-phone">
                <?
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/phone.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Phone",      // текст всплывающей подсказки на иконке
                    "TEMPLATE"  => ""                    // имя шаблона для нового файла
                ));
                ?>
            </div>
            <div class="phone-block-worktime">
                <?
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/hours.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "worktime",      // текст всплывающей подсказки на иконке
                    "TEMPLATE"  => ""                    // имя шаблона для нового файла
                ));
                ?>
            </div>
        </div>
        <div class="button-block">
            <a href="javascript: void(0);" onclick="window.Calltouch.Callback.onClickCallButton();"><span>Запись онлайн</span></a>
        </div>
        <a href="javascript:void(0);" class="mobile-btn">
            <span class="mobile-btn-line mobile-btn-line1"></span>
            <span class="mobile-btn-line mobile-btn-line2"></span>
            <span class="mobile-btn-line mobile-btn-line3"></span>
        </a>
    </div>
</header>


