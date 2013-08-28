<!DOCTYPE html>
<html>
<head>
    <title>InterestPoint</title>
    <link rel="stylesheet" href="css/foundation.css">
</head>
<body>
<!-- <img src="/img/logo2.png"/>-->
<a href="index.php"><img src="img/logo2.png"></a>
<?php
require_once "db.php";
require_once "models/authModel.php";
require_once "views/authView.php";

if (isset($_SESSION['userInfo'])){
    echo'<table>
            <tr>
                <td><a href="logout.php" class="small button">Logout</a></td>
                <td><a href="home.php" class="small button">Stuff to See</a></td>
            </tr>
        </table>';
    //'<ul><li><a href="home.php" class="small button">Stuff to See</a></li>', '<li><a href="logout.php" class="small button">Logout</a></li></ul>';
}
?>
</body>
</html>