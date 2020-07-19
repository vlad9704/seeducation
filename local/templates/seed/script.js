// ---------------------------------------------------------------------------------------------------- [menu_top]
$(document).ready(function(){
	//--------------------------------------------------------------------------------------slider on main page
	$('.slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll:1,
		autoplay:true,
		arrows:false,
		responsive: [
			{
				breakpoint: 1600,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 1400,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 1000,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 800,
				settings: {
					slidesToShow: 2,
				}
			},
		]
	});

	$('.toggle').click(function(e) {
		e.preventDefault();

		var $this = $(this);

		if ($this.next().hasClass('show')) {
			$this.next().removeClass('show');
			$this.next().slideUp(350);
		} else {
			$this.parent().parent().find('li .inner').removeClass('show');
			$this.parent().parent().find('li .inner').slideUp(350);
			$this.next().toggleClass('show');
			$this.next().slideToggle(350);
		}
	});

});