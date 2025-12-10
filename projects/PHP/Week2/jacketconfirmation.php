<!DOCTYPE html>
<html>
<head>
    <title>Spring Retreat Jacket Confirmation</title>
</head>
<body style="background-color: rgb(229,243,247);">
    <h1>Company Spring Retreat</h1>
    <h3>Jacket Order: Confirmation</h3>
    <?php
    $colour = $_POST['color'];
    $gender = $_POST['gender'];
    $jacketsize = $_POST['size'];

    echo "<h3>For you, we will order a jacket in $colour and size $jacketsize for a $gender employee.</h3>";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "Programmed by: Brandon Lanoue";
    ?>
</body>
</html>