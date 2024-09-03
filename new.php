<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registercs.css" />
    <title>Register</title>
  </head>




  <body>


  <?php

$hostname="localhost";
$username="root";
$password="";
$db_name="testt";

$conn = mysqli_connect($hostname,$username,$password,$db_name);


$alert ='<div class="alert-success">
<span>Registered Successfully......Thankyouu</span>
</div>' ;
$alert1 ='<div class="alert-error">
<span>Something went wrong Please try again</span>
</div>' ;

if(isset($_POST['submit'])){
    $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $gender = $_POST["gender"];

    $sql = "SELECT * FROM registrationn WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);

    if($num > 0){
         echo $alert1;
    }
    else{
        $insert = "INSERT INTO `registrationn` ( `firstname`,`lastname`,`email`,`number`, 
        `password`,`cpassword`,`gender`) VALUES ('$firstname','$lastname','$email','$number','$password',$cpassword,'$gender')";
        mysqli_query($conn,$insert);
        echo'<script>alert("Registered succesfully")</script>';
    }
}

?>










<section class="header">
        <nav>
            <a href="new.php"><img src="images\logo.png"></a>
            <div class="nav-links" id="navLinks">
               
                
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                    <li><a href="new.php">REGISTER</a></li>
                    <li><a href="membership.html">MEMBERSHIP</a></li>
                </ul>
            </div>
            </nav>
            <div class="container">
                <div class="title">REGISTRATION</div>

                <div class="content">
                    <form action="" method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details"> First Name</span>
                                <input type="text" id="firstname" name="firstname" placeholder="Enter your First Name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Last Name</span>
                                <input type="text" id="lastname" name="lastname" placeholder="Enter your Last Name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="text" id="email"  name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="text" id="number" name="number" placeholder="Enter your number" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="text" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Confirm Password</span>
                                <input type="password" placeholder="Confirm Password"  id="cpassword" name="cpassword" >
                            </div>
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" value="male" id="dot-1">
                            <input type="radio" name="gender" value="female" id="dot-2">
                            <input type="radio" name="gender" value="others" id="dot-3">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                                <label for="dot-3">
                                    <span class="dot three"></span>
                                    <span class="gender">Prefer not to say</span>
                                </label>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Register" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>      <br><br><br><br>
        <div class="copyright">
            <h1>© ROCK THE GYM | Designed by Abhishek</h1><br>
        </div>
  </body>
</html>



