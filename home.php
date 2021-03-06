<?php

require_once "db.php";
require_once "models/userModel.php";
require_once "models/authModel.php";
require_once "views/userView.php";
require_once "views/authView.php";

$model = new authModel(MY_DSN, MY_USER, MY_PASS);

$model = new userModel(MY_DSN, MY_USER, MY_PASS);
$view = new userView();

sec_session_start();

$user = NULL;

$contentPage = 'showLocation';


$view->show('header', '');
$view->show($contentPage, $user);
$view->show('footer', '');

?>