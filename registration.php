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
else{
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $title=$_POST['title'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $phone_number=$_POST['phone_number'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];
                if($confirm_password===$password){
            $querry="INSERT INTO registration VALUES(?,?,?,?,?,?,'')";
            $stmt =$connection->prepare($querry);
            $stmt-> bind_param("ssssss",$first_name,$last_name,$email,$password,$title,$phone_number);
            $stmt-> execute();
            header("Location: login.php");
        }
}
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Orbitron:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuLNguRJlcleGuri-h9hQ5ZsPuygm2jKJ6Lg&s">
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <div class="wrapper">
        <div class="form_section">
            <form action="registration.php" method='post'>
                <h2 style="text-align: center;">create new account</h2>
                <label for="title">Select Your Title:</label>
                <div class="gender">
                <div class="radio-option">
                    <input type="radio" id="mr" name="title" value="Mr">
                    <label for="mr">Mr</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="mrs" name="title" value="Mrs">
                    <label for="mrs">Mrs</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="ms" name="title" value="Ms">
                    <label for="ms">Ms</label>
                </div>
                </div>
                <div class="name">
                    <div class="first_name">
                        <label for="First_name"></label>
                        <input type="text" id="first_name" name="first_name" placeholder="First name">
                    </div>
                    <div class="last_name">
                        <label for="last_name"></label>
                        <input type="text" id="last_name" name="last_name" placeholder="last name">
                    </div>
                </div>
                <div class="email address">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <label for="country_code"></label>
                <div class="dropdown-container">
                    <div class="country-dropdown" id="country_code">
                        <span>+254</span> 
                        <img src="data:image/png;base64,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" id="kenya_flag">
                    </div>
                    
                    <input type="tel" id="phone_number" class="phone-input" name="phone_number" placeholder="Enter phone number" required>
                </div>
                <div class="password-container">
                    <label for="password"></label>
                    <input type="password" id="password"class="password-input" name="password" placeholder=" Enter password" required>
                    <div class="disclaimer-message">
                        <p>Password must be more than 20 characters and include at least one special character(*,!,;)</p>
                    </div>
                    <label for="confirm-password"></label>
                    <input type="password" id="confirm-password" class="confirm-password-input" name="confirm_password" placeholder="confirm password"required>
                </div>
                <div class="terms-and-conditions">
                    <input type="checkbox" required>
                    I agree to the<a href="termsandconditions.html"> terms and conditions</a> as well as to our <a href="termsandconditions.html"> Policy.</a>
                </div>
                <div >
                    <p id="log-in">Already have an account?<a href="login.php">Sign in</a></p>
                </div>
                <!--submitt button-->
                <div class="submit">
                    <button type="submit" id="btn">Sign up</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
