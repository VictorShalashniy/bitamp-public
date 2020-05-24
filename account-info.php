<?php
require_once 'header-account.php';
?>
<main class="main def-page account-info">
	<div class="container">
		<div class="row">
			<div class="account__block">
				<div class="account__row-line">
					<div class="account__top-wrap">
						<div class="account__block-title">Your Private Information</div>
					</div>
					<div id="seed_account" class="home__form">
						<div class="donate__label">Seed Words:</div>

						<div class="form__label wrap-for-copy-print form__label--mob-for-generate">
							<div class="form__nav-options-wrap" style="margin-bottom: 0px;">
								<textarea class="form__textarea" id="ploginkeyseed" style="color: #404755; border-color: #d8dbe5; background-color: #f4f4f7;" readonly="">fuel green over wealth observe forum frame diesel crazy unit razor uncle</textarea>
							</div>
							<span id="cpy-seed" class="btn-copy copyready"></span>
							<span class="btn-print" ></span>
						</div>
					</div>
					<div id="pkey_account" style="display: none;">
						<div class="donate__label">[UNCOMPRESSED] Private Key:</div>
						<div class="wrap-for-copy">
							<input id="ploginkey" class="donate__input form__text-input" value="" readonly="">
							<span id="cpy-uncompressed" class="btn-copy copyready"></span>
						</div>
						<div class="donate__label" style="margin-top: 25px;">[COMPRESSED] Private Key:</div>
						<div class="wrap-for-copy">
							<input id="ploginkeycompressed" class="donate__input form__text-input" value="" readonly="">
							<span id="cpy-compressed" class="btn-copy copyready"></span>
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