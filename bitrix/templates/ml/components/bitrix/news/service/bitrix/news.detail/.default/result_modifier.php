<?php

if($arResult['PROPERTIES']['SERVICE']['VALUE'])
    $arResult['SERVICES'] = getServiceList($arResult['PROPERTIES']['SERVICE']['VALUE']);
