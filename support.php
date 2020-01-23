<?php
	require_once 'header.php';
?>
		<main class="main def-page support bg-cube">
			<div class="container">
				<div class="row">
					<div class="def-page__content col-md-8 offset-md-2">
						<div class="def-page__title-wrap">
							<h1 class="def-page__title def-page__title--icon">Support</h1>
						</div>

						<div class="support__contacts">
							<div class="support__contact support__contact--support">
								<a class="support__email" href="mailto:support@bitamp.com">Support@bitamp.com</a>
								<div class="support__descr">Support email</div>
							</div>
							<div class="support__contact support__contact--feedback">
								<a class="support__email" href="mailto:feedback@bitamp.com">Feedback@bitamp.com</a>
								<div class="support__descr">Feedback & Bugs</div>
							</div>
						</div>

						<div class="donate">
							<div class="donate__content">
								<div class="donate__title">Donate to Bitamp</div>
								<div class="donate__label">BTC Address:</div>
								<div class="wrap-for-copy">
									<input class="donate__input form__text-input" value="3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2" disabled>
									<span class="btn-copy"></span>
								</div>
							</div>
							<div class="donate__qr-wrap">
								<img class="donate__qr" src="img/donate-qr.jpg" alt="qr" width="136" height="136">
							</div>
						</div>

						<p class="def-p">Bitamp is an open-source, client-side, free service that relies solely on donations. This keeps the lights on and development moving forward. Any amount received will be greatly appreciated and benefit the community.</p>
						<p class="def-p">If you require assistance using Bitamp, send us an email with your issue or question in detail. Feedback and bug reports are always welcome.</p>
						<p class="def-p">Please check the <a class="def-page__link" href="#">Bitamp FAQ</a> page before sending your email.</p>
						<p class="def-p">At the moment we only respond to emails in English, this may change in the future depending on demand for specific languages.</p>
					</div>
				</div>
			</div>
		</main>
<?php
	require_once 'footer.php';
?>