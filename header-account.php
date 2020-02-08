<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts.css">
	<title>Bitamp.com</title>
</head>
<body>
	<div class="wrapper">
		<div class="header-mob">
			<div class="container">
				<div class="header-mob__content row">
					<div class="header__logo">
						<a class="logo" href="#">
							<img src="img/logo.svg" alt="Bitamp" width="130" height="29">
						</a>
					</div>
					<button class="header-mob__btn active"><span></span></button>
				</div>
			</div>
		</div>
		<header class="header">
			<div class="container">
				<div class="header__content row">
					<div class="header__logo">
						<a class="logo" href="#">
							<img src="img/logo.svg" alt="Bitamp" width="130" height="29">
						</a>
					</div>
					<div class="header__info">
						<div class="header-mob__lang">
							<div class="header__lang-switch switch">
								<span class="current-lang current-switch">English</span>
								<ul class="lang__list switch__list" style="overflow: hidden;">
									<li class="lang__item switch__item">
										<a class="lang__option switch__option active" href="#">English</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Portugues</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Francias</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">漢語</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Deutch</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">日本語</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Русский</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Korean</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Espanol</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Arabic</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Italiano</a>
									</li>
									<li class="lang__item switch__item">
										<a class="lang__option switch__option" href="#">Hindi</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="header__rate">1 BTC = <span class="current-rate">$7,618</span></div>
						<div class="header__currency-switch switch">
							<span class="current-currency current-switch">USD</span>
							<ul class="currency__list switch__list" style="overflow: hidden;">
								<li class="currency__item switch__item">
									<a class="currency__option switch__option active" href="#">USD</a>
								</li>
								<li class="currency__item switch__item">
									<a class="currency__option switch__option" href="#">EUR</a>
								</li>
								<li class="currency__item switch__item">
									<a class="currency__option switch__option" href="#">RUB</a>
								</li>
								<li class="currency__item switch__item">
									<a class="currency__option switch__option" href="#">BTC</a>
								</li>
							</ul>
						</div>
						<div class="header__rise-and-fall">+6.12%</div>
					</div>
					<div class="header__btns">
						<a class="header__btn header__btn--logout" href="#"><span>Logout</span></a>
					</div>
				</div>
			</div>
		</header>
		<div class="header-mob__overlay"></div>
		<div class="account-header">
			<div class="container">
				<div class="account-header__info row">
					<div class="account-header__col account-header__mob-col">
						<h1 class="account-header__position">Account overview</h1>
						<p class="account-header__description">Your account overview and recent transactions.</p>
					</div>
					<div class="account-header__col">
						<div class="account-header__wallet account-header__wallet--btc">
							<ul class="account-header__wallet-list def-list-zero">
								<li class="account-header__wallet-item">
									<div class="account-header__balance">9.387126745</div>
									<div class="account-header__currency">BTC Balance</div>
								</li>
								<li class="account-header__wallet-item">
									<div class="account-header__balance">9000</div>
									<div class="account-header__currency">USD Balance</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="account-mob-header__wrap-nav row">
					<div class="account-header__nav account-mob-header__nav">
						<div class="account-header__col">
							<ul class="account-header__nav-list def-list-zero">
								<li class="account-header__nav-item">
									<a class="account-header__nav-link" href="#">Overview</a>
								</li>
								<li class="account-header__nav-item">
									<a class="account-header__nav-link" href="#">Send</a>
								</li>
								<li class="account-header__nav-item">
									<a class="account-header__nav-link" href="#">Receive</a>
								</li>
								<li class="account-header__nav-item">
									<a class="account-header__nav-link active" href="#">Transactions</a>
								</li>
								<li class="account-header__nav-item">
									<a class="account-header__nav-link" href="#">Adresses</a>
								</li>
								<li class="account-header__nav-item in-development">
									<a class="account-header__nav-link" href="#">Lightning</a>
								</li>
							</ul>
						</div>
						<div class="account-header__col">
							<ul class="account-header__nav-list def-list-zero">
								<li class="account-header__nav-item">
									<a class="account-header__nav-link" href="#">Account</a>
								</li>
								<li class="account-header__nav-item">
									<a class="account-header__nav-link" href="#">Support</a>
								</li>
							</ul>
						</div>
					</div>
					<button class="account-header__btn-arrow"></button>
				</div>
			</div>
		</div>