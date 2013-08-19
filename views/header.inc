<!DOCTYPE html>
<html>
<head>
    <title>InterestPoint</title>
</head>
<body>

<?php
require_once "db.php";
require_once "authModel.php";
require_once "authView.php";

//session_start();

if (isset($_SESSION['userInfo'])){
    echo '<a class ="logOutText" href="logout.php">Log Out</a></p>', '<ul><li><a class ="homeText" href="index.php">Home</a></li><li><a class ="view" href="index.php">View Coasters</a></li><li><a class ="addText" href="add.php">Add Coaster</a></li>';
} //else{
  //  echo '<p class="loginText">Welcome! Please <a class="login" href="index2.php">Login</a><br /><br />', '<a class ="homeText" href="index2.php">Home</a></p>';
//}
?>
</body>
</html>