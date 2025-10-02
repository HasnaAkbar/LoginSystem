<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        .body-bg{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #6f88d8, #d17272);
            color: #333;
        }
    </style>
    <title>User</title>
</head>
<body class="body-bg">
    <div class="container">
        <h1>Welcome, <?= $_SESSION['user_name'];?></h1>
        <p style="font-size: 34px; color:azure">This is a <?= $_SESSION['user_role'];?> page.</p>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>