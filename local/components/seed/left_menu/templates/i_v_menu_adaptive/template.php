<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
// ---------------------------------------------------------------------------------------------------- iLaB
if($arResult['ITEMS']):
	// Frame
	$frame = $this->createFrame('jq_vmenu', false)->begin();
	CVariablesStorage::set('TypeMenu', 'vertical');
	//	$frame->setAnimation(true);?>
	<div class="i_v_menu">
		<div class="i_v_menu_title j_v_menu_title">Каталог товаров</div>
		<div class="i_v_menu_content">
			<? $k = 0; foreach($arResult['ITEMS'] as $arItem): ?>
				<? if($k == 8): ?>
					<div class="i_v_menu_other idnone">
				<? endif; ?>
				<div class="i_v_menu_div_1<?if($arItem['I_SELECTED'])echo ' i_vm_selected'?>">
					<a class="i_v_menu_link_1<?if($arItem['I_CHILD']) echo ' jq_v_submenu';?>" href="<?=$arItem['SECTION_PAGE_URL'];?>">
						<?=$arItem['NAME']?></a>
					<?if($arItem['I_CHILD']):?>
						<div class="i_v_menu_sub_wrap idnone">
							<div class="i_v_menu_sub_cont<?if($arItem['I_PRODUCT']) echo ' i_product_item'; if($arItem['UF_COLUM_MENU']) echo ' col_'.$arItem['UF_COLUM_MENU'];?>" style="
							    -moz-column-count: <?=$arItem['UF_COLUM_MENU'];?>;
   								-webkit-column-count: <?=$arItem['UF_COLUM_MENU'];?>;
   								column-count: <?=$arItem['UF_COLUM_MENU'];?>;">
								<div class="i_v_menu_sub_links"></div>
								<? foreach($arItem['I_CHILD'] as $arItem2): ?>
									<div class="i_v_menu_div_2<?if($arItem2['I_SELECTED'])echo ' i_vm_selected'?>">
										<a href="<?=$arItem2['SECTION_PAGE_URL']?>" class="i_v_menu_link_2"><?=$arItem2['NAME']?></a>
										<? foreach($arItem2['I_CHILD'] as $arItem3): ?>
											<div class="i_v_menu_div_3<?if($arItem3['I_SELECTED'])echo ' i_vm_selected'?>">
												<a href="<?=$arItem3['SECTION_PAGE_URL']?>" class="i_v_menu_link_3"><?=$arItem3['NAME']?></a>
												<? foreach($arItem3['I_CHILD'] as $arItem4): ?>
													<div class="i_v_menu_div_4<?if($arItem4['I_SELECTED'])echo ' i_vm_selected'?>">
														<a href="<?=$arItem4['SECTION_PAGE_URL']?>" class="i_v_menu_link_4"><?=$arItem4['NAME']?></a>
													</div>
												<? endforeach; ?>
											</div>
										<? endforeach; ?>
									</div>
								<? endforeach; ?>
								<?if($arItem['I_PRODUCT']):?>
									<div class="i_v_menu_sub_item">
										<? i_showItem($APPLICATION, array('FROM'=>'MENU'), $arResult['I_PRODUCT'][$arItem['I_PRODUCT']], $arParams); ?>
									</div>
								<?endif;?>
								<?if($arItem['UF_COLUM_MENU'] >= 4):?>
									<div class="i_v_menu_sub_vert_line"></div>
								<?endif;?>
							</div>
						</div>
					<?endif;?>
				</div>
				<? if($k > 4 && $k == count($arResult['ITEMS'])-1): ?>
					<div class="i_v_menu_other_icon j_v_other_menu_hide"><span></span></div>
					</div>
					<div class="i_v_menu_other_icon j_v_other_menu_show"><span></span></div>
				<?	endif;	?>
				<? $k++; endforeach; ?>
		</div>
	</div>

	<div class="i_v_menu_mobile idnone">
		<div class="i_v_menu_mobile_title i_v_menu_title j_v_menu_mobile_title">Каталог товаров</div>
		<div class="i_v_menu_mobile_content">
			<? $k = 0; foreach($arResult['ITEMS'] as $arItem): ?>
				<div class="i_v_menu_mobile_div_1">
					<a class="i_v_menu_mobile_link_1<?if($arItem['I_CHILD']) echo ' j_v_menu_mobile_link';?><?if($arItem['I_SELECTED'])echo ' i_vm_selected'?>" href="<?=$arItem['SECTION_PAGE_URL']?>" data-id="<?=$arItem['ID']?>">
						<span><?=$arItem['NAME']?></span></a>
					<? if($arItem['I_CHILD']): ?>
						<div class="i_v_menu_mobile_sub" data-id="<?=$arItem['ID']?>">
							<? foreach($arItem['I_CHILD'] as $arItem2): ?>
								<a href="<?=$arItem2['SECTION_PAGE_URL']?>" class="i_v_menu_mobile_link_2<?if($arItem2['I_CHILD']) echo ' j_v_menu_mobile_link';?><?if($arItem2['I_SELECTED'])echo ' i_vm_selected'?>" data-id="<?=$arItem2['ID']?>">
									<span><?=$arItem2['NAME']?></span></a>
								<? if($arItem2['I_CHILD']): ?>
									<div class="i_v_menu_mobile_sub" data-id="<?=$arItem2['ID']?>">
										<? foreach($arItem2['I_CHILD'] as $arItem3): ?>
											<a class="i_v_menu_mobile_link_3<?if($arItem3['I_CHILD']) echo ' j_v_menu_mobile_link';?><?if($arItem3['I_SELECTED'])echo ' i_vm_selected'?>" href="<?=$arItem3['SECTION_PAGE_URL']?>" data-id="<?=$arItem3['ID']?>">
												<span><?=$arItem3['NAME']?></span></a>
											<? if($arItem3['I_CHILD']): ?>
												<div class="i_v_menu_mobile_sub" data-id="<?=$arItem3['ID']?>">
													<? foreach($arItem3['I_CHILD'] as $arItem4): ?>
														<a class="i_v_menu_mobile_link_4<?if($arItem4['I_SELECTED'])echo ' i_vm_selected'?>" href="<?=$arItem4['SECTION_PAGE_URL']?>"><span><?=$arItem4['NAME'];?></span></a>
													<? endforeach; ?>
												</div>
											<? endif; ?>

										<? endforeach; ?>
									</div>
								<? endif; ?>
							<? endforeach; ?>
						</div>
					<? endif; ?>
				</div>
			<? endforeach; ?>
		</div>
	</div>

<?/*$frame->beginStub()?>
	<div class="i_comp_loader"></div>
<?*/$frame->end()?>
<?
endif
// ---------------------------------------------------------------------------------------------------- iLaB?>





<?if($USER->isAdmin()):?>
	<pre class="ipre">
		<?print_r($arResult)?>
	</pre>
<?endif?>