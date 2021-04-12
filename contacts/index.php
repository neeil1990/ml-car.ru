<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="navbar-floating">
    <div class="wrapper clearfix">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "2",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        );?>
    </div>
</div>

<?$APPLICATION->IncludeComponent("bitrix:menu", "mobile", Array(
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
    "ROOT_MENU_TYPE" => "mobile",	// Тип меню для первого уровня
    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
),
    false
);?>

<br/>

<div class="wrapper clearfix">
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
        "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
        "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
        "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
    ),
        false
    );?>
</div>

<!-- CONTACTS -->
<div class="contacts" id="contacts">

    <div class="wrapper clearfix">
        <div class="heading">Как нас найти</div>

        <div class="contacts-list">

            <!-- CONTACT BLOCK -->
            <div class="contacts-item">
                <p>Автосервис «Мотор Ленд»</p>
                <p>Адрес: Воронеж, ул. Шишкова, 75Б</p>
                <p>Телефон:&nbsp;<a href="tel:74732324262">+7(473)232-42-62</a></p>
                <p>Дни и часы работы:</p>
                <p>Пн-Сб с 8:00 до 20:00</p>
                <p>Вс с 9:00 до 18:00</p>
            </div>

            <!-- CONTACT BLOCK -->
            <div class="contacts-item">
                <p>Автосервис «Мотор Ленд»</p>
                <p>Адрес: Воронеж, ул. Шишкова, 75Б</p>
                <p>Телефон:&nbsp;<a href="tel:74732324262">+7(473)232-42-62</a></p>
                <p>Дни и часы работы:</p>
                <p>Пн-Сб с 8:00 до 20:00</p>
                <p>Вс с 9:00 до 18:00</p>
            </div>

            <!-- CONTACT BLOCK -->
            <div class="contacts-item">
                <p>Автосервис «Мотор Ленд»</p>
                <p>Адрес: Воронеж, ул. Шишкова, 75Б</p>
                <p>Телефон:&nbsp;<a href="tel:74732324262">+7(473)232-42-62</a></p>
                <p>Дни и часы работы:</p>
                <p>Пн-Сб с 8:00 до 20:00</p>
                <p>Вс с 9:00 до 18:00</p>
            </div>

            <!-- CONTACT BLOCK -->
            <div class="contacts-item">
                <p>Автосервис «Мотор Ленд»</p>
                <p>Адрес: Воронеж, ул. Шишкова, 75Б</p>
                <p>Телефон:&nbsp;<a href="tel:74732324262">+7(473)232-42-62</a></p>
                <p>Дни и часы работы:</p>
                <p>Пн-Сб с 8:00 до 20:00</p>
                <p>Вс с 9:00 до 18:00</p>
            </div>

            <!-- CONTACT BLOCK -->
            <div class="contacts-item">
                <p>Автосервис «Мотор Ленд»</p>
                <p>Адрес: Воронеж, ул. Шишкова, 75Б</p>
                <p>Телефон:&nbsp;<a href="tel:74732324262">+7(473)232-42-62</a></p>
                <p>Дни и часы работы:</p>
                <p>Пн-Сб с 8:00 до 20:00</p>
                <p>Вс с 9:00 до 18:00</p>
            </div>

            <!-- CONTACT BLOCK -->
            <div class="contacts-item">
                <p>Автосервис «Мотор Ленд»</p>
                <p>Адрес: Воронеж, ул. Шишкова, 75Б</p>
                <p>Телефон:&nbsp;<a href="tel:74732324262">+7(473)232-42-62</a></p>
                <p>Дни и часы работы:</p>
                <p>Пн-Сб с 8:00 до 20:00</p>
                <p>Вс с 9:00 до 18:00</p>
            </div>

        </div>
    </div>
</div>

<div style="width: 100%; height: 400px; margin-top: 40px;" class="clearfix" id="yamap"></div>
<br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
