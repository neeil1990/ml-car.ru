<?php
define("RUB", "₽");

function getServiceList($ids = array()){
    if(!$ids)
        return false;

    $arServices = [];
    $obService = CIBlockElement::GetList(Array(), ["IBLOCK_ID" => 2, "ID" => $ids], false, false, ["ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", "PROPERTY_PRICE"]);
    while($arService = $obService->GetNext()){
        $arServices[$arService['ID']] = $arService;
        if($arService['PREVIEW_PICTURE'])
            $arServices[$arService['ID']]['PREVIEW_PICTURE'] = CFile::GetPath($arService['PREVIEW_PICTURE']);
    }

    return $arServices;
}
