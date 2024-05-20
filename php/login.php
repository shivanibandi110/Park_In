
<?php 
   include '../config/database.php';
   
?>

<!-- <?php 
    session_start();

    
    if (isset($_POST['login'])) {
        $deleteId = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_SPECIAL_CHARS);

        $email = mysqli_real_escape_string($connection, filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
        $password = mysqli_real_escape_string($connection, filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS)); 
  
        $sql_query = "SELECT user_Name FROM sign_up WHERE email='$email' and password='$password'";
        $result = mysqli_query($connection, $sql_query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($row['user_Name']) {
            $_SESSION['user'] = $row['user_Name'];
            header('Location: ../html/index.html');
        } else {
            echo '<script>alert("User is not registered")</script>';
        }
        
    }
?> -->
<?php 
    // session_start();

    // Database connection parameters
    $serverName = "localhost";
    $userName = "root";
    $password = " "; // Assuming no password is set
    $dbName = "rr_parkings.sql";

    // Create connection
    $connection = mysqli_connect($serverName, $userName, '', $dbName);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['login'])) {
        $deleteId = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_SPECIAL_CHARS);

        $email = mysqli_real_escape_string($connection, filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
        $password = mysqli_real_escape_string($connection, filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS)); 
  
        $sql_query = "SELECT user_Name FROM sign_up WHERE email='$email' and password='$password'";
        $result = mysqli_query($connection, $sql_query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($row['user_Name']) {
            $_SESSION['user'] = $row['user_Name'];
            header('Location: ../html/index.html');
        } else {
            echo '<script>alert("User is not registered")</script>';
        }
    }

    // Close connection
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Park_In - Login</title>
</head>

<body>
    <!-- header -->
     <header>
        <img src="../images/logo.jpg" class="logo">
        <nav>
            <ul class="links">
                <li class="links"><a href="../html/index.html">Home</a></li>
                <li class="links"><a href="../html/FAQ.html">FAQ's</a></li>
                <li class="links"><a href="../html/AboutUs.html">About us </a></li>
                <li class="links"><a href="../html/privacypolicy.html">Privacy policy </a></li>
                <li class="links"><a href="../html/reviews.html">Customer reviews </a></li>
                <li class="links"><a href="../html/contact.html">Contact us</a></li>
                <li class="links"><a href="../html/offer.html">Offers</a></li>
                <li class="links"><a href="../php/location.php">Locations</a></li>
            </ul>
        </nav>
        <!-- <a href="./login.php" class="account">
           <button class="btn-primary"> Log in </button>
        </a> --> 
        <div></div>
    </header>
    <!-- end: header -->

    <div class="container login-container">
        <div class="card">
            <div class="card-body login-card">
                <div class="form-container">
                    <div class="help-link-container">
                        <a href="./help.php">Need help?</a>
                    </div>
                    <div class="row form-row">
                        <h4 class="h4">Welcome to Park_In Parking</h4>
                        <p class="subtitle">
                            Sign in to your account
                        </p>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="mb-3 form-input-container">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3 form-input-container">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3 forgot-pw-container">
                                <a href="#" class="forgot-pw">Forgot password?</a>
                            </div>
                            <div class="row btn-container">
                                <input type="submit" class="btn btn-primary login-btn" name="login" value="Sign in">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="register-container">
                    <h5 class="h5">Don't have an account?</h5>
                    <a href="../html/sign.html">   <button type="submit" class="btn btn-primary">Sign up</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="copy">
        <p> &copy; COPYRIGHT @Park_In parking.com | 2020 - 2022 </p>
    </div>
    <!-- end: footer -->
</body>

</html>
