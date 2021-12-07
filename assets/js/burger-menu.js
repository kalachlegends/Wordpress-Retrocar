$(document).ready(function() {
	$('.header__burger').click(function(event) {
		$('.header__burger,.header__menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});
$(document).ready(function() {
	$('.header__burger320').click(function(event) {
		$('.header__burger320,.header__menu320').toggleClass('active');
		$('body').toggleClass('lock');
	});
});
$(document).ready(function() {
	$('.header__burger320-main').click(function(event) {
		$('.header__burger320-main,.header__menu320-main').toggleClass('active');
		$('body').toggleClass('lock');
	});
});