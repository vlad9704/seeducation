<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

if($arResult):

	foreach($arResult['ITEMS'] as $k=>$e) {
		if ($e['PROPERTIES']['DATE_CELEBRATION']['VALUE'])
			$arResult['ITEMS'][$k]['DATE_CELEBRATION'] = $e['PROPERTIES']['DATE_CELEBRATION']['VALUE'];
	}

endif?>