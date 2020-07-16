$(document).ready(function(){
	$('body').on('click', '.j_v_other_menu_show', function() {
		$('.i_v_menu_other').show();
	});
	$('body').on('click', '.j_v_other_menu_hide', function() {
		$('.i_v_menu_other').hide();
	});
	$('body').on('click', '.jq_v_submenu', function() {
		$('.i_v_menu_sub_wrap').not($(this).siblings('.i_v_menu_sub_wrap')).hide();
		$(this).siblings('.i_v_menu_sub_wrap').fadeToggle();
		$('.jq_v_submenu').removeClass('select');
		$(this).toggleClass('select');
		return false;
	});
	$('body').on('click', '.j_v_menu_mobile_title', function() {
		$(this).siblings('.i_v_menu_mobile_content').slideToggle();
		return false;
	});
	$('body').on('click', '.j_v_menu_mobile_link', function() {
		$(this).toggleClass('checked');
		var submenu = $('.i_v_menu_mobile_sub[data-id='+$(this).data('id')+']');
		submenu.slideToggle();
		return false;
	});

	if($('.i_typical').length || $('.i_cat_work').length)
	{
		$('body').on('click','.j_v_menu_title',function() {
			$(this).siblings('.i_v_menu_content').slideToggle(150);
		});
	}
});
