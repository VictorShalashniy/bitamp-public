<?php
require_once 'header-account.php';
?>
<main class="main def-page account">
	<div class="container">
		<div class="row">
			<div class="account__block">
				<div class="account__top-wrap">
					<div class="account__block-title account__addresses-list-title">Addresses list</div>
					<select class="account__select form__select" id="address-type" onchange="update_addresses()">
						<option value="standard">standard (1xx)</option>
						<option value="segwit">segwit (bxx)</option>
						<option value="p2sh">p2sh (3xx)</option>
					</select>
				</div>
				<h4>[Receiving addresses]</h4>
				<ul id="addresses-list" class="account__list def-list-zero" style="margin-top: 20px;">
					<li class="account__item">
						<div class="account__item-col">Address</div>
						<div class="account__item-col">Copy</div>
						<div class="account__item-col">Balance</div>
						<div class="account__item-col">Transactions</div>
						<div class="account__item-col">Key</div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb" style="display:block;">1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb"></span></div>
						<div class="account__item-col"><span id="cpybtn-1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb" class="copyready btn-copy" onclick="copy_field('cpy_1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1MyM4p4XiYqT96Hr5ToFx6uQhhxB8kFeVb')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1Ds3ibyHF2BFe6u3k7JehbwimpD3VDkYyf" style="display:block;">1Ds3ibyHF2BFe6u3k7JehbwimpD3VDkYyf</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1Ds3ibyHF2BFe6u3k7JehbwimpD3VDkYyf"></span></div>
						<div class="account__item-col"><span id="cpybtn-1Ds3ibyHF2BFe6u3k7JehbwimpD3VDkYyf" class="copyready btn-copy" onclick="copy_field('cpy_1Ds3ibyHF2BFe6u3k7JehbwimpD3VDkYyf')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1Ds3ibyHF2BFe6u3k7JehbwimpD3VDkYyf')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_151LMG3xKUi9C6VeZYkf9v9sTMsKEUTWRj" style="display:block;">151LMG3xKUi9C6VeZYkf9v9sTMsKEUTWRj</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_151LMG3xKUi9C6VeZYkf9v9sTMsKEUTWRj"></span></div>
						<div class="account__item-col"><span id="cpybtn-151LMG3xKUi9C6VeZYkf9v9sTMsKEUTWRj" class="copyready btn-copy" onclick="copy_field('cpy_151LMG3xKUi9C6VeZYkf9v9sTMsKEUTWRj')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('151LMG3xKUi9C6VeZYkf9v9sTMsKEUTWRj')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_16N7tz7ALG5e4VpD6wBxhk1KeUhjcuV1K3" style="display:block;">16N7tz7ALG5e4VpD6wBxhk1KeUhjcuV1K3</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_16N7tz7ALG5e4VpD6wBxhk1KeUhjcuV1K3"></span></div>
						<div class="account__item-col"><span id="cpybtn-16N7tz7ALG5e4VpD6wBxhk1KeUhjcuV1K3" class="copyready btn-copy" onclick="copy_field('cpy_16N7tz7ALG5e4VpD6wBxhk1KeUhjcuV1K3')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('16N7tz7ALG5e4VpD6wBxhk1KeUhjcuV1K3')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1NfmTUnhsLuNrJjmqPszZ2yfDiT9ctu2EW" style="display:block;">1NfmTUnhsLuNrJjmqPszZ2yfDiT9ctu2EW</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1NfmTUnhsLuNrJjmqPszZ2yfDiT9ctu2EW"></span></div>
						<div class="account__item-col"><span id="cpybtn-1NfmTUnhsLuNrJjmqPszZ2yfDiT9ctu2EW" class="copyready btn-copy" onclick="copy_field('cpy_1NfmTUnhsLuNrJjmqPszZ2yfDiT9ctu2EW')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1NfmTUnhsLuNrJjmqPszZ2yfDiT9ctu2EW')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1J17xA57zk4w1eYvrc34RuBqwUaF8uyzrK" style="display:block;">1J17xA57zk4w1eYvrc34RuBqwUaF8uyzrK</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1J17xA57zk4w1eYvrc34RuBqwUaF8uyzrK"></span></div>
						<div class="account__item-col"><span id="cpybtn-1J17xA57zk4w1eYvrc34RuBqwUaF8uyzrK" class="copyready btn-copy" onclick="copy_field('cpy_1J17xA57zk4w1eYvrc34RuBqwUaF8uyzrK')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1J17xA57zk4w1eYvrc34RuBqwUaF8uyzrK')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1JYJsaMJYDHoCNDzdig9pBKBkqewXi1w2u" style="display:block;">1JYJsaMJYDHoCNDzdig9pBKBkqewXi1w2u</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1JYJsaMJYDHoCNDzdig9pBKBkqewXi1w2u"></span></div>
						<div class="account__item-col"><span id="cpybtn-1JYJsaMJYDHoCNDzdig9pBKBkqewXi1w2u" class="copyready btn-copy" onclick="copy_field('cpy_1JYJsaMJYDHoCNDzdig9pBKBkqewXi1w2u')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1JYJsaMJYDHoCNDzdig9pBKBkqewXi1w2u')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_14K5AZDmEynbuaQvrLCbTs8vGEpwt2i1Vy" style="display:block;">14K5AZDmEynbuaQvrLCbTs8vGEpwt2i1Vy</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_14K5AZDmEynbuaQvrLCbTs8vGEpwt2i1Vy"></span></div>
						<div class="account__item-col"><span id="cpybtn-14K5AZDmEynbuaQvrLCbTs8vGEpwt2i1Vy" class="copyready btn-copy" onclick="copy_field('cpy_14K5AZDmEynbuaQvrLCbTs8vGEpwt2i1Vy')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('14K5AZDmEynbuaQvrLCbTs8vGEpwt2i1Vy')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_19mT1bLzzXaBnPZMJppn5kU8LgTj2S6e18" style="display:block;">19mT1bLzzXaBnPZMJppn5kU8LgTj2S6e18</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_19mT1bLzzXaBnPZMJppn5kU8LgTj2S6e18"></span></div>
						<div class="account__item-col"><span id="cpybtn-19mT1bLzzXaBnPZMJppn5kU8LgTj2S6e18" class="copyready btn-copy" onclick="copy_field('cpy_19mT1bLzzXaBnPZMJppn5kU8LgTj2S6e18')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('19mT1bLzzXaBnPZMJppn5kU8LgTj2S6e18')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1C1sNh8deZFKhHNSc5iMenN563FaWWK1oa" style="display:block;">1C1sNh8deZFKhHNSc5iMenN563FaWWK1oa</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1C1sNh8deZFKhHNSc5iMenN563FaWWK1oa"></span></div>
						<div class="account__item-col"><span id="cpybtn-1C1sNh8deZFKhHNSc5iMenN563FaWWK1oa" class="copyready btn-copy" onclick="copy_field('cpy_1C1sNh8deZFKhHNSc5iMenN563FaWWK1oa')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1C1sNh8deZFKhHNSc5iMenN563FaWWK1oa')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1MSQTabCnMqyWxTwMMRPMyvCowery1w5JC" style="display:block;">1MSQTabCnMqyWxTwMMRPMyvCowery1w5JC</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1MSQTabCnMqyWxTwMMRPMyvCowery1w5JC"></span></div>
						<div class="account__item-col"><span id="cpybtn-1MSQTabCnMqyWxTwMMRPMyvCowery1w5JC" class="copyready btn-copy" onclick="copy_field('cpy_1MSQTabCnMqyWxTwMMRPMyvCowery1w5JC')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1MSQTabCnMqyWxTwMMRPMyvCowery1w5JC')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1DubJWKohDHrE5LXs98WKUnhc5aWiouQkH" style="display:block;">1DubJWKohDHrE5LXs98WKUnhc5aWiouQkH</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1DubJWKohDHrE5LXs98WKUnhc5aWiouQkH"></span></div>
						<div class="account__item-col"><span id="cpybtn-1DubJWKohDHrE5LXs98WKUnhc5aWiouQkH" class="copyready btn-copy" onclick="copy_field('cpy_1DubJWKohDHrE5LXs98WKUnhc5aWiouQkH')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1DubJWKohDHrE5LXs98WKUnhc5aWiouQkH')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1LyYwL4u7eJjxjBqPxkNT4m8KNLSgN17Tu" style="display:block;">1LyYwL4u7eJjxjBqPxkNT4m8KNLSgN17Tu</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1LyYwL4u7eJjxjBqPxkNT4m8KNLSgN17Tu"></span></div>
						<div class="account__item-col"><span id="cpybtn-1LyYwL4u7eJjxjBqPxkNT4m8KNLSgN17Tu" class="copyready btn-copy" onclick="copy_field('cpy_1LyYwL4u7eJjxjBqPxkNT4m8KNLSgN17Tu')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1LyYwL4u7eJjxjBqPxkNT4m8KNLSgN17Tu')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1P1cDoiUfYA4rQbsqPpXgNRc3jW5CRxNVT" style="display:block;">1P1cDoiUfYA4rQbsqPpXgNRc3jW5CRxNVT</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1P1cDoiUfYA4rQbsqPpXgNRc3jW5CRxNVT"></span></div>
						<div class="account__item-col"><span id="cpybtn-1P1cDoiUfYA4rQbsqPpXgNRc3jW5CRxNVT" class="copyready btn-copy" onclick="copy_field('cpy_1P1cDoiUfYA4rQbsqPpXgNRc3jW5CRxNVT')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1P1cDoiUfYA4rQbsqPpXgNRc3jW5CRxNVT')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_18hzDMnnGz9Jy39swkCwvy3K77JkR6HUcs" style="display:block;">18hzDMnnGz9Jy39swkCwvy3K77JkR6HUcs</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_18hzDMnnGz9Jy39swkCwvy3K77JkR6HUcs"></span></div>
						<div class="account__item-col"><span id="cpybtn-18hzDMnnGz9Jy39swkCwvy3K77JkR6HUcs" class="copyready btn-copy" onclick="copy_field('cpy_18hzDMnnGz9Jy39swkCwvy3K77JkR6HUcs')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('18hzDMnnGz9Jy39swkCwvy3K77JkR6HUcs')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_12f6djtSpzsqURFpHG5hDZrCCMApVxcgQA" style="display:block;">12f6djtSpzsqURFpHG5hDZrCCMApVxcgQA</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_12f6djtSpzsqURFpHG5hDZrCCMApVxcgQA"></span></div>
						<div class="account__item-col"><span id="cpybtn-12f6djtSpzsqURFpHG5hDZrCCMApVxcgQA" class="copyready btn-copy" onclick="copy_field('cpy_12f6djtSpzsqURFpHG5hDZrCCMApVxcgQA')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('12f6djtSpzsqURFpHG5hDZrCCMApVxcgQA')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1PwN1zEGGUvuPqjjZytHigEWEuHk3vbEgn" style="display:block;">1PwN1zEGGUvuPqjjZytHigEWEuHk3vbEgn</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1PwN1zEGGUvuPqjjZytHigEWEuHk3vbEgn"></span></div>
						<div class="account__item-col"><span id="cpybtn-1PwN1zEGGUvuPqjjZytHigEWEuHk3vbEgn" class="copyready btn-copy" onclick="copy_field('cpy_1PwN1zEGGUvuPqjjZytHigEWEuHk3vbEgn')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1PwN1zEGGUvuPqjjZytHigEWEuHk3vbEgn')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1NgWgE7HmKb2ji7UWpLEaBVuxRYoiiozZ1" style="display:block;">1NgWgE7HmKb2ji7UWpLEaBVuxRYoiiozZ1</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1NgWgE7HmKb2ji7UWpLEaBVuxRYoiiozZ1"></span></div>
						<div class="account__item-col"><span id="cpybtn-1NgWgE7HmKb2ji7UWpLEaBVuxRYoiiozZ1" class="copyready btn-copy" onclick="copy_field('cpy_1NgWgE7HmKb2ji7UWpLEaBVuxRYoiiozZ1')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1NgWgE7HmKb2ji7UWpLEaBVuxRYoiiozZ1')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_17bzqwtCz9VTsqiPKWQhbX3H9sqUoscBYQ" style="display:block;">17bzqwtCz9VTsqiPKWQhbX3H9sqUoscBYQ</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_17bzqwtCz9VTsqiPKWQhbX3H9sqUoscBYQ"></span></div>
						<div class="account__item-col"><span id="cpybtn-17bzqwtCz9VTsqiPKWQhbX3H9sqUoscBYQ" class="copyready btn-copy" onclick="copy_field('cpy_17bzqwtCz9VTsqiPKWQhbX3H9sqUoscBYQ')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('17bzqwtCz9VTsqiPKWQhbX3H9sqUoscBYQ')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1CwEu3MH6o7sTE3CD1cHMMDxbxzik5AmgB" style="display:block;">1CwEu3MH6o7sTE3CD1cHMMDxbxzik5AmgB</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1CwEu3MH6o7sTE3CD1cHMMDxbxzik5AmgB"></span></div>
						<div class="account__item-col"><span id="cpybtn-1CwEu3MH6o7sTE3CD1cHMMDxbxzik5AmgB" class="copyready btn-copy" onclick="copy_field('cpy_1CwEu3MH6o7sTE3CD1cHMMDxbxzik5AmgB')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1CwEu3MH6o7sTE3CD1cHMMDxbxzik5AmgB')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col">Address</div>
						<div class="account__item-col">Copy</div>
						<div class="account__item-col">Balance</div>
						<div class="account__item-col">Transactions</div>
						<div class="account__item-col">Key</div>
					</li>
				</ul>
				<h4 id="change-address-main" style="margin-top: 40px;">[Change addresses]</h4>
				<ul id="change-addresses-list" class="account__list def-list-zero" style="margin-top: 20px;">
					<li class="account__item">
						<div class="account__item-col">Address</div>
						<div class="account__item-col">Copy</div>
						<div class="account__item-col">Balance</div>
						<div class="account__item-col">Transactions</div>
						<div class="account__item-col">Key</div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_192F5ZjSenREHDNLo6aRJekZHvKb8edpbQ" style="display:block;">192F5ZjSenREHDNLo6aRJekZHvKb8edpbQ</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_192F5ZjSenREHDNLo6aRJekZHvKb8edpbQ"></span></div>
						<div class="account__item-col"><span id="cpybtn-192F5ZjSenREHDNLo6aRJekZHvKb8edpbQ" class="copyready btn-copy" onclick="copy_field('cpy_192F5ZjSenREHDNLo6aRJekZHvKb8edpbQ')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('192F5ZjSenREHDNLo6aRJekZHvKb8edpbQ')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_14ViATvCqFUf3CRdp4v5punG17HLv4EGFD" style="display:block;">14ViATvCqFUf3CRdp4v5punG17HLv4EGFD</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_14ViATvCqFUf3CRdp4v5punG17HLv4EGFD"></span></div>
						<div class="account__item-col"><span id="cpybtn-14ViATvCqFUf3CRdp4v5punG17HLv4EGFD" class="copyready btn-copy" onclick="copy_field('cpy_14ViATvCqFUf3CRdp4v5punG17HLv4EGFD')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('14ViATvCqFUf3CRdp4v5punG17HLv4EGFD')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_15xVzwqc2out6WXmaiP7G6au3niaDybQVa" style="display:block;">15xVzwqc2out6WXmaiP7G6au3niaDybQVa</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_15xVzwqc2out6WXmaiP7G6au3niaDybQVa"></span></div>
						<div class="account__item-col"><span id="cpybtn-15xVzwqc2out6WXmaiP7G6au3niaDybQVa" class="copyready btn-copy" onclick="copy_field('cpy_15xVzwqc2out6WXmaiP7G6au3niaDybQVa')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('15xVzwqc2out6WXmaiP7G6au3niaDybQVa')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1JsgZdPbFsZphHYt2jyqNF6c3axxJZ3ARd" style="display:block;">1JsgZdPbFsZphHYt2jyqNF6c3axxJZ3ARd</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1JsgZdPbFsZphHYt2jyqNF6c3axxJZ3ARd"></span></div>
						<div class="account__item-col"><span id="cpybtn-1JsgZdPbFsZphHYt2jyqNF6c3axxJZ3ARd" class="copyready btn-copy" onclick="copy_field('cpy_1JsgZdPbFsZphHYt2jyqNF6c3axxJZ3ARd')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1JsgZdPbFsZphHYt2jyqNF6c3axxJZ3ARd')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1Q1PePvi8dJqUryuNwrNzHjQtLhgifJLh5" style="display:block;">1Q1PePvi8dJqUryuNwrNzHjQtLhgifJLh5</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1Q1PePvi8dJqUryuNwrNzHjQtLhgifJLh5"></span></div>
						<div class="account__item-col"><span id="cpybtn-1Q1PePvi8dJqUryuNwrNzHjQtLhgifJLh5" class="copyready btn-copy" onclick="copy_field('cpy_1Q1PePvi8dJqUryuNwrNzHjQtLhgifJLh5')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1Q1PePvi8dJqUryuNwrNzHjQtLhgifJLh5')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col"><span id="cpy_1JZosPd6CxBna58EgiUNYYcw1A3zx9VYHd" style="display:block;">1JZosPd6CxBna58EgiUNYYcw1A3zx9VYHd</span><span style="display: none; position:relative; top:7px; font-size:11px; color:#ff1b1b;" id="pkey_1JZosPd6CxBna58EgiUNYYcw1A3zx9VYHd"></span></div>
						<div class="account__item-col"><span id="cpybtn-1JZosPd6CxBna58EgiUNYYcw1A3zx9VYHd" class="copyready btn-copy" onclick="copy_field('cpy_1JZosPd6CxBna58EgiUNYYcw1A3zx9VYHd')"></span></div>
						<div class="account__item-col">0.00</div>
						<div class="account__item-col">0</div>
						<div class="account__item-col"><span class="btn-pkey" onclick="display_pkey('1JZosPd6CxBna58EgiUNYYcw1A3zx9VYHd')"></span></div>
					</li>
					<li class="account__item">
						<div class="account__item-col">Address</div>
						<div class="account__item-col">Copy</div>
						<div class="account__item-col">Balance</div>
						<div class="account__item-col">Transactions</div>
						<div class="account__item-col">Key</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</main>
<?php
require_once 'footer-account.php';
?>