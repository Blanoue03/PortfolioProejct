<?php /* this program receives the quantity from a form */
$quantity = $_POST["quantity"];
$cost = 2000.00; $discount = 100.00; $tax = 0.13;
if(!empty($quantity) ){

$discount = abs($discount); // must be an absolute value
$quantity = abs($quantity); // must be an absolute value
$tax += 1;// ADD 1 to tax variable
 
$totalCost = $cost * $quantity;// calculate totalcost (cost times quantity)
 
if($totalCost <= 5000.00)// if statement to see if cost is less than 5000.00 
{
 print ("Your $100 discount will not apply because the total value of the sale is under $5000!");
}// end the if
if($totalCost >= 5000.00)// if statement to see if cost is >= 5000.00
{
    $totalCost -= $discount;// calculate totalcost minus discount
}// end the if

$totalCost *= $tax;
$monthPayment = round($totalCost,2)/12;
// calculate a monthly payment amount (by rounding totalcost to 2 decimal places and then
//dividing by 12)
// echo headings.
echo ("<h2>The PHP payment calculation conditionals program</h2>");
echo ("<h2>programmed by {your name goes here!}</h2>");
// echo results.
echo("you requested to purchase $quantity widget(s) at $$cost each. </br>");
echo("The total with tax, minus any discount, comes to $");
printf("%.2f",$totalCost);
echo("</br> you may purchase widget(s) in 12 monthly installments of $"); 
printf("%.2f",$monthPayment);
 // Use a combination of echo and printf() functions to
 //create the output (See screen capture)
} else {
 // If quantity was empty, display a message to the user to return to form and enter a quantity,
 print ("please make sure that you have entered a quantity and then resubmit");
}
?>