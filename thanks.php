<?php


$userlogin = 'admin';
$userpass = 'admin';


if(isset($_POST['User_name'])) {
    if ($_POST['User_name']==$userlogin && $_POST ['User_password'] ==$userpass) {
        session_start();$_SESSION['logged_user']=$userlogin; header("location:upload.php"); }

    else{echo "enter correct user";}
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"?>
    <link rel="stylesheet"  href="main.css">
    <title> Login </title>
</head>
<body class="gg">

<div>

    <form class="form-signin" method="POST">
        <h1>
            Login
        </h1>

        <input class="form-control" placeholder="Username" type="text" name="User_name" > <br />


        <input class="form-control" placeholder="Password" type="password" name="User_password"> <br />


        <input class="form-control" onClick="document.location.href='upload.php'" class="login_button" type="submit" value="Login">


</div>
</form>
</body>
</html>





