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
    echo "<div id=\"flexContainer1\">";
    echo "<h1>Seven Natural Wonders of Canada</h1>";
    echo "<ul>";
    echo "<li>Niagara Falls, Ontario</li>";
    echo "<li>Bay of Fundy, the Maritimes</li>";
    echo "<li>Rocky Mountains, British Columbia / Alberta</li>";
    echo "<li>Nahanni National Park, Northwest Territories</li>";
    echo "<li>Gros Morne National Park, Newfoundland</li>";
    echo "<li>Dinosaur Provincial Park, Alberta</li>";
    echo "<li>Northern Lights</li>";
    echo "</ul>";
    echo "<br />";
    echo "<p style=\" font-style: italic; margin-bottom: 2px \">Images:</p>";
    echo "<img src=\"niagarafalls.jpg\">";
    echo "<img src=\"rockies.jpg\">";
    echo "<img src=\"northernlights.jpg\">";
    echo "<p>Programmed by - \"Brandon Lanoue\"</p>";
    echo "</div>";
    echo "<button onclick=\"goto('week1.html')\" style=\"bottom: 5%\">Back</button>";
 
    ?>
    </body>
</html>