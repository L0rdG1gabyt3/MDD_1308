<?php
require_once "db.php";
require_once "models/userModel.php";
require_once "views/userView.php";

sec_session_start();

$model = new userModel(MY_DSN, MY_USER, MY_PASS);
$view = new userView();
$view->showHeader("Rollercoaster Database");
$view->showUserDetails($model->getUserDetails($_GET["id"]));
$view->showFooter();

?>