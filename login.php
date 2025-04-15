<?php
//connect to php
$servername="localhost";
$username="root";
$password="";
$dbname="go shoply e-commerce";
//create connection
$connection=new mysqli($servername,$username,$password,$dbname);
//check connection
if($connection->connect_error){
    die("Connection failed: ".$connection->connect_error);
}
if($_SERVER['REQUEST_METHOD']==="POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $querry="SELECT * FROM registration where email= '$email' and password='$password'";
    $result=mysqli_query($connection,$querry);
    header("Location:home.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Orbitron:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuLNguRJlcleGuri-h9hQ5ZsPuygm2jKJ6Lg&s">
</head>
<body>
    <div class="login">
        <img src="upload/log in page.jpeg">
    <div class="login-container">
        <h2 style="color: #406E8E; font-style: italic;">Shop 'til you drop... from the comfort of your couch!</h2>
        <form action="login.php" method="post">
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit" class="login-button">Login</button>

            <div class="sign-up">
                <p ><span style="color:black;">New to go shoply?</span><a href="registration.html" target="_blank"><span style="font-weight: bold;">Sign up</span></a></p>
            </div>
        </form>
    </div>
    </div>

</body>
</html>