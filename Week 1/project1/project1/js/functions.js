/* define functions here */

function calculateTotal( quanity, price) {
	return quanity * price;
}
        
function outputCartRow( file, title, quantity, price, total){
	document.write("<tr>");
    document.write("<td><img src='images/" + file + "'></td>");
    document.write("<td>" + title + "</td>");
    document.write("<td>" + quantity + "</td>");
    document.write("<td>$" + price + "</td>");
    document.write("<td>$" + total + "</td>");
    document.write("</tr>");
}

function calcRow( name, amount, bold){
	if (!bold){
		document.write("<tr class=\"totals\">");
	} else{
		document.write("<tr class=\"totals focus\">");
   	}
    document.write("<td colspan=\"4\">" + name + "</td>");
    document.write("<td>$" + amount + "</td>");
    document.write("</tr>");
}