<!DOCTYPE html>
<html>
  <head>
  
<!-- 1. Add your Name below -->
    <title>Order Form by Brandon Lanoue</title>

    <style type="text/css">
        table thead, tfoot{
            font-weight: bold;
            background-color: #eee;
        }
        table {
            border-collapse: collapse;            
        }
        table td, th {
            text-align: left;
            border: 1px solid #ddd;
            padding: 15px;
        }
        td:empty {
            border: 0;
            background-color: white;
        }
        
    </style>
  </head>
  <body>
  
<!-- 1b. Add your name below -->
    <h1>Order Form - by Brandon Lanoue</h1>
    
    <?php
    
/////////////////////////////////////////////////////////////////////////
//   2. Create a condition to test if the submit button has been clicked 
///////////////////////////////////////////////////////////////////////// 

// function definition
if (!isset($_POST['submit'])) {

// function definition

    ?>
    
<!-- 3. Set the appropriate method and action 
        HINT: EITHER OF THE TWO METHODS CAN BE USED 
        HINT: USE THE SELF REFERENCING SUPER GLOBAL FOR THE ACTION 
-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    
     <table>
       <thead>
           <tr>
    		 <td>Book</td>
    		 <td>Quantity</td>
    	   </tr>
       </thead>
       <tbody>
    	   <tr>
    		 <td>Head First PHP & MySQL</td>
    		 <td><input type="number" name="phpqty" value="0" min="0" max="99" /></td>
    	   </tr>
    	   <tr>
    		 <td>A Practical Guide to Fedora and Red Hat Enterprise Linux</td>
    		 <td><input type="number" name="linuxqty" value="0" min="0" max="99" /></td>
    	   </tr>
    	   <tr>
    		 <td>Intro to Java Programming, Comprehensive Version</td>
    		 <td><input type="number" name="javaqty" value="0" min="0" max="99"/></td>
    	   </tr>
    	   <tr>
                <td>
                <input type="submit" value="Submit Order" name="submit" />
                </td>
    	   </tr>
       </tbody>
	 </table>
    </form>
    
    <?php

        } else {
/////////////////////////////////////////////////////////////////////////
//   4. Retrieve and store data from FORM submission 
/////////////////////////////////////////////////////////////////////////
  $phpqty = $_POST['phpqty'];
  $linuxqty = $_POST['linuxqty'];
  $javaqty = $_POST['javaqty'];

      
/////////////////////////////////////////////////////////////////////////
//   5. Define Constants (Tax, price for each book)
/////////////////////////////////////////////////////////////////////////

define('TAX',0.13);
define('phpPrice',30.99);
define('linuxPrice',50.99);
define('javaPrice',109.99);

	  
/////////////////////////////////////////////////////////////////////////
//   6. Calculate and store quantity multiplied by price for each book 
/////////////////////////////////////////////////////////////////////////

$phpcost = $phpqty * phpPrice;
$linuxcost = $linuxqty * linuxPrice;
$javacost = $javaqty * javaPrice;

                
/////////////////////////////////////////////////////////////////////////
//   7. Calculate and store both the Subtotal as well as Tax
/////////////////////////////////////////////////////////////////////////

$subtotal = $phpcost + $linuxcost + $javacost;
$tax = $subtotal * TAX;


/////////////////////////////////////////////////////////////////////////
//   8. Calculate and store Grand Total
/////////////////////////////////////////////////////////////////////////
    
$grandtotal = $subtotal + $tax;
        
   ?>
    <h2>Invoice</h2>
    <hr/>
     <table> 
       <thead>
           <tr>
    		 <td>Book</td>
    		 <td>Quantity</td>
             <td>Total</td>
    	   </tr>
       </thead>
       <tbody>
    	   <tr>
    		 <td>Head First PHP & MySQL</td>

<!-- 9a. Output the Qty and Cost for Book 1 -->
    		 <td><?php echo $phpqty      ?></td>
             <td>$<?php  echo $phpcost    ?></td>

    	   </tr>
    	   <tr>
    		 <td>A Practical Guide to Fedora and Red Hat Enterprise Linux</td>

<!-- 9b. Output the Qty and Cost for Book 2 -->    		 
             <td><?php echo $linuxqty     ?></td>
             <td>$<?php echo $linuxcost    ?></td>

    	   </tr>
    	   <tr>
    		 <td>Intro to Java Programming, Comprehensive Version</td>

<!-- 9c. Output the Qty and Cost for Book 3 -->
    		 <td><?php echo $javaqty     ?></td>
             <td>$<?php  echo $javacost    ?></td>

    	   </tr>
       </tbody>
       <tfoot>
            <tr>
              <td></td>
              <td>Subtotal:</td>

<!-- 9d. Output the Subtotal -->
              <td>$<?php  echo $subtotal   ?></td>

            </tr>
            <tr>
              <td></td>
              <td>Tax:</td>

<!-- 9e. Output the Tax -->
              <td>$<?php  echo $tax    ?></td>

            </tr>
            <tr>
              <td></td>
              <td>Grand Total:</td>

<!-- 9f. Output the Grand Total -->
              <td>$<?php echo $grandtotal     ?></td>

            </tr>
       </tfoot>
	 </table>
     
     <hr />
     
<!-- 10. Insert BOTH correct date functions below -->
     <p>Today is <?php echo date('l F jS, Y')     ?>. Your expected delivery date is: <?php echo date( 'l F jS, Y',mktime(0, 0, 0, date("m")  , date("d")+5, date("Y")))    ?></p>


    <?php
        }
    ?>
  </body>
</html>
