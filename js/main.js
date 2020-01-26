$(document).ready(function() {
	/*
	 * To switch languages and currencies
	 */
	var header_switches = $('.header .switch');
	var currency_option = $('.switch__option');

	header_switches.mouseenter(function() {
		$(this).addClass('open');
	});

	header_switches.mouseleave(function() {
		header_switches.removeClass('open');
	});

	currency_option.click(function(event) {
		event.preventDefault();
		var parent = $(this).closest('.switch');
		var current_switch = parent.find('.current-switch');
		var options = parent.find('.switch__option');
		options.removeClass('active');
		$(this).addClass('active');
		current_switch.text($(this).text());
		header_switches.removeClass('open');
	});


	/*
	 * To open and close the accordion
	 */
	var accordion_item = $('.accordion__item');

	accordion_item.click(function() {
		if(!$(this).hasClass('open')) {
			accordion_item.removeClass('open');
			$(this).addClass('open');
		} else {
			$(this).removeClass('open');
		}
	});


	/*
	 * To open and close the options in form
	 */
	 var option_switch = $('.form__option--switch');

	 option_switch.click(function() {
	 	var radio_wrap = $(this).parent().next();
	 	radio_wrap.toggleClass('open');
	 	if(radio_wrap.hasClass('open')) {
	 		$(this).text('Hide Options');
	 	} else {
	 		$(this).text('Show Options');
	 	}
	 });


	/*
	 * To open modal Welcome
	 */
	//$('.home__modal-welcome').arcticmodal();

	/*
	 * To swith tabs on home page
	 */
	var nav_tab_btn = $('.home__nav-btn');

 	nav_tab_btn.click(function(event) {
 		event.preventDefault();
 		var home = $('.home');
 		var list = $(this).closest('.home__nav-tabs');
 		var parent = $(this).parent();
 		var elements_list = list.find('.home__nav-item');
 		var position = elements_list.index(parent);

 		if(position == 0) {
 			home.removeClass('active-tab-create-wallet');
 			home.addClass('active-tab-login');
 		} else {
			home.removeClass('active-tab-login');
 			home.addClass('active-tab-create-wallet');
 		}
 	});

 	/*
	 * Hidden error for input
	 */
 	var input_error = $('.form__textarea--error');
 	input_error.click(function() {
 		$(this).removeClass('form__textarea--error');
 		$(this).next().hide();
 	});

 	/*
	 * Change currency for wallet in account
	 */
 	var account_currency = $('.account-header__wallet');
 	account_currency.click(function() {
 		if($(this).hasClass('account-header__wallet--btc')) {
 			$(this).removeClass('account-header__wallet--btc');
 			$(this).addClass('account-header__wallet--usd');
 		} else {
			$(this).removeClass('account-header__wallet--usd');
 			$(this).addClass('account-header__wallet--btc');
 		}
 	});

 	/*
  * Message "Copied!"
  */
  var btn_copy = $('.btn-copy');
  var timer_btn_copy;

  btn_copy.click(function() {
  	var current = this;
  	$(current).addClass('view');
  	clearTimeout(timer_btn_copy);
  	timer_btn_copy = setTimeout(function() {
  		$(current).removeClass('view');
  	}, 2000);
  });

	/*
  * Add field
  */
  var add_field = $('#account-option-support-bitamp');
  add_field.click(function() {
  	$(this).parent().addClass('hide');
  });

  /*
  * Open mobile menu
  */
  var header_mob = $('.header-mob');
  header_mob.click(function() {
  	$(this).toggleClass('open');
  });
});