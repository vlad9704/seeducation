<?
$APPLICATION->SetTitle("");?><!--Left menu banner-->
<section class="container">
	<div class="menuLeftBanner">
		<?$APPLICATION->IncludeComponent(
			"seed:b_menu",
			"leftmenu",
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"COMPONENT_TEMPLATE" => "menu_more",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DELAY" => "N",
				"MAX_LEVEL" => "2",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "top",
				"USE_EXT" => "N"
			),
			false
		);?>
		<iframe width="930" height="679" src="https://www.youtube.com/embed/7NQ7LM1Wo8g?autoplay=0&enablejsapi=1" frameborder="0" allow="autoplay" id="video"></iframe>
	</div>
</section>
<section class="container">
	<div class="info_items">
		<div class="info_item">
			Поступление
		</div>
		<div class="info_item">
			Подписание <br>
			договора
		</div>
		<div class="info_item">
			Заказать форму <br>
			и учебные <br>
			материалы
		</div>
		<div class="info_item">
			Внести оплату
		</div>
		<div class="info_item">
			Календарь <br>
			мероприятий
		</div>
	</div>
	<div class="calendarSlider">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"seed_news",
			array(
				"ACTIVE_DATE_FORMAT" => "d.M.Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DETAIL_URL" => "#SITE_DIR#news.php?ID=#ELEMENT_ID#",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "DATE_CELEBRATION",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "seed_news"
	),
	false
);?>
		<div class="sliderWrap">
			<div class="sliderWrapper">
				<div class="slider_title">
					<h3>Объявлен набор учащихся в 1 - 8 классы!</h3>
					<p>
						Самые талантливые ребята желающие развиваться в направлениях математика, языки, <br> IT технологии и бизнеса могут присоединиться! <span>Набор до 01 августа 2020 года</span>
					</p>
				</div>
				<div class="slider">
					<div class="sl__slide">
						<img src="/images/slide2.jpg">
					</div>
					<div class="sl__slide">
						<img src="/images/slide5.jpg">
					</div>
					<div class="sl__slide">
						<img src="/images/slide1.jpg">
					</div>
					<div class="sl__slide">
						<img src="/images/slide6.jpg">
					</div>
					<div class="sl__slide">
						<img src="/images/slide3.jpg">
					</div>
					<div class="sl__slide">
						<img src="/images/slide4.jpg">
					</div>
					<div class="sl__slide">
						<img src="/images/slide8.jpg">
					</div>
					<div class="sl__slide">
						<img src="/images/slide7.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section> <section class="container">
	<div class="infoMainWrap">
		<div class="infoBlock">
			<img src="/images/infoBlock1.jpg">
			<div class="infoBlockTitle">
				КАРАНТИН <br>
				ПРОДЛЕВАЕТСЯ
			</div>
			<div class="infoBlockText">
				В связи с пандемией карантин продлен, учащиеся обучаются удаленно
			</div>
		</div>
		<div class="infoBlock">
			<img src="/images/infoBlock2.jpg">
			<div class="infoBlockTitle">
				Олег Комаров ВЗЯЛ<br>
				ШАХМАТНУЮ КОРОНУ
			</div>
			<div class="infoBlockText">
				Ученик 6 “В” класса завоевал звание гроссмейстера школы
			</div>
		</div>
		<div class="infoBlock">
			<img src="/images/infoBlock3.jpg">
			<div class="infoBlockTitle">
				ПОСТРОЕНО НОВОЕ<br>
				КРыЛО ШКОЛы
			</div>
			<div class="infoBlockText">
				Открылось северное крыло школы - тут размещен пищевой блок и спортивные секции
			</div>
		</div>
		<div class="infoBlock">
			<img src="/images/infoBlock4.jpg">
			<div class="infoBlockTitle">
				КЛАССНАЯ МЕБЕЛЬ<br>
				ОТ КУТЮР
			</div>
			<div class="infoBlockText">
				С осени 2022 года наши ученики опробуют школьную мебель фабрики Revoult Furniture
			</div>
		</div>
		<div class="infoBlock">
			<img src="/images/infoBlock5.jpg">
			<div class="infoBlockTitle">
				НАГРАЖДЕНИЕ<br>
				ПЕДАГОГОВ
			</div>
			<div class="infoBlockText">
				Ежегодное награждение учителей переносится на 25 апреля
			</div>
		</div>
	</div>
</section>