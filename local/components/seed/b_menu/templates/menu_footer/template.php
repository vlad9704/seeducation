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
    <nav class="i_menu_overflow">
        <div class="i_mo_ad j_mo_ad">
            <span class="i_mo_x j_mo_x"><div class="i_mo_icon j_mo_icon"></div></span>
            <span class="i_mo_ad_but">Меню<?//=Loc::getMessage('MENU')?></span>
        </div>
        <ul class="i_mo j_mo">
			<?foreach($arResult as $k=>$e):?>
                <li class="i_mo_links <?if($e['ITEMS'])echo 'i_mo_sub j_mo_sub'?>">
                    <a href="<?=$e['LINK']?>"<?if($e['SELECTED'])echo ' class="i_mo_selected"'?>><?=$e['TEXT']?></a>

					<?if($e['ITEMS']):?>
                        <ul class="i_mo_inside">
							<?foreach($e['ITEMS'] as $ik=>$ie):?>
                                <li>
                                    <a href="<?=$ie['LINK']?>"<?if($ie['SELECTED'])echo ' class="i_mo_selected"'?>><?=$ie['TEXT']?></a>
                                </li>
							<?endforeach?>
                        </ul>
					<?endif?>

                </li>
			<?endforeach?>
            <li class="i_mo_more j_mo_more">
                <span><?=Loc::getMessage('MORE')?></span>
                <ul class="i_mo_inside j_mo_inside"></ul>
            </li>
        </ul>
    </nav>
<?endif
// ---------------------------------------------------------------------------------------------------- iLaB?>





<?/*if($USER->isAdmin()):?>
	<pre class="ipre"><?print_r($arResult)?></pre>
<?endif*/?>