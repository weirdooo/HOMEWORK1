<?php
 //$username =$_POST ['user_name'];

 //$password =$_POST ['user_password'];

$email= filter_input(INPUT_POST,'user_email');
$username = filter_input (INPUT_POST,'user_name');
$password = filter_input (INPUT_POST,'user_password');
$cpassword = filter_input(INPUT_POST, 'user_cpassword');

if(empty($email)) {
    $email_error ='Please insert your valid Email';
} elseif (filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
    $email_error='Your email is not valid';
}

 if(empty($username)) {
     $name_error = 'Please insert your username';
 } elseif(strlen($username) < 6 ) {
     $name_error = 'Your username needs to have a minimum 6 letters';
 }

 if (empty($password)) {
    $password_error = 'Please insert your password';
 }
elseif(strlen($password) < 6 ){
    $password_error = 'Your password needs to have a minimum lenght of 6';
}
 if(empty($cpassword)) {
     $cpassword_error = 'Please repeat your password';
 }elseif ($cpassword != $password)  {
     $cpassword_error ='Your passwords does not match';
}


 if (empty($name_error) && empty($password_error) && empty($cpassword_error)){
    header('location:thanks.php');
 } else {
    include ('index.php');
 }
?>

