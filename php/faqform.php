<?php
$Username = filter_input(INPUT_POST, 'User_Name');
$Email = filter_input(INPUT_POST, 'User_Email');
$Phone = filter_input(INPUT_POST, 'User_Phone');
$Question = filter_input(INPUT_POST, 'User_Question');

$host = "localhost";
$dbusername = "root";
$dbpassword = " ";
$dbname = "rr_parkings.sql";
// Create connection
$conn = new mysqli ($host, $dbusername, '', $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO faqtable(Username,Email,Phone,Question)
values ('$Username','$Email','$Phone','$Question')";
if ($conn->query($sql)){
echo"<h1>New record is inserted sucessfully
  <br> Thank you for your question we will reach you soon...</h1>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>

<!-- $dbpassword -->