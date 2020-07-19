<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?php
use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html lang="ru">
<head>
	<!--Scripts-->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://kit.fontawesome.com/31f8b741c5.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<?php $APPLICATION->ShowHead()?><?php
	$index = CSite::InDir(SITE_DIR.'index.php');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/main.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/style.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/pre.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');
	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />');
	?>
</head>
<body>
	<div id="panel">
		 <?php $APPLICATION->ShowPanel()?>
	</div>
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="headerWrapper">
					<div class="headerLogoWrapper">
						<a href="http://seededucation.kz/"><img src="/images/logo.png" class="headerLogo"></a>
					</div>
					<div class="sloganMenuWrapper">
						<div class="headerSlogan">
							 «SEED Educational Complex»<br>
							 Лицензия Министерства образования и науки Республики Казахстан
						</div>
					</div>
					<div class="sociaWrapper">
						<a href="https://www.facebook.com/%D0%A7%D0%B0%D1%81%D1%82%D0%BD%D0%B0%D1%8F-%D1%88%D0%BA%D0%BE%D0%BB%D0%B0-%D0%90%D1%81%D1%82%D0%B0%D0%BD%D0%B0-366031360685465/" target="_blank"><i class="fab fa-facebook-square"></i></a> <a href="https://www.youtube.com/channel/UCNQZN9oeFR1QzQEUI8G717w?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a> <a href="https://instagram.com/seedschool_kz?igshid=1tke5a8apbijq" target="_blank"><i class="fab fa-instagram-square"></i></a>
					</div>
				</div>
				<div class="main_top_menu">
					<?$APPLICATION->IncludeComponent(
						"seed:b_menu",
						"menu_more",
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
					<div class="i_cabinet">
						<?/*<a href="javascript:void(0)" class="burger_cont"><div class="s_burger"></div></a>*/?>
						<a class="cabinet_link" href="/lichnyi-kabinet-go-crm/">Личный кабинет Go-CRM</a>
					</div>
				</div>
			</div>
		</header>

		<?if($index):?>
			<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/index.php',Array(),Array('MODE'=>'html', 'NAME'=>'Главная страница', 'SHOW_BORDER'=>false));?>
			<?else:?>
				<div class="container">
		<?endif?>
