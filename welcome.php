<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav>
        <a href="" target="_blank">HOME</a>
        <a href="">ABOUT US</a>
        <a href="" target="_blank">CATEGORIES</a>
        <a href="">CONTACT US</a>
        
        <div class="yo">
            <a href="">LOGIN/REGISTER</a>
        </div>
    </nav>

<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</body>
</html>