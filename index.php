<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Car World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 10px 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
    
    <div class="container">
        <h2>Welcome to Car World</h2>
        <p>Explore the world of automobiles, stay updated on the latest trends, and discover the future of mobility.</p>
    </div>
</body>
</html>
