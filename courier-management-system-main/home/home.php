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
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/main1.png');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='left' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2><B>FLASH COURIER</B></h2>
        <h4><B>Deliveries at Flash Speed...⚡⚡</B></h4><br><br><br>
        <h3><B>DBMS MINI PROJECT</h3></B>
        <h6><B>By Rakesh, Shrey, Sohan, Rohit, Sushil</B></h6>
    </div>
</body>
</html>