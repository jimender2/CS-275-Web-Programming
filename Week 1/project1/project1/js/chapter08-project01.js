/* add loop and other code here ... in this simple exercise we are not
   going to concern ourselves with minimizing globals, etc */


(function () {
	"use strict";
	var i = 0;
	var total = 0;
	while (i < filenames.length) {
		outputCartRow( filenames[i], titles[i], quantities[i], prices[i].toFixed(2), calculateTotal(quantities[i], prices[i]).toFixed(2));
		total = total + calculateTotal(quantities[i], prices[i]);
		i++;
	}
	var tax = (total*0.10);
	calcRow( "Subtotal", total.toFixed(2), false);
	calcRow( "Tax", tax.toFixed(2), false);
	
	var shippingCost = 40;
	if (total >= 1000){
		shippingCost = 0;
	}
	calcRow( "Shipping", shippingCost, false);
	calcRow( "Grand Total", (total + tax + shippingCost).toFixed(2), true);

})();
