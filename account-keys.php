<?php
	require_once 'header-account.php';
?>
	<main class="main def-page account">
		<div class="container">
			<div class="row">
				<div class="account__block">
					<div class="account__row-line">
						<div class="account__top-wrap">
							<div class="account__block-title">Your Private Login Key</div>
						</div>
						<div class="donate__label">Review your Private login key here:</div>
						<div class="wrap-for-copy">
							<input class="donate__input form__text-input" value="abbey avoid aspire western arises knuckle inactive hacksaw waxing yard fall lectures arises" disabled>
							<span class="btn-copy"></span>
						</div>
					</div>
					<div class="account__row-line">
						<div class="account__top-wrap">
							<div class="account__block-title">Review Account Details</div>
						</div>
						<div class="form__label">
							<div class="form__label-text account__label-text">Account Address (Public):</div>
							<div class="wrap-for-copy account__wrap-for-copy">
								<input class="form__text-input" value="4A4yV4Dq43Ga33wBXMs4vCcbEfz5AG6joZKrBg4QFCPXBKXDXGDdLHXhZJnpS5GWyA9dPGCv1vZtMdL5uoQC944iEYY4qR1" disabled>
								<span class="btn-copy"></span>
							</div>
						</div>
						<div class="form__label account__label-text">
							<div class="form__label-text">View Key (Private):</div>
							<div class="wrap-for-copy account__wrap-for-copy">
								<input class="form__text-input" value="35aaa976b6915f59ddd285efdf55591e3468967aa973c225f610035e6b9f8701" disabled>
								<span class="btn-copy"></span>
							</div>
						</div>
						<div class="form__label account__label-text">
							<div class="form__label-text">Spend Key (Private):</div>
							<div class="wrap-for-copy account__wrap-for-copy">
								<input class="form__text-input" value="f313521cb98b70f9b332f9ecb7c91c2a0e2542923d7b783f0d40dafd0265d008" disabled>
								<span class="btn-copy"></span>
							</div>
						</div>
					</div>
					<div class="account__row-line">
						<div class="account__top-wrap">
							<div class="account__block-title">Import transactions</div>
							<p class="account__p">To import all your previous transactions and account balance you have to pay a once-off import fee of 0.1 BTC to the account listed below. The command to make the payment has already been prepared to make it easy for you to copy and paste it into monero-wallet-cli.</p>
							<div class="account__warning">The details below are for paying the import fee, and they are NOT your wallet's details. To view your wallet's address click the "Ok" button at the bottom of this form, and look for the "Address" section on the Overview tab.</div>
						</div>
						<div class="form__label account__label-text">
							<div class="form__label-text">Payment command:</div>
							<div class="wrap-for-copy account__wrap-for-copy">
								<input class="form__text-input" value="transfer import.mymonero.com 0.1 916cfa8b7bbf46688ceb08069702a5d710d68044af9c66543f61cbb76ee1993c" disabled>
								<span class="btn-copy"></span>
							</div>
						</div>
						<div class="form__label account__label-text">
							<div class="form__label-text">Payment address (NOTE: this is not your wallet, this is the import fee wallet)</div>
							<div class="wrap-for-copy account__wrap-for-copy">
								<input class="form__text-input" value="44LbNqbmRCmEPxZYmwKw2hbga37svZsHPQ6hLAK4mtApPoWrbpTBiKo6jW452raUXW3M7qUq7yztuchsNYgwYj8S5KQKK43" disabled>
								<span class="btn-copy"></span>
							</div>
						</div>
						<div class="form__label account__label-text">
							<div class="form__label-text">Payment ID (make sure to use this)</div>
							<div class="wrap-for-copy account__wrap-for-copy">
								<input class="form__text-input" value="916cfa8b7bbf46688ceb08069702a5d710d68044af9c66543f61cbb76ee1993c" disabled>
								<span class="btn-copy"></span>
							</div>
						</div>
						<div class="account__payment-status">Payment status: <span>Payment not yet received</span></div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
	require_once 'footer-account.php';
?>