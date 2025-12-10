<!DOCTYPE html>
<html>
<head><title>Grade Averaging</title></head>
<body style="background-color: rgb(255,255,204);">
 <h2>Grade Averaging - by Brandon Lanoue</h2>
<?php
// define array of grades ranging between 1 and 100
$grades = array(25, 64, 23, 87, 56, 38, 78, 57, 98, 95, 81, 67, 75, 76, 74,
82, 36, 39, 54, 43, 49, 65, 69, 69, 78, 17, 91);
$count = count($grades); // get number of grades (27)
// declare variables
$total = $top = $bottom = 0;
foreach ($grades as $grade) {
    if($grade >= 80)
    {
        $top = $top + 1;
    }
    else if($grade <= 20)
    {
        $bottom = $bottom + 1;
    }
    $total += $grade;
 /* write your code here, required to iterate over grades and calculate total
 and top/bottom 20%
 - accumulate all grades into a total ($total)
 - if statement needed to if grade is less than or equal to 20,
 then add 1 to $bottom counter
 - if statement needed to if grade is greater than or equal to 80,
 then add 1 to $top counter */
}
$average = $total / $count;
echo "Class average: $average <br />";
echo "Number of students in the bottom 20%: $bottom <br />";
echo "Number of students in the top 20%: $top <br />"
//Calculate an average of all grades (total divided by count);
//Output the following (see screen capture)
?>
</body>
</html>