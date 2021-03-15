<footer>
    <div class="wrapper clearfix">
        <div class="foot-logo-block">
            <a href="http://ml-car.com/" title="Автосервис Мотор Ленд">

                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/logo.png" alt="Автосервис Мотор Ленд" />
            </a>
        </div>
        <div class="foot-phone-block">
            <div class="foot-phone-block-phone">
                <?
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/phone.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Phone",      // текст всплывающей подсказки на иконке
                    "TEMPLATE"  => ""                    // имя шаблона для нового файла
                ));
                ?>
            </div>
            <div class="foot-phone-block-worktime">
                <?
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/hours.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "worktime",      // текст всплывающей подсказки на иконке
                    "TEMPLATE"  => ""                    // имя шаблона для нового файла
                ));
                ?>
            </div>
        </div>
        <div class="foot-address-block">
            <div class="foot-address-block-address">
                <?
                $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/street.php", Array(), Array(
                    "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                    "NAME"      => "Street",      // текст всплывающей подсказки на иконке
                    "TEMPLATE"  => ""                    // имя шаблона для нового файла
                ));
                ?>
            </div>
            <div class="foot-address-block-link">
                <a href="#contacts" class="how-to-get">Как добраться</a>
                <a href="javascript: void(0);" onclick="window.Calltouch.Callback.onClickCallButton();" class="record-online">Запись онлайн</a>
            </div>
        </div>
        <div class="foot-copy">
            <a href="http://promo01.ru" title="Разработка и продвижение сайтов - компания «Генерация»">
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/copy.png" alt="Разработка и продвижение сайтов - компания «Генерация»" />
            </a>
        </div>
    </div>
	<div style="padding-bottom: 20px; text-align: center;">
 <a href="/privacy.pdf">Политика конфиденциальности</a> | <a href="/Terms.pdf">Пользовательское соглашение</a>
	</div>
    <div class="wrapper clearfix">
        <div class="navbar-footer">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "footer",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            );?>
        </div>
    </div>

    <div style="display:none" id="map-setting"
         centerx="51.705866"
         centery="39.195185"
         markx="51.705969"
         marky="39.195217"
         marktitl="Автосервис Мотор Ленд"
         markdescr="<b style='color: #ff1b1f;'>Автосервис Мотор Ленд</b><br>ул.Шишкова 75Б<br>+7 473 232 42 62">
    </div>

</footer>

<script type="text/javascript" src="https://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/easing.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/swipe.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/frontend.js?v2"></script>

<!-- calltouch -->
<script type="text/javascript">

    (function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};

        if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;

        if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}

        function p(cId){var a=d.getElementsByTagName("script")[0],

            s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};

            s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;

            if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}

    })(window,document,"ct","ibtcfs9b");

</script>
<!--calltouch -->

</body>
</html>
