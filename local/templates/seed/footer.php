</div>

			<footer>
				<div class="footer_img"><img src="/images/footer_bg.png" alt=""></div>
				<div class="footer_gradient">
					<div class="container">
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
								<div class="title">Карта сайта</div>
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
							<div class="contants_cont">
								<div class="first_block">
									<div class="title">Приемные дни</div>
									<div class="detail_info">
										<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/inc/footer_info1.php', Array(), Array('MODE' => 'html', 'NAME' => 'Информация в футоре', 'SHOW_BORDER' => true));?>
									</div>
								</div>
								<div class="second_block">
									<div class="title">Контакты</div>
									<div class="detail_info">
										<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/inc/footer_info2.php', Array(), Array('MODE' => 'html', 'NAME' => 'Информация в футоре', 'SHOW_BORDER' => true));?>
									</div>
									<div class="footer_social_cont">
										<div class="footer_map"><a href="/kontakty/">Смотреть на карте</a></div>
										<div class="sociaWrapper">
											<a href="https://www.facebook.com/%D0%A7%D0%B0%D1%81%D1%82%D0%BD%D0%B0%D1%8F-%D1%88%D0%BA%D0%BE%D0%BB%D0%B0-%D0%90%D1%81%D1%82%D0%B0%D0%BD%D0%B0-366031360685465/" target="_blank"><i class="fab fa-facebook-square"></i></a> <a href="https://www.youtube.com/channel/UCNQZN9oeFR1QzQEUI8G717w?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a> <a href="https://instagram.com/seedschool_kz?igshid=1tke5a8apbijq" target="_blank"><i class="fab fa-instagram-square"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="copyright_block">
							<div class="copyright"><?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/inc/copyright.php', Array(), Array('MODE' => 'html', 'NAME' => 'Копирайт', 'SHOW_BORDER' => true));?></div>
							<div class="footer_logo"><a href="http://seededucation.kz/"><img src="/images/logo.png" class="headerLogo"></a></div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>