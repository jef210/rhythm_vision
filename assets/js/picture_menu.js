jQuery.noConflict();
jQuery(document).ready(function($){
	$(".page_nav").hover(
		function () {
		 $(this).find('div').show();
		},
		function () {
			$(this).find('div').hide();
		}
	);
});