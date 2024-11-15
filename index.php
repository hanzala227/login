<?php

if (isset($_POST['btn'])) {
    $con = mysqli_connect("localhost", "root", "", "users");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['ConfirmPassword'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $country = $_POST['country'];

    if ($password !== $confirmpassword) {
        echo "<script>alert('Please enter the correct password in the confirm password field');</script>";
    } else {

$querry= "INSERT INTO `usersdata`(`username`, `email`, `password`, `age`, `gender`, `country`) values ('$username','$email','$password','$age','$gender','$country')";

mysqli_query($con, $querry);

"<script>        window.location.href = 'login.html';
</script>";
    };
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <form action="" class="registration-form" method="post">
            <h2>Registration</h2>
            <br>
            <input type="text" placeholder="Username" name="username">
            <br>
            <input type="email" placeholder="Email" name="email">
            <br>
            <input type="password" placeholder="Password" name="password">
            <br>
            <input type="password" placeholder="Confirm-Password" name="ConfirmPassword">
            <br>
            <input type="number" placeholder="Age" name="age">
            <br><br>
            <label for="gender">Male</label>  <input type="radio" name="gender" value="male" class="gender">
           <label for="gender">Female</label> <input type="radio" name="gender" value="female" class="gender">
           <br><br>
           <span for="country">Select Your Country</span>
           <select class="selectpicker countrypicker" name="country" data-flag="true" >
            <option value="pakistan">pakistan</option>
           </select>
           <br><br>
           <button type="submit" name="btn">Register</button>
           <br><br>
           <span>Already Have an Account? <a href="http://localhost/firstphp/login.php">Login</a></span>
        </form>
    </div>


    <script src="//cdn.tutorialjinni.com/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script>
    <script>
                         var colors=[
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "red",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(255, 251, 0)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
    "rgb(0, 255, 221)",
]
document.addEventListener("mousemove",()=>{
var circle1=document.querySelector(".circle1")
var circle2=document.querySelector(".circle2")
var circle3=document.querySelector(".circle3")


colors.push(colors[0])
colors.shift()
circle1.style.backgroundColor=colors[20]
circle2.style.backgroundColor=colors[37]
circle3.style.backgroundColor=colors[0]
})
    </script>
</body>
</html>