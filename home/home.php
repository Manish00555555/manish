<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h1>EXPRESS COURIER SERVICE</h1>
        <h3>The fastest courier service of India</h3><br><br>
        <h3> <p>The shipping company provides many benefits to millions of people by delivering their things to the desired location on time. It is completely hassle-free and also time-saving.</p> </h3>
        <h3>24X7 Service</h3>
    </div>
</body>
</html>