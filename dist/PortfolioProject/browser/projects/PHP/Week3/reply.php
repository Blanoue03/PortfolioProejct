<!DOCTYPE html>
<html>
<head><title>Register Form</title></head>
<body>
<h2>ABC Web Site Registration Reply Page</h2>
<h3>Your Information has been processed</h3>


<?php
$userName = $_POST['username'];
$region = $_POST['region'];

if (empty($userName)) { 
    print("You did not enter a user name.\r\n");
    print("Please return to the form and re-enter your information");
}
else
{
    print("thank you $userName.\r\n");
    print("you live in the lovely region of: $region");
}

?>
</em></p>
</body>
</html>