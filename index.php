<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
		/*
			Coded by: alexoah.
			Updated: 20200221.
		*/
		$name = "PHP Store";
		$credit = 1000;
		
		echo "<h1>Welcome to ".$name."!</h1>";
		echo "<h2>You have $".$credit." in your wallet.</h2>";
		
		$products['Computer'] = 750;
		$products['Car'] = 15000;
		$products['iPhone'] = 1000;
		$products['Toaster'] = 75;
		
		// Added a function for calculating tax.
		function tax_calc($amount, $tax) {
			return round($amount*(1 + $tax), 2);
		}
		
		$taxRate = 0.0825;
    echo "<p>";
		foreach($products as $key => $value) {
			$costWithTax = tax_calc($value, $taxRate);
			echo "- The ".$key." costs ".$costWithTax."<br/>";
		}
    echo "</p>";

		echo "<h2>Items you can afford:</h2>";
    echo "<p>";
		foreach($products as $key => $value) {
			$costWithTax = tax_calc($value, $taxRate);
			if($costWithTax <= $credit) {
				echo "- ".$key."<br/>";
			}
		}
    echo "</p>";
    ?>
  </body>
</html>