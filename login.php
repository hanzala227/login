<?php
$con = mysqli_connect("localhost", "root", "", "users"); // Database connection

if (isset($_POST['loginbtn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Correct query with quotes around variables for login check
    $query = "SELECT * FROM usersdata WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    // Check if any rows matched the login query
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $row = mysqli_fetch_assoc($result);

        // Get the username from the result
        $username = $row['username'];

        // Optionally, store the username in a session for later use
        session_start(); // Start the session
        $_SESSION['username'] = $username;

        // Redirect to the dashboard page with a success message
        echo "<script>alert('Login Successful'); window.location.href = 'dashboard.php';</script>";
    } else {
        echo "<script>alert('Incorrect Email or Password');</script>";
    }
}

mysqli_close($con); // Close the database connection
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="circle1"></div>
        <div class="circle2" style="    top: 49%;
"></div>
        <div class="circle3" style="    top: 19%;
"></div>
    <form action="" method="post" class="login">
        <h2>Login</h2>
        <input type="email" placeholder="Email" name="email">
        <br>
        <input type="password" placeholder="Password"name="password">
        <br>
        <button type="submit" name="loginbtn">Login</button>
        <br><br>
        <span>Not Have an Account? <a href="http://localhost/firstphp/index.php">Sing-Up</a></span>

    </form></div>


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