<?php
require_once 'header-account.php';
?>
<main class="main def-page account">
	<div class="container">
		<div class="row">
			<div class="account__block">
				<div class="account__row account__receive-bitcoin">
					<div class="account__input-wrap">
						<div class="account__block-title">Receive Bitcoin</div>
						<div>
							<select id="receive-address">
								<option value="1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb">1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb</option>
								<option value="bc1q6kw6dhkexh6eu5kkl8pct8c86p6fc5d6kg377d">bc1q6kw6dhkexh6eu5kkl8pct8c86p6fc5d6kg377d</option>
								<option value="3JGkPF59p5EQS8XDV3bPhoDXGRQqvLPT5A">3JGkPF59p5EQS8XDV3bPhoDXGRQqvLPT5A</option>
							</select>
						</div>
						<div class="account__wrapper-selected">
							<span class="account__selected-title">Selected receiving address:</span>
							<span class="account__selected-address" id="selected-address">1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb</span>
							<span class="account__selected-copy copyready btn-copy2" id="copy-receive-address">copy</span>
						</div>
					</div>
					<div class="account__qr-wrap">
						<div id="qrcode-receive" title="bitcoin:1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb"><canvas width="150" height="150" style="display: none;"></canvas><img style="display: block;" src="data:image/png;base64,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"></div>
					</div>
				</div>
			</div>
			<div class="account__block">
				<div class="account__top-wrap">
					<div class="account__block-title">Transactions</div>
				</div>
				<div class="stat__table">
					<div class="stat__row stat__row--sent">
						<div class="stat__col">
							<div class="stat__operation">Sent BTC</div>
							<div class="stat__operation-date">12.06.2018</div>
						</div>
						<div class="stat__col">
							<div class="stat__my-wallet">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
							<div class="stat__other-wallet">3PH3Yh7WtfAT7ugsDP5nWJUjBWFX2qvTfAD</div>
						</div>
						<div class="stat__col stat__col--pending">
							<div class="stat__status">Pending</div>
							<div class="stat__process">0/6</div>
						</div>
						<div class="stat__col">
							<div class="stat__operation-balance">-0.67821672</div>
							<div class="stat__result-balance">$4,300.25</div>
						</div>
					</div><!-- END stat__row -->
					<div class="stat__row stat__row--received">
						<div class="stat__col">
							<div class="stat__operation">Sent BTC</div>
							<div class="stat__operation-date">12.06.2018</div>
						</div>
						<div class="stat__col">
							<div class="stat__my-wallet">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
							<div class="stat__other-wallet">3PH3Yh7WtfAT7ugsDP5nWJUjBWFX2qvTfAD</div>
						</div>
						<div class="stat__col stat__col--confirmed">
							<div class="stat__status">Confirmed</div>
							<div class="stat__process">1/6</div>
						</div>
						<div class="stat__col">
							<div class="stat__operation-balance">+0.67821672</div>
							<div class="stat__result-balance">$4,300.25</div>
						</div>
					</div><!-- END stat__row -->
					<div class="stat__row stat__row--sent">
						<div class="stat__col">
							<div class="stat__operation">Sent BTC</div>
							<div class="stat__operation-date">12.06.2018</div>
						</div>
						<div class="stat__col">
							<div class="stat__my-wallet">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
							<div class="stat__other-wallet">3PH3Yh7WtfAT7ugsDP5nWJUjBWFX2qvTfAD</div>
						</div>
						<div class="stat__col stat__col--pending">
							<div class="stat__status">Pending</div>
							<div class="stat__process">0/6</div>
						</div>
						<div class="stat__col">
							<div class="stat__operation-balance">-0.67821672</div>
							<div class="stat__result-balance">$4,300.25</div>
						</div>
					</div><!-- END stat__row -->
					<div class="stat__row stat__row--received">
						<div class="stat__col">
							<div class="stat__operation">Sent BTC</div>
							<div class="stat__operation-date">12.06.2018</div>
						</div>
						<div class="stat__col">
							<div class="stat__my-wallet">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
							<div class="stat__other-wallet">3PH3Yh7WtfAT7ugsDP5nWJUjBWFX2qvTfAD</div>
						</div>
						<div class="stat__col stat__col--confirmed">
							<div class="stat__status">Confirmed</div>
							<div class="stat__process">1/6</div>
						</div>
						<div class="stat__col">
							<div class="stat__operation-balance">+0.67821672</div>
							<div class="stat__result-balance">$4,300.25</div>
						</div>
					</div><!-- END stat__row -->
					<div class="stat__row stat__row--sent">
						<div class="stat__col">
							<div class="stat__operation">Sent BTC</div>
							<div class="stat__operation-date">12.06.2018</div>
						</div>
						<div class="stat__col">
							<div class="stat__my-wallet">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
							<div class="stat__other-wallet">3PH3Yh7WtfAT7ugsDP5nWJUjBWFX2qvTfAD</div>
						</div>
						<div class="stat__col stat__col--pending">
							<div class="stat__status">Pending</div>
							<div class="stat__process">0/6</div>
						</div>
						<div class="stat__col">
							<div class="stat__operation-balance">-0.67821672</div>
							<div class="stat__result-balance">$4,300.25</div>
						</div>
					</div><!-- END stat__row -->
					<div class="stat__row stat__row--received">
						<div class="stat__col">
							<div class="stat__operation">Sent BTC</div>
							<div class="stat__operation-date">12.06.2018</div>
						</div>
						<div class="stat__col">
							<div class="stat__my-wallet">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
							<div class="stat__other-wallet">3PH3Yh7WtfAT7ugsDP5nWJUjBWFX2qvTfAD</div>
						</div>
						<div class="stat__col stat__col--confirmed">
							<div class="stat__status">Confirmed</div>
							<div class="stat__process">1/6</div>
						</div>
						<div class="stat__col">
							<div class="stat__operation-balance">+0.67821672</div>
							<div class="stat__result-balance">$4,300.25</div>
						</div>
					</div><!-- END stat__row -->
					<div class="stat__row stat__row--sent">
						<div class="stat__col">
							<div class="stat__operation">Sent BTC</div>
							<div class="stat__operation-date">12.06.2018</div>
						</div>
						<div class="stat__col">
							<div class="stat__my-wallet">3P7awoHBQvJSgRqYdmkoTBdrhiQtAeAZHf2</div>
							<div class="stat__other-wallet">3PH3Yh7WtfAT7ugsDP5nWJUjBWFX2qvTfAD</div>
						</div>
						<div class="stat__col stat__col--pending">
							<div class="stat__status">Pending</div>
							<div class="stat__process">0/6</div>
						</div>
						<div class="stat__col">
							<div class="stat__operation-balance">-0.67821672</div>
							<div class="stat__result-balance">$4,300.25</div>
						</div>
					</div><!-- END stat__row -->
				</div>
				<button class="stat__btn">
					<span>All transactions</span>
				</button>
			</div>
		</div>
	</div>
</main>
<?php
require_once 'footer-account.php';
?>