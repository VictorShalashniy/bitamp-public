<?php
	require_once 'header-account.php';
?>
	<main class="main def-page account">
		<div class="container">
			<div class="row">
				<div class="account__block">
					<div class="account__top-wrap">
						<div class="account__block-title">Receive Bitcoin</div>
					</div>
					<div class="form__label">
						<span class="account__label-text form__label-text">Receiver Address:</span>
						<div class="account__row">
							<div class="account__wrap-for-copy wrap-for-copy">
								<input class="form__text-input" type="text" placeholder="Enter Bitcoin Address, Scan QR or Paste BitPay Link">
								<span class="btn-qr"></span>
							</div>
							<span class="account__btn-bitpay btn-reset">BITPAY</span>
						</div>
					</div>
					<div class="form__label">
						<label class="form__label-text account__label-text" for="btc-amount">BTC Amount:</label>
						<div class="label__row">
							<div class="label__left-col">
								<input class="form__text-input form__text-input--max form__text-input--btc" id="btc-amount" type="text" name="btc-amount" value="0.32671872">
							</div>
							<div class="label__right-col label__right-col--arrow">
								<input class="form__text-input form__text-input--usd" id="btc-amount" type="text" name="btc-amount" value="2780">
							</div>
						</div>
					</div>
					<div class="form__label">
						<label class="form__label-text account__label-text" for="btc-priority">Transaction Fee:</label>
						<div class="label__row">
							<div class="label__left-col">
								<select class="form__select" id="btc-priority" name="btc-priority">
									<option value="0.00008626">Priority 0.00008626 BTC</option>
								</select>
							</div>
							<div class="label__right-col">
								<label class="account__checkbox form__checkbox">
									<input class="account__checkbox-input form__checkbox-input" id="account-option-support-bitamp" type="checkbox" name="account-option-support-bitamp" value="Support Bitamp">
									<span class="form__checkbox-box"></span>
									<span class="form__checkbox-label">Support Bitamp</span>
								</label>
								<input class="form__text-input form__text-input--hide form__text-input--btc" id="btc-amount" type="text" name="btc-amount" value="2780">
							</div>
						</div>
					</div>
					<div class="form__wrap-btns account__wrap-btns">
						<input class="form__btn-reset btn-reset" type="reset" value="CLEAR">
						<button class="btn-active">SEND PAYMENT</button>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- box-modal -->
		<div style="display: none;">
			<div class="home__modal-welcome box-modal">
				<div class="box-modal__close arcticmodal-close"></div>
				<p class="box-modal__alt-title">Please Confirm</p>
				<ul class="box-modal__alt-list def-list-zero">
					<li class="box-modal__alt-item">
						<div class="box-modal__col">You are transfering:</div>
						<div class="box-modal__col">7.48371002 BTC ($58,100 USD)</div>
					</li>
					<li class="box-modal__alt-item">
						<div class="box-modal__col">Into your account:</div>
						<div class="box-modal__col">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
					</li>
					<li class="box-modal__alt-item">
						<div class="box-modal__col">Transaction Fee:</div>
						<div class="box-modal__col">Priority 0.00008626 BTC</div>
					</li>
				</ul>
				<button class="btn-active arcticmodal-close">CONFIRM</button>
			</div>
		</div>
<?php
	require_once 'footer-account.php';
?>