<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <link href="../assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link href="../assets/css/animate-custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <script src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>
</head>

<body>
<div style="text-align: center">
    <a href="./"><button style="float:left; margin-left: 50px;" class="btn btn-danger">Back</button></a>
    <h1><?php echo $paintingName ?></h1>
    <hr>
    <br>
    <div style="margin-left: 10px;margin-right: 10px" class="row">
        <div class="col-lg-6">
            <img width="404px" height="316px" style="margin-left: auto;margin-right: auto;" src="../assets/img/<?php echo htmlspecialchars($imgLink); ?>.jpg" alt="">
        </div>
        <div style="text-align: left" class="col-lg-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare sollicitudin nibh vehicula accumsan. Morbi cursus vulputate erat, et faucibus enim volutpat at. Nam at viverra ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ut volutpat ipsum. Aliquam sed ipsum vitae ante facilisis cursus tincidunt sit amet mi. Proin metus magna, rutrum vel eros ac, varius tristique magna. Nullam justo nisi, auctor blandit tellus vitae, egestas lacinia purus. Sed eleifend lobortis sapien vel semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum nec mi ornare, ullamcorper tortor sit amet, eleifend diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dignissim sem vitae ex sollicitudin, sed accumsan odio lobortis. Curabitur finibus nulla sed arcu auctor imperdiet.
            <br><br>
            <button style="float: left;" class="btn btn-success">Buy</button>
            <button style="float: left; margin-left: 10px;" class="btn btn-warning">Add to Cart</button>
        </div>
    </div>
    <br>
    <h3>Number of times visited: <?php echo $visitedCount ?></h3>
</div>
</body>
<?php
