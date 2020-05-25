<?php
    if(!isset($username)) {
        $username = '';
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
    <title> PHP Form Validation</title>
</head>
<body class="gg">

<div>

<form class="form-signin" action="results.php" method="POST">
    <h1>
        Registration
    </h1>
    <input class="form-control" placeholder="Email" type="text" name="user_email" > <br />
    <?php if(isset($email_error)) {  ?>
        <p><?php echo $email_error ?> </p>
    <?php } ?>

    <input class="form-control" placeholder="Firstname" type="text" > <br/>
    <input class="form-control" placeholder="Lastname" type="text" > <br />


    <input class="form-control" placeholder="Username" type="text" name="user_name" value="<?php echo htmlspecialchars($username) ?>"> <br />

    <?php if(isset($name_error)) {  ?>
    <p><?php echo $name_error ?> </p>
    <?php } ?>

    <input class="form-control" placeholder="Password" type="password" name="user_password"> <br />

    <?php if(isset($password_error)) {  ?>
        <p><?php echo $password_error ?> </p>
    <?php } ?>

    <input class="form-control" placeholder="Confirm password" type="password" name="user_cpassword"> <br />

    <?php if(isset($cpassword_error)){  ?>
    <p><?php echo $cpassword_error ?> </p>
    <?php } ?>

    <input class="form-control"  class="register_button" type="submit" value="REGISTER">

    </div>
</form>
</body>
</html>


