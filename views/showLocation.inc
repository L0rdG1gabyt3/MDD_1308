<?php

require_once "models/authModel.php";
require_once "authView.php";

date_default_timezone_set('America/New_York');
echo "Hello World! It's", date("g:i A"), " on ", date("F j Y");
echo ($data['id']);
?>