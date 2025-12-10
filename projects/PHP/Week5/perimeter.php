<!DOCTYPE html>
<html>
<head>
    <title>Perimeter Calculation</title>
</head>
<body>
    <h1>Perimeter Calculation - by Brandon Lanoue</h1>
    <?php
    /*
     * #1 YOUR CODE GOES HERE
     */
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $length = $_POST['length'];
        $width = $_POST['width'];

    // function definition
    // calculate perimeter of rectangle
    // p = 2 * (l + w) 
    /*
     * #2 YOUR CODE GOES HERE
     */
    function getPerimeter($length, $width) {
        
        return (2 *($length + $width));
       }
    
    /*
     * #3 YOUR CODE GOES HERE
     */ 
    echo "Hi $name,<br>";
    echo "The perimeter of a rectangle of length $length units and width $width units is: ";
    echo getPerimeter($length, $width) ;
    echo " units <br><hr>";
    
    /*
     * #4 YOUR CODE GOES HERE
     */
    echo "The current date is " . date('l F jS, Y');
    } else {
    ?>
    
    <form action="perimeter.php" method="post">
        Enter your Name:<br>
        <input type="text" size="15" id="name" name="name"/><br/>
        Enter a Length:<br>
        <input type="text" size="15" id="length" name="length"/><br/>
        Enter a Width:<br>
        <input type="text" size="15" id="width" name="width"/><br/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
    
    <?php
    }
    ?>
</body>
</html>