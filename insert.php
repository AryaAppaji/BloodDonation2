<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks For Registration</title>
    <style>
        body{
            background-color: #850000;
        }
        h1{
            color: white;
            font-style: oblique;
            font-size: 50px;
            transform: translateY(250px);
        }
    </style>
</head>
<body align="center">
    <h1>THANKS FOR REGISTRATION</h1>
    <?php
    $name="";
    $bgrp="";
    $addr="";
    $num="";
    $mail="";
    if(isset($_POST["Name"])){
        $name=$_POST["Name"];
    }
    if(isset($_POST["B-GRP"])){
        $bgrp=$_POST["B-GRP"];
    }
    if(isset($_POST["Address"])){
        $addr=$_POST["Address"];
    }
    if(isset($_POST["phno"])){
        $num=$_POST["phno"];
    }
    if(isset($_POST["mail"])){
        $mail=$_POST["mail"];
    }
    $conn = mysqli_connect("localhost","root","","blooddonation");
    mysqli_query($conn,"INSERT INTO `donars`(`Name`, `B-GRP`, `Address`, `Mobile`, `E-Mail`) VALUES ('$name','$bgrp','$addr','$num','$mail')");
    ?>
</body>
</html>
