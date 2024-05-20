<!-- <?php

    $name = $_POST['cardholder'];
    $cNumber = $_POST['card-number'];
    $amount = $_POST['Pamount'];
    $expMonth = $_POST['months'];
    $expYear = $_POST['years'];
    $cvvNo = $_POST['CVV'];


    // Database connection

    $sereverName = "localhost";
    $userName = "root";
    $password = " ";
    $dbName = "rr_parkings.sql";

    $con = new mysqli( $sereverName, $userName,'', $dbName);

    //check conection
    if($con->connect_error)
    {
        die("Connection Failed : ". $con -> connect_error);
    }
    else 
    {
		$stmt = $con->prepare("insert into  payment(cardHolder , cardNumber , amount , month , year , cvv ) values(?, ?, ?, ? ,? ,?)");
		$stmt->bind_param("sidsii", $name,  $cNumber, $amount,  $expMonth , $expYear , $cvvNo);
		$stmt->execute();
        echo "<h1>...Your payment done successfully...</h1>";
        
        // if ($stmt->execute()) {
        //     echo "<h1>Your payment was done successfully</h1>";
        // } else {
        //     echo "Error: " . $stmt->error; // Display the specific error message
        // }
		
		$stmt->close();
		$con->close();
	}
?> -->

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['cardholder'];
        $cNumber = $_POST['card-number'];
        $amount = $_POST['Pamount'];
        $expMonth = $_POST['months'];
        $expYear = $_POST['years'];
        $cvvNo = $_POST['CVV'];

        // Database connection
        $serverName = "localhost";
        $userName = "root";
        $password = " "; // <-- Provide your MySQL password here
        $dbName = "rr_parkings.sql"; // <-- Database name without the .sql extension

        $con = new mysqli($serverName, $userName, ' ', $dbName);
        // echo "<h1>...Your payment done successfully...</h1>";

        // Check connection
        if ($con->connect_error) {
            die("Connection Failed: " . $con->connect_error);
            
        } else {
            $stmt = $con->prepare("INSERT INTO payment (cardHolder, cardNumber, amount, month, year, cvv) VALUES (?, ?, ?, ?, ?, ?)");
            
            // Check if prepare() succeeded
            if ($stmt === false) {
                die("Prepare failed: " . $con->error);
            }
            
            $stmt->bind_param("sidsii", $name, $cNumber, $amount, $expMonth, $expYear, $cvvNo);

            // if ($stmt->execute()) {
            //     echo "<h1>Your payment was done successfully</h1>";
            // } else {
            //     echo "Error: " . $stmt->error; // Display the specific error message
            // }
            // echo "<h1>...Your payment done successfully...</h1>";
            $stmt->close();
            $con->close();
        }
    }
?>
