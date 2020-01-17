$(document).ready(function() {
	var header_switches = $('.header .switch');
	var currency_option = $('.switch__option');
	var timerId; //БАГ! Нужно две переменные для отслеживания всех меню(или сделать массивом)

	header_switches.mouseenter(function() {
		clearTimeout(timerId);
		$(this).addClass('open');
	});

	header_switches.mouseleave(function() {
		timerId = setTimeout(function(){
			header_switches.removeClass('open');
		}, 500);
	});

	currency_option.click(function(event) {
		event.preventDefault();
		var parent = $(this).closest('.switch');
		var current_switch = parent.find('.current-switch');
		var options = parent.find('.switch__option');
		options.removeClass('active');
		$(this).addClass('active');
		current_switch.text($(this).text());
	});
});