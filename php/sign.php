

<?php
    include '../config/database.php'; 
?>

<?php

    $user_Name = $_POST['Username'];
    $name = $_POST['Name'];
    $email = $_POST['E-mail'];
    $confirmPassword = $_POST['Confirm-Password'];
    $mobileNo = $_POST['Mobile-Number'];

    // $user_Name = $_POST['Username'];
    // $name = $_POST['Name'];
    // $email = $_POST['E-mail'];
    // $confirmPassword = $_POST['Confirm-Password'];
    // $mobileNo = $_POST['Mobile-Number'];
    
    // $user_Name = $_POST['shivu110'];
    // $name = $_POST['Shivani'];
    // $email = $_POST['bandishivani082@gmail.com'];
    // $confirmPassword = $_POST['abc123'];
    // $mobileNo = $_POST['9502674953'];

    // Database connection

    $sereverName = "localhost";
    $userName = "root";
    $password = " ";
    $dbName = "rr_parkings.sql";

    $con = new mysqli( $sereverName,$userName,  '', $dbName);

    //check conection
    if($con->connect_error)
    {
        die("Connection Failed : ". $con -> connect_error);
    }
    else 
    {
		$stmt = $con->prepare("insert into  sign_up(user_Name , name , email , password , mobile_Number ) values(?, ?, ?, ?, ? )");
		$stmt->bind_param("sssss", $user_Name  , $name  , $email  , $confirmPassword , $mobileNo );
		// $stmt->execute();

        // if ($stmt->execute()) {
        //     echo "<h1>...Your details added succesfully...</h1>";
        // } else {
        //     echo "Error: " . $stmt->error;
        // }
        
		echo "<h1>...Your details added succesfully...</h1>";
		$stmt->close();
		$con->close();
	}

   

?>


<?php

// Establish Database Connection
$serverName = "localhost";
$userName = "root";
$password = " "; // Your MySQL password
$dbName = "rr_parkings.sql";

// Create connection
$conn = new mysqli($serverName, $userName, '', $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    // $user_Name = $_POST['shivani110'];
    // $name = $_POST['Shivani Bandi'];
    // $email = $_POST['admin@gmail.com'];
    // $confirmPassword = $_POST['0000'];
    // $mobileNo = $_POST['9502674953'];

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO sign_up (user_Name, name, email, password, mobile_Number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $user_Name, $name, $email, $confirmPassword, $mobileNo);
    // $stmt->execute();

    // if ($stmt->affected_rows > 0) {
    //     echo "User added successfully!";
    // } else {
    //     echo "Error:  " . $stmt->error;
    // }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?> 
