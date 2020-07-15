
	<footer>
		<div class="container">
			<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/inc/footer_info.php', Array(), Array('MODE' => 'html', 'NAME' => 'Информация в футоре', 'SHOW_BORDER' => true));?>
			<div class="footer_cont_menu_logo">
				<?/*<div class="footer_logo">
					<a href="http://seededucation.kz/"><img src="<?=SITE_TEMPLATE_PATH.'/images/logo.png'?>" class="headerLogo" /></a>
					<ul class="leftMenu">
						<li><a href="#">Новости</a></li>
						<li><a href="#">Мероприятия</a></li>
						<li><a href="#">Регистрация</a></li>
						<li><a href="https://podpishi.kz/v.php?pp1=93_0b57988ffe2c8f8aced8ce74a9451b629c4728a8">Заключение договора</a></li>
						<li><a href="#">Заказ питания</a></li>
						<li><a href="#">Заказ транспорта</a></li>
						<li><a href="#">Онлайн магазин</a></li>
						<li><a href="#">Контакты</a></li>
						<li class="last"><a href="#">Книга жалоб и пожеланий</a></li>
					</ul>
				</div>*/?>
				<div class="footer_menu">
					<?$APPLICATION->IncludeComponent(
						"seed:b_menu",
						"menu_footer",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "2",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "menu_footer",
							"I_POINT" => "8",
							"COMPOSITE_FRAME_MODE" => "A",
							"COMPOSITE_FRAME_TYPE" => "AUTO"
						),
						false
					);?>
				</div>
			</div>
			<div class="copyrating"></div>
		</div>
	</footer>
</div>
</body>
</html>