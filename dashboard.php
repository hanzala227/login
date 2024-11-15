<?php
session_start();  // Start the session
// Access the username stored in the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            width: 100%;
            height:100vh;
            background-color:#151515;
color:white;
        }
        *::selection{
            background-color:  rgb(0, 245, 221);
        }
        span{
            color:yellow;
            font-size:1.2rem;
        }
    </style>
</head>
<body>
    <h1>Hello, <span><?php echo htmlspecialchars($username); ?></span>!</h1>

</body>
</html>
