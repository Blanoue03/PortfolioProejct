<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
$query = "CREATE TABLE IF NOT EXISTS vacation_bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20),
    destination VARCHAR(100),
    travel_date DATE,
    trip_cost DECIMAL(10,2)
)";
         


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="inserttable.php" method="post">
    <fieldset>
        <legend>Vacation info</legend>
        Full Name: <input type="text" name="full_name" required><br><br>
        Email address: <input type="email" name="email" required><br><br>
        Phone Number: <input type="text" name="phone" required><br><br>
        Travelling to: <input type="text" name="destination" required><br><br>
        Date travelling: <input type="date" name="travel_date" required><br><br>
        Cost of trip: <input type="number" name="trip_cost" step="0.01" required><br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>
<?php 
if (isset($_POST['action']) && $_POST['action'] == "update")

{

?>
<form action="updatetable.php" method="post">
    <fieldset>
        <?php 
        $updateEmail = $_POST['updateEmail'];
        echo "<input type='hidden' name='updateEmail' value='$updateEmail'>";
        echo "<legend>Updating vacation info for $updateEmail</legend>";
        echo "Full Name: <input type='text' name='full_name' required><br><br>";
        echo "Phone Number: <input type='text'name='phone' required><br><br>";
        echo "Travelling to: <input type='text' name='destination' required><br><br>";
        echo "Date travelling: <input type='date' name='travel_date' required><br><br>";
        echo "Cost of trip: <input type='number' name='trip_cost' step='0.01' required><br><br>";
        echo "<input type='submit' value='Submit'>";
        ?>
    </fieldset>
</form>
<?php 
}
elseif (isset($_POST['action']) && $_POST['action'] == "delete")
{
    $updateEmail = $_POST['updateEmail'];
    $query = "DELETE FROM vacation_bookings WHERE email = '$updateEmail'";
    mysqli_query($dbc, $query);
}

?>
<table>
    <thead>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Traveling to</th>
        <th>Departing on</th>
        <th>Total Cost</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
        $query = "SELECT * FROM vacation_bookings";
        $result = mysqli_query($dbc, $query);
        if (!$result) die("The query could not be executed!");

        while ($row = mysqli_fetch_array($result)){


        echo "<tr>";
        echo "<form action='createtable.php' method='post'>";
            echo "<td> {$row['full_name']}</td>";
            echo "<td> <input type='hidden' name='updateEmail' value='{$row['email']}'> {$row['email']}</td>";
            echo "<td> {$row['phone']}</td>";
            echo "<td> {$row['destination']}</td>";
            echo "<td> {$row['travel_date']}</td>";
            echo "<td> {$row['trip_cost']}</td>";
            echo "<td> <label>Update</label>";
            echo "<input type='radio'name='action' value='update'>";
            echo "<label>Delete</label>";
            echo "<input type='radio' name='action' value='delete'>";
            echo "<input type='submit' value='submit'>";
            echo "</td>";
        echo "</form>";
        echo "</tr>";
        }

    mysqli_close($dbc);
        ?>
    </tbody>

</table>

</body>
</html>