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
 	var error_notification_message = $('.error__notification');
 	var error_notification_message_close = $('.error__notification-close');

 	input_error.click(function() {
 		$(this).removeClass('form__textarea--error');
 		$(this).next().hide();
 		error_notification_message.hide();
 	});

 	error_notification_message_close.click(function() {
 		error_notification_message.hide();
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
  var header_mob = $('.header-mob__btn');
  header_mob.click(function() {
  	$(this).closest('.header-mob').toggleClass('open');
  });

  /*
  *
  */
  var login_seed = $('#login-your-seed');
  var login_private_key = $('#login-private-key');
  var option_private_key = $('#login-option-private-key');
  var password_private_key = $('#password-private-key');

  login_seed.focus(function() {
  	login_private_key.closest('.form__label').addClass('hide');
  });

  login_seed.focusout(function() {
  	if($(this).val() == '') {
  		login_private_key.closest('.form__label').removeClass('hide');
  	}
  });

  login_private_key.focus(function() {
  	login_seed.closest('.form__label').addClass('hide');
  });

  login_private_key.focusout(function() {
  	if($(this).val() == '') {
  		login_seed.closest('.form__label').removeClass('hide');
  	}
  });

  option_private_key.change(function() {
    if (option_private_key.prop("checked")) {
      password_private_key.closest('.form__label').removeClass('hide');
    } else {
      password_private_key.closest('.form__label').addClass('hide');
    }
	});

  $('.form__btn-reset').click(function() {
    $('.form__label--your-seed').removeClass('hide');
    $('.form__label--private-key').removeClass('hide');
    $('.form__label--private-key-password').addClass('hide');
  });

	/*
  *
  */
  if($('.account').length) {
    var account_nav = document.querySelector(".account-header__nav");
    var position_active = $(account_nav).find('.active').parent();
    account_nav.scrollLeft = position_active[0].offsetLeft - 2;

    $('.account-header__btn-arrow').click(function() {
      console.log(account_nav.scrollLeft);
      account_nav.scrollLeft = account_nav.scrollLeft + 40;
    });
  }

  /*
  *	Charts
  */
  if($('.account').length) {
    var ctx = document.getElementById('price-сhart').getContext('2d');

    Chart.defaults.global.defaultFontFamily = "Roboto";
    Chart.defaults.global.defaultFontSize = 10;
    Chart.defaults.global.defaultFontColor = 'rgba(0,0,0,0.3)';

    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan 20', 'Feb 20', 'Mar 20', 'Apr 20', 'May 20'],
        datasets: [{
          label: '$',
          backgroundColor: 'rgba(34, 95, 207, 0.15)',
          borderColor: 'rgb(34, 95, 207)',
          borderWidth: 3,
          pointBorderWidth: 8, 
          pointBorderColor: 'rgba(252,163,29,0.2)',
          pointBackgroundColor: '#FFA61A',
          hoverBorderWidth: 12,
          data: [5000, 7344, 7000, 10000, 8000]
        }]
      },
      options: {
        legend: {
          display: false
        },
        tooltips: {
          custom: function(tooltip) {
            if (!tooltip) return;
            tooltip.displayColors = false;
          },
          callbacks: {
            label: function(tooltipItem, data) {
              var label = data.datasets[tooltipItem.datasetIndex].label || '';

              if (label) {
                label += '';
              }
              label += tooltipItem.yLabel;
              return label;
            }
          },
          xPadding: 10,
          yPadding: 10,
          cornerRadius: 6,
          backgroundColor: 'rgba(255,255,255,0.8)',
          titleMarginBottom: 7,
          titleAlign: 'center',
          titleFontSize: 12,
          titleFontStyle: 'normal',
          titleFontColor: '#225fcf',
          bodySpacing: 0,
          bodyAlign: 'center',
          bodyFontSize: 12,
          bodyFontColor: '#000000',
        }
      }
    });

    var ctx = document.getElementById('balance-сhart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan 20', 'Feb 20', 'Mar 20', 'Apr 20', 'May 20'],
        datasets: [{
          label: '$',
          backgroundColor: 'rgba(34, 95, 207, 0.15)',
          borderColor: 'rgb(34, 95, 207)',
          borderWidth: 3,
          pointBorderWidth: 8, 
          pointBorderColor: 'rgba(252,163,29,0.2)',
          pointBackgroundColor: '#FFA61A',
          hoverBorderWidth: 12,
          data: [ 5000, 7344, 7000, 8000, 10000]
        }]
      },
      options: {
        legend: {
          display: false
        },
        tooltips: {
          custom: function(tooltip) {
            if (!tooltip) return;
            tooltip.displayColors = false;
          },
          callbacks: {
            label: function(tooltipItem, data) {
              var label = data.datasets[tooltipItem.datasetIndex].label || '';

              if (label) {
                label += '';
              }
              label += tooltipItem.yLabel;
              return label;
            }
          },
          xPadding: 10,
          yPadding: 10,
          cornerRadius: 6,
          backgroundColor: 'rgba(255,255,255,0.8)',
          titleMarginBottom: 7,
          titleAlign: 'center',
          titleFontSize: 12,
          titleFontStyle: 'normal',
          titleFontColor: '#225fcf',
          bodySpacing: 0,
          bodyAlign: 'center',
          bodyFontSize: 12,
          bodyFontColor: '#000000',
        }
      }
    });
  }
});