<?php

require_once('db.php');
require_once('authView.php');

session_start();

$view = new AuthView();
$view->show('header');

$fields = array(
    'userName'=>'User Name',
    'firstName'=>'First Name',
    'lastName'=>'Last Name',
    'email'=>'Email',
    'homeZipcode'=>'Home Zip Code',
    'userPassword'=>'Desired Password'
);

if(isset($_POST['submit'])){

    $values = array();

    //For each of the fields we want, check if the field was posted, and if so trim it and use it. Otherwise use NULL.
    foreach($fields AS $field=>$label){
        $values[$field] = isset($_POST[$field]) ? trim($_POST[$field]) : NULL;
    }
    $errors = array();
    /*Title and Platform are required. strlen will return the string's length */
    if(!isset($values['userName']) || !strlen($values['userName'])){
        $errors['userName'] = 'Please Enter a User Name';
    }
    if(!isset($values['email']) || !strlen($values['email'])){
        $errors['email'] = 'Please Enter an Email address';
    }


    //If there are any errors, display the form again. Otherwise, insert the data
    if(!count($errors)){
        $sql = "INSERT INTO users(userName, firstName, lastName, email, homeZipcode, userPassword)
        VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);

        $result = $stmt->execute(array_values($values));
    }

    $pass = $values[5];
    $sql="INSERT INTO users(userSalt)
        VALUE $unique_id";
    $sql="UPDATE users SET userPassword = MD5(CONCAT(userSalt, $pass));";

}
?>

<?php
//If the form was submitted and an insert was attempted, display a message.
if(isset($result)){
    if($result){
        echo '<b>Thanks for Signing up  with InterestPoint!</b>';
    }else{
        echo '<b>Unable to Signup for the following reasons: </b>';
        print '<pre>'.print_r($stmt->errorInfo(), true);
    }
}
?>

<h1>Your Information</h1>
<form method="post" action="add.php">
    <?php
    foreach($fields AS $field=>$label){

        echo "<label>{$label}:";
        //If the field had an error, display it.
        if(isset($errors[$field])){
            echo ' <span class="error">'.$errors[$field].'</span>';
        }
        //Echo the actual input. If the form is being displayed with errors, we'll have a value to fill in from the user's previous submission.
        echo '<input type="text" name="'.$field.'"';
        if(isset($values[$field])){
            echo ' value="'.$values[$field].'"';
        }
        echo '/></label><br /><br />';
    }


    ?>
    <input type="submit" name="submit" value="Sign Up!" />
</form>

