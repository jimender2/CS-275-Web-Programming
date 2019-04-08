<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Chapter 7</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

	<link rel="stylesheet" href="css/styles.css">
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>

<body>

<!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
			mdl-layout--fixed-header">

	<?php
		include 'header.inc.php';
		include 'left.inc.php';
		include 'data.inc.php';

		$subtotal = 0;
		$a=array();

		function outputOrderRow($file, $title, $quantity, $price) {
			$price1 = number_format($price, 2, ".", ",");
			$price2 = number_format($quantity * $price, 2, ".", ",");
			$stuff = '<tr>
					<td><img src="images/books/tinysquare/%s"></td>
					<td class="mdl-data-table__cell--non-numeric">%s</td>
					<td>%s</td>
					<td>$%s</td>
					<td>$%s</td>
				</tr>';
			printf( $stuff, $file, $title, $quantity, $price1, $price2 );
			
			global $subtotal;
			$subtotal = $subtotal + $quantity * $price;
			$test = $quantity * $price;
		}

	?>

  <main class="mdl-layout__content mdl-color--grey-50">
	<header class="mdl-color--blue-grey-200">
	  <h4>Order Summaries</h4>
	  <p>Examine your customer orders</p>
	</header>
	<section class="page-content">

		<div class="mdl-grid">

		  <!-- mdl-cell + mdl-card -->
		  <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
			<div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
			  <h2 class="mdl-card__title-text">My Orders</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<ul class="mdl-list">
				
					<?php
						for ($i=500; $i<550; $i = $i + 10) {
							echo "<li ><a href=\"#\">Order #" . $i . "</a></li>";
						}
					?>
				</ul>
			</div>
		  </div>  <!-- / mdl-cell + mdl-card -->




		  <!-- mdl-cell + mdl-card -->
		  <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">
			<div class="mdl-card__title mdl-color--orange">
			  <h2 class="mdl-card__title-text">Selected Order: #520</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<table class="mdl-data-table  mdl-shadow--2dp">
				 <caption>Customer: <strong>Mount Royal University</strong></caption>
				  <thead>
					<tr>
					  <th>Cover</th>
					  <th class="mdl-data-table__cell--non-numeric">Title</th>
					  <th>Quantity</th>
					  <th>Price</th>
					  <th>Amount</th>
					</tr>
				  </thead>
				  <tbody>

					<?php
						outputOrderRow($file1, $product1, $quantity1, $price1);
						outputOrderRow($file2, $product2, $quantity2, $price2);
						outputOrderRow($file3, $product3, $quantity3, $price3);
						outputOrderRow($file4, $product4, $quantity4, $price4);
					?>
				  </tbody>
				  <tfoot>
					  <tr class="totals">
						  <td colspan="4">Subtotal</td>
						  <?php
							echo "<td>$" . number_format($subtotal, 2, ".", ",") . "</td>";
						  ?>
					  </tr>
					  <tr class="totals">
						  <td colspan="4">Shipping</td>
						  <?php
							if ($subtotal < 10000){
								echo "<td>$200.00</td>";
								$subtotal = $subtotal + 200;
							} else {
								echo "<td>$100.00</td>";
								$subtotal = $subtotal + 100;
							}
							?>
					  </tr>
					  <tr class="grandtotals">
						  <td colspan="4">Grand Total</td>
						  <?php
							echo "<td>$" . number_format($subtotal, 2, ".", ",") . "</td>";
						  ?>
					  </tr>
				  </tfoot>

				</table>
			</div>

		  </div>  <!-- / mdl-cell + mdl-card -->




		</div>  <!-- / mdl-grid -->


	</section>
  </main>


</div>

</body>
</html>