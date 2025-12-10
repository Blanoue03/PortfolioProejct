<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
</head>
<body>
<h2> <!—Display the page header here! --> </h2>
<img src="CandyCane.gif"><p />
<?php
$firstname = ($_POST["firstname"]);
    if ($firstname) {
        echo ("Good ");
        if (date("A") == "AM") // check for AM
        { 
            echo ("morning, ");
        } 
        else if (date("G") >= 12 && date("G") < 18) // check is hour of day > 12 and < 18
        { 
            echo ("afternoon, ");
        } 
        else // close the date if
        {
            echo ("evening, ");
        }
        echo ("$firstname<p />");
        $currentdate = date("l F j, Y"); // use appropriate date formatting characters
        echo ("The current date is $currentdate <p />"); 
        $month = date("m"); // retrieve system month (01 – 12)
 $day = date("d"); // retrieve system day of month (01 – 31)
 $year = date("Y"); // retrieve 4-digit year (i.e. 2023)
 $now = mktime(0,0,0,$month,$day,$year); // use mktime – return # of seconds to today
 $then = mktime(0,0,0,4,25,2025); // use mktime – return # of seconds to Christmas 2023
 $gap = $then - $now; // calculate difference in seconds between the two dates
 $gap = floor($gap/86400); // convert seconds into days (formula)
 echo ("The days until the semester ends are $gap"); // print $gap (# of Days)
 } 
 else {
    echo ("Please make sure to enter a first name");
 } // close the firstname if.
    

?>
</body>
</html>