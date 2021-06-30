<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<?php 
    include 'header.php';
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .dsn{ font: 14px sans-serif; text-align: center;
               background: radial-gradient(#ffffff , #faadbd);
         }
    </style>
</head>
<body>
  <!--  <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                <img src="images/logo.jpg" alt="" / width="125px">
            </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product1.php">Products</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="contact form.php">Contacts</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    
                    
                </ul>
            </nav>
            
            <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    </div> -->
    <div class="dsn">
        <br>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Pharmacy.</h1>
        <br>
        <img src="images/pharmacy1.jpg" alt="" width="100%" height="100%">
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    </div>
    
</body>
</html>

<?php 
    include 'footer.php';
 ?>