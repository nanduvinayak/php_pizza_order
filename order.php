<?php
// Database connection
$host = "172.31.22.43";
$username = "Vinayak200549292";
$password = "ewbAg3_AQ9";
$dbname = "Vinayak200549292";

$connection = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $pcode = $_POST["pcode"];
    $pizza_type = $_POST["pizza_type"];
    $pizza_size = $_POST["pizza_size"];
    $toppingone = $_POST["toppingone"];
    $toppingtwo = $_POST["toppingtwo"];
    $payment_type = $_POST["payment_type"];

    // Insert order into database
    $sql = "INSERT INTO orders (first_name, last_name, email, address1, address2, postalcode, pizza_type, pizza_size, toppingone, toppingtwo, payment_type)
            VALUES ('$fname', '$lname', '$email', '$address1', '$address2', '$pcode', '$pizza_type', '$pizza_size', '$toppingone', '$toppingtwo', '$payment_type')";

    if ($connection->query($sql) === TRUE) {
        echo "Order received!<br>";
        echo "First Name: $fname<br>";
        echo "Last Name: $lname<br>";
        echo "Email: $email<br>";
        echo "Address Line 1: $address1<br>";
        echo "Address Line 2: $address2<br>";
        echo "Postal Code: $pcode<br>";
        echo "Pizza Type: $pizza_type<br>";
        echo "Pizza Size: $pizza_size<br>";
        echo "Layer one Toppings: $toppingone<br>";
        echo "Layer two Toppings: $toppingtwo<br>";
        echo "Payment Type: $payment_type";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
$connection->close();
?>
