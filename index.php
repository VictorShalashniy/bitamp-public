<?php
	require_once 'header.php';
?>
		<main class="main def-page home bg-cube active-tab-login">
			<div class="container">
				<div class="row">
					<div class="home__first col-lg-8 offset-lg-2">
						<div class="def-page__title-wrap">
							<ul class="home__title-tabs def-list-zero">
								<li class="home__title-tab">
									<h1 class="home__title def-page__title">Secure Bitcoin Wallet</h1>
									<h2 class="home__subtitle">Send and receive Bitcoin from anywhere, on any device, securely using the most advanced blockchain web wallet.</h2>
								</li>
								<li class="home__title-tab">
									<h1 class="def-page__title"><span class="def-page__title--first-line">That was simple.</span> Your Account is ready!</h1>
								</li>
							</ul>
						</div>
						<div class="home__forms">
							<ul class="home__nav-tabs def-list-zero">
								<li class="home__nav-item">
									<button class="home__nav-btn">
										<span class="home__nav-btn--login">Login</span>
									</button>
								</li>
								<li class="home__nav-item">
									<button class="home__nav-btn">
										<span class="home__nav-btn--new-wallet">New Wallet</span>
									</button>
								</li>
							</ul>
							<ul class="home__form-tabs def-list-zero">
								<li class="home__form-tab">
									<form class="home__form" action="/" method="POST">
										<div class="form__label">
											<div class="form__nav-options-wrap form__nav-options-wrap--checkbox">
												<label class="form__label-text" for="login-your-seed">Your Seed:</label>
												<div class="form__nav-options">
													<span class="form__option form__option--switch">Show Options</span>
												</div>
												<div class="home__checkbox-wrap form__checkbox-wrap">
													<label class="form__checkbox">
														<input class="form__checkbox-input" type="checkbox" name="login-option-extended-seed" value="Extended Seed">
														<span class="form__checkbox-box"></span>
														<span class="form__checkbox-label">Extended Seed</span>
													</label>
													<label class="form__checkbox">
														<input class="form__checkbox-input" type="checkbox" name="login-option-bip39-seed" value="BIP39 Seed">
														<span class="form__checkbox-box"></span>
														<span class="form__checkbox-label">BIP39 Seed</span>
													</label>
												</div>
											</div>
											<textarea class="form__textarea" id="login-your-seed" name="login-your-seed" placeholder="Enter your Seed here"></textarea>
										</div>
										<div class="form__label">
											<div class="form__nav-options-wrap form__nav-options-wrap--checkbox">
												<label class="form__label-text" for="login-private-key">Your Private Key:</label>
												<div class="form__nav-options">
													<span class="form__option form__option--switch">Show Options</span>
												</div>
												<div class="home__checkbox-wrap form__checkbox-wrap">
													<label class="form__checkbox">
														<input class="form__checkbox-input" type="checkbox" name="login-option-private-key" value="BIP38 Encrypted">
														<span class="form__checkbox-box"></span>
														<span class="form__checkbox-label">BIP38 Encrypted</span>
													</label>
												</div>
											</div>
											<span class="form__label-text"></span>
											<input class="form__text-input" id="login-private-key" type="text" name="login-private-key" placeholder="Enter your Private Key here">
										</div>
										<div class="form__wrap-btns">
											<input class="form__btn-reset btn-reset" type="reset" value="CLEAR">
											<button class="btn-active">Login with your seed</button>
										</div>
									</form>
								</li>
								<li class="home__form-tab">
									<form class="home__form" action="/" method="POST">
										<label class="form__label">
											<span class="form__label-text">Language:</span>
											<select class="form__select" name="create-wallet-lang">
												<option value="English">English</option>
												<option value="Francias">Francias</option>
												<option value="Deutch">Deutch</option>
												<option value="Русский">Русский</option>
												<option value="Espanol">Espanol</option>
												<option value="Italiano">Italiano</option>
												<option value="Portugues">Portugues</option>
												<option value="漢語">漢語</option>
												<option value="日本語">日本語</option>
												<option value="Korean">Korean</option>
												<option value="Arabic">Arabic</option>
												<option value="Hindi">Hindi</option>
											</select>
										</label>
										<div class="form__label wrap-for-copy-print form__label--mob-for-generate">
											<div class="form__nav-options-wrap">
												<label class="form__label-text" for="create-wallet-your-seed">Your Seed:</label>
												<div class="form__nav-options">
													<span class="form__option form__option--generate">Generate New Seed</span>
													<span class="form__option form__option--switch">Show Options</span>
												</div>
												<div class="home__radio-wrap form__radio-wrap">
													<label class="form__radio">
														<input class="form__radio-input" type="radio" name="create-wallet-seed-options" value="Legacy (ex: 19NX5Yi..)">
														<span class="form__radio-box"></span>
														<span class="form__radio-label">Legacy (ex: 19NX5Yi..)</span>
													</label>
													<label class="form__radio">
														<input class="form__radio-input" type="radio" name="create-wallet-seed-options" value="P2sh (ex: 37pXn2j..)" checked>
														<span class="form__radio-box"></span>
														<span class="form__radio-label">P2sh (ex: 37pXn2j..)</span>
													</label>
													<label class="form__radio">
														<input class="form__radio-input" type="radio" name="create-wallet-seed-options" value="Bech32 (ex: bc1qm5u..)">
														<span class="form__radio-box"></span>
														<span class="form__radio-label">Bech32 (ex: bc1qm5u..)</span>
													</label>
												</div>
											</div>
											
											<textarea class="form__textarea" id="create-wallet-your-seed" name="create-wallet-your-seed" disabled>tidy mugged unafraid cube cycling ahead keyboard cajun peeled orange ingested jeans </textarea>
											<span class="btn-copy"></span>
											<span class="btn-print"></span>
										</div>
										<label class="form__label">
											<span class="form__label-text">Your Seed:</span>
											<textarea class="form__textarea form__textarea--error" name="create-wallet-confirm-your-seed" placeholder="Type your Seed here to confirm it"></textarea>
											<span class="error__message">Incorrect seed confirmation. Please, write down the seed exactly as shown.</span>
										</label>
										<button class="home__form-btn btn-active">I’ve written down my seed, log me in</button>
										<div class="error__notification">
											<span class="error__notification-message">Incorrect seed confirmation. Please, write down the seed exactly as shown.</span>
											<span class="error__notification-close"></span>
										</div>
									</form>
								</li>
							</ul>
							
						</div>
					</div><!-- END home__first -->
					<div class="col-12">
						<ul class="home__info-tabs def-list-zero">
							<li class="home__info-tab">
								<ul class="advantages__list def-list-zero">
									<li class="advantage__item">Secure</li>
									<li class="advantage__item">Anonymous</li>
									<li class="advantage__item">Instant</li>
									<li class="advantage__item">Worldwide</li>
									<li class="advantage__item">Control</li>
								</ul>
								<ul class="advantage-more__list def-list-zero">
									<li class="advantage-more__item">
										<div class="advantage-more__col">
											<img src="img/advantage-secure.svg" alt="Secure" width="420" height="420">
										</div>
										<div class="advantage-more__col">
											<p class="advantage-more__title">Secure</p>
											<p class="advantage-more__subtitle">Bitamp is an open-source, client-side, free Bitcoin wallet which allows you to send and receive Bitcoin securely on the blockchain.</p>
											<p class="def-p">Remember to always verify your SSL connection before logging in. Look for the padlock to the left of bitamp.com in your browser.</p>
										</div>
									</li>
									<li class="advantage-more__item">
										<div class="advantage-more__col">
											<p class="advantage-more__title">Anonymous</p>
											<p class="advantage-more__subtitle">Your anonymity is important to us. Bitamp doesn't store your seed, private key, transactions, ip address or browser details.</p>
											<p class="def-p">No email address or personal information is needed to use our service. Feel free to access your account from home, VPN or TOR.</p>
										</div>
										<div class="advantage-more__col">
											<img src="img/advantage-anonymous.svg" alt="Anonymous" width="420" height="420">
										</div>
									</li>
									<li class="advantage-more__item">
										<div class="advantage-more__col">
											<img src="img/advantage-instant.svg" alt="Instant" width="420" height="420">
										</div>
										<div class="advantage-more__col">
											<p class="advantage-more__title">Instant</p>
											<p class="advantage-more__subtitle">Directly connect to the Bitcoin blockchain in your browser with Bitamp.</p>
											<p class="def-p">Transactions are sent instantly at your command. Once broadcast, the blockchain typically takes 10 minutes to confirm your transfer. With normal banks, transfers can take several days or weeks.</p>
										</div>
									</li>
									<li class="advantage-more__item">
										<div class="advantage-more__col">
											<p class="advantage-more__title">Worldwide</p>
											<p class="advantage-more__subtitle">Bitcoin doesn't have borders. You can send money to any recipient globally without any restrictions.</p>
											<p class="def-p">Bitcoin transactions only cost you pennies, its not a mystery why Bitcoin is used by millions of people to transfer money worldwide.</p>
										</div>
										<div class="advantage-more__col">
											<img src="img/advantage-worldwide.svg" alt="Worldwide" width="420" height="420">
										</div>
									</li>
									<li class="advantage-more__item">
										<div class="advantage-more__col">
											<img src="img/advantage-control.svg" alt="Control" width="420" height="420">
										</div>
										<div class="advantage-more__col">
											<p class="advantage-more__title">Control</p>
											<p class="advantage-more__subtitle">Your Keys, Your Bitcoin. These are words to live by. Not having access to your private key or seed puts you at risk to lose your Bitcoin.</p>
											<p class="def-p">Again and again crypto exchanges and custodial wallets have been hacked, dissolved or become insolvent; leaving their members with empty wallets. Don't fall victim, take control of your Bitcoin and your financial independance.</p>
										</div>
									</li>
								</ul>
							</li>
							<li class="home__info-tab">
								<ul class="recommendations-list def-list-zero">
									<li class="recommendation-item recommendation-item--save">
										<p class="recommendation-title">You must save your Seed</p>
										<p class="def-p">In the box above you will find your "Seed" of twelve words in specific order. This information is private and must be kept secure. This is the only way to access your Bitcoin/Bitamp wallet. We never store your "Seed" on our servers and if lost, recovery is not possible. If stolen, you must move your funds to a new account immediately with a newly generated "Seed". Ensure the safety of your "Seed" by writing it down on a piece of paper, laminating it and storing it in a secure place or saving it to an encrypted file on a USB stick.</p>
									</li>
									<li class="recommendation-item recommendation-item--mindful">
										<p class="recommendation-title">Be mindful using Bitamp</p>
										<p class="def-p">Bitamp is a web based wallet permitting you to access your Bitcoin without running a full node, downloading any software or apps. We recommend treating Bitamp like you would treat your actual wallet. Try to not store large amounts on here as this might leave you at considerable risk. If you would like to use Bitcoin for long-term storage, we suggest creating an account, storing your seed in a safe place and only use your account once.</p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- END row -->
			</div><!-- END container -->
		</main><!-- END main -->

		<!-- box-modal -->
		<div style="display: none;">
			<div class="home__modal-welcome box-modal modal-bg-pattern">
				<div class="box-modal__close arcticmodal-close"></div>
				<select class="box-modal__select form__select" name="lang">
					<option value="English">English</option>
					<option value="Francias">Francias</option>
					<option value="Deutch">Deutch</option>
					<option value="Русский">Русский</option>
					<option value="Espanol">Espanol</option>
					<option value="Italiano">Italiano</option>
					<option value="Portugues">Portugues</option>
					<option value="漢語">漢語</option>
					<option value="日本語">日本語</option>
					<option value="Korean">Korean</option>
					<option value="Arabic">Arabic</option>
					<option value="Hindi">Hindi</option>
				</select>
				<p class="box-modal__title">Welcome to Bitamp.com</p>
				<p class="box-modal__p">Bitamp is an open-source, client-side, free Bitcoin wallet which allows you to send and receive Bitcoin instantly on the blockchain. All while remaining in complete control of your seed and private keys.</p>
				<p class="box-modal__p">Your anonymity is important to us. No personal information is required to use our service.</p>
				<p class="box-modal__p">When you generate a new wallet, login, send or receive Bitcoin using Bitamp, everything happens locally in your browser. Your seed and private keys are never transmitted, received or stored. That's why its critical to print, write down or save your seed somewhere safe. Otherwise, your account cannot be recovered.</p>
				<div class="box-modal__p">
					<span>Use Bitamp to access your Bitcoin with:</span> 
					<ul class="box-modal__list def-list-zero">
						<li class="box-modal__item"><span>✔</span> Your Seed</li>
						<li class="box-modal__item"><span>✔</span> Your Private Key</li>
					</ul>
				</div>
				<p class="box-modal__p">Or create a new account in seconds.</p>
				<button class="box-modal__btn btn-active arcticmodal-close">Ok</button>
			</div>
		</div>
<?php
	require_once 'footer.php';
?>