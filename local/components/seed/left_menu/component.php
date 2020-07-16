<?
use Bitrix\Main\Loader;
use Bitrix\Currency\CurrencyTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
// Не волнуйтесь, если что-то не работает. Если бы всё работало, Вас бы уволили.
// ---------------------------------------------------------------------------------------------------- iLaB
$dir = $arParams['I_DIR'];//array_values( array_filter( explode( '/', $arParams['I_DIR'] ) ) );// В каком разделе находимся
$arResult['dir'] = $dir;
$l = strtoupper(LANGUAGE_ID);

if( !CModule::IncludeModule('iblock') || !CModule::IncludeModule('catalog') || !CModule::IncludeModule('sale') )
	return;

$arOrder	= Array('SORT'=>'ASC', 'NAME'=>'ASC');
$arSelect	= Array('UF_IMG', 'UF_PRODUCT', 'UF_COLUM_MENU', 'UF_NAME', 'UF_IMG', 'UF_IMG_2', 'UF_IMG_WHITE', 'UF_I_NAME_'.$l, 'UF_VISIBLE_SECTION', 'UF_SUBTITLE_'.$l);
$arFilter	= Array('IBLOCK_ID'=>19, 'ACTIVE'=>'Y', 'GLOBAL_ACTIVE'=>'Y', 'CNT_ACTIVE'=>'Y');

/*if( $arParams['I_SHOW_SECT_MENU'] )
	$arFilter['!ID'] = $arParams['I_SHOW_SECT_MENU'];*/
$res = CIBlockSection::GetList($arOrder, $arFilter, true, $arSelect);
while($ob = $res->GetNextElement())
{
	$obj = $ob->GetFields();

	$obj['~PICTURE'] = CFile::GetPath($obj['PICTURE']);

	if( $obj['~UF_NAME'] )
		$obj['NAME'] = $obj['~UF_NAME'];

	if( $obj['UF_I_NAME_'.$l] )
		$obj['NAME'] = $obj['UF_I_NAME_'.$l];

	if( $obj['UF_IMG'] )
		$obj['I_WHITE'] = CFile::GetPath($obj['UF_IMG']);

	if( $obj['UF_IMG_2'] )
		$obj['I_IMG'] = CFile::GetPath($obj['UF_IMG_2']);

	if( $obj['UF_SUBTITLE_'.$l] )
		$obj['UF_SUBTITLE'] = $obj['UF_SUBTITLE_'.$l];
	else $obj['UF_SUBTITLE'] = $obj['NAME'];

	if( $obj['UF_LINK'] )
		$obj['SECTION_PAGE_URL'] = $obj['UF_LINK'];

}

// ---------------------------------------------------------------------------------------------------- iLaB?>