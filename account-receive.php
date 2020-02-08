<?php
	require_once 'header-account.php';
?>
	<main class="main def-page account account-receive">
		<div class="container">
			<div class="row">
				<div class="account__block">
					<div class="account__top-wrap">
						<div class="account__block-title">Receive Bitcoin</div>
					</div>
					<div class="account__row">
						<div class="account__left-col">
							<div class="form__label">
								<div class="form__label-text account__label-text">Copy & Share Address:</div>
								<div class="wrap-for-copy account__wrap-for-copy">
									<input class="form__text-input" value="3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2" disabled>
									<span class="btn-copy"></span>
								</div>
							</div>
							<div class="border__or"></div>
							<div class="form__label">
								<label class="form__label-text account__label-text" for="btc-amount">Enter amount:</label>
								<div class="label__row">
									<div class="label__left-col">
										<input class="form__text-input form__text-input--btc form__text-input--btc" id="btc-amount" type="text" name="btc-amount" value="0.32671872">
									</div>
									<div class="label__right-col label__right-col--arrow">
										<input class="form__text-input form__text-input--usd" id="btc-amount" type="text" name="btc-amount" value="2780">
									</div>
								</div>
							</div>
							<label class="form__label">
								<span class="form__label-text">Description:</span>
								<textarea class="form__textarea form__textarea--description" name="create-wallet-confirm-your-seed" placeholder="What’s this transaction for?"></textarea>
							</label>
						</div>
						<div class="account__right-col account__mob-right-col">
							<div class="account__receive-qr">
								<img src="img/qrcode-300x300.png" alt="qr" width="300px" height="300">
							</div>
							<div class="wrap-for-copy account__wrap-for-copy">
								<div class="form__label-text account__label-text">Copy Share Link</div>
								<input class="form__text-input" value="3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2" disabled>
								<span class="btn-copy"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
	require_once 'footer-account.php';
?>