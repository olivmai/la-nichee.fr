$(function(){

	//Button
	$('#responsive-button').click(function(){
		$(this).toggleClass('open');
	});

	if ($('nav').hasClass('menu-open')) {
		$(this).toggleClass('close');
	};

	//menu (jpush plugin activation)
	$('.toggle-menu').jPushMenu();

});