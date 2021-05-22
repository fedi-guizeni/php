<?php

session_start();
unset($_SESSION['user'] );
header('REFRESH:1;URL=home.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
img {
position: relative;
width: 100%;
height: 100%;
align-items: center;
}

</style>
<body>
    <img src="loading.png" alt="">
</body>
</html>