<?php

$hostname="localhost";
$username="root";
$password="";
$db_name="records";

$conn = mysqli_connect($hostname,$username,$password,$db_name);
$alert='<div class="alert-success">
<span>Thankyou for contacting us</span>
</div>' ;
$alert1='<div class="alert-error">
<span>Email already exists</span>
</div>';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $sql = "SELECT * FROM contact_table WHERE email = '$email'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);

  if($num > 0){
      echo $alert1;
  }
  else{
      $insert ="INSERT INTO contact_table(name,email,message) VALUES('$name','$email','$message')";
      mysqli_query($conn,$insert);
      echo $alert;
  }
}
?>