<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc,
	Bitrix\Main\Application;

$docRoot = Application::getDocumentRoot();

Loc::loadMessages($docRoot.SITE_TEMPLATE_PATH.'/header.php');
// ---------------------------------------------------------------------------------------------------- iLaB
if($arResult):?>
    <ul class="i_menu_div_block">
        <? foreach($arResult as $key=>$arItem): ?>
            <li class="menudiv<?if($arItem['SELECTED']) echo ' selected';?>"><a class="menulink j_menulink <?if($arItem['ITEMS']) echo "i_link_arrow"?>" href="<?=$arItem['LINK']?>"><?= $arItem['TEXT']?></a>
            <? if($arItem['ITEMS']): ?>
                <div class="menusub j_menusub">
                    <? foreach($arItem['ITEMS'] as $arSub): ?>
                        <a class="menusublink<?if($arSub['SELECTED']) echo ' select';?>" href="<?=$arSub['LINK']?>"><?=$arSub['TEXT']?></a>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
            </li>
        <? endforeach ?>
    </ul>
<?endif

// ---------------------------------------------------------------------------------------------------- iLaB?>


<?/*if($USER->isAdmin()):?>
	<pre class="ipre"><?print_r($arResult)?></pre>
<?endif*/?>