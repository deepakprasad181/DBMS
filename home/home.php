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
        background-image:url('../images/delivery.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2 style="color:black;"><b>THIS IS RAPID COURIER MANAGEMENT SERVICE</b></h2>
        <h4><b>IN SPEED WE TRUST</b></h4><br><br>
        <h3><b><marquee>The go-to website for courier delivery!</marquee></b></h3>
    </div>
</body>
</html>