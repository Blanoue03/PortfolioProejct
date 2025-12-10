<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>title</title>
        <link rel="stylesheet" href="/index.css">
        <link rel="stylesheet" href="week1.css">
    </head>
    <body>

    <?php
    echo "<script>";
    echo "function goto(path)";
    echo "{";
    echo "window.location = path";
    echo "}";
    echo "</script>";
    echo "<img id=\"title\" src=\"/assets/title.png\">";
    echo "<h1 id=\"titleMsg\">Still a work in Progress!</h1>";
    //This is a div to hold all of the code for the assignment, purely for making formatting easier.
    echo "<div id=\"flexContainer2\">";
    echo "<h1>Week #1 HTML color Table</h1>";
    echo "<div style=\"background-color:blue;\"></div>";
    echo "<p>Blue</p>";
    echo "<div style=\"background-color:red;\"></div>";
    echo "<p>Red</p>";
    echo "<div style=\"background-color:green;\"></div>";
    echo "<p style=\"margin-bottom: 30px;\">Green</p>";
    echo "<p>Programmed by-\"Brandon Lanoue\"</p>";
    echo "</div>";
    echo "<button onclick=\"goto('week1.html')\"style=\"bottom:5%\">Back</button>";
 
    ?>
    </body>
</html>