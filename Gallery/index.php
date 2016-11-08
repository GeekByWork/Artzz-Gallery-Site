<?php
$title = "Artzz - Art at Best";
$content = "Artzz Gallery";
$paintings = ['Painting 1', 'Painting 2', 'Painting 3', 'Painting 4', 'Painting 5', 'Painting 6', 'Painting 7', 'Painting 8', 'Painting 9'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link href="../assets/css/animate-custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <script src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>
</head>

<body>

<div class="header-wrap" name="home">
    <header class="clearfix">
        <p ><?php echo $content; ?></p>
    </header>
</div>

<div class="container">




    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="..." alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="..." alt="Third slide">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    
    <div id="greywrap">
        <div class="row">
            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting1&img=gallery1">
                    <h3>Painting 1</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery1.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting2&img=gallery2">
                    <h3>Painting 2</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery2.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting3&img=gallery3">
                <h3>Painting 3</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery3.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting4&img=gallery4">
                <h3>Painting 4</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery4.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting5&img=gallery5">
                <h3>Painting 5</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery5.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting6&img=gallery6">
                    <h3>Painting 6</h3>
                    <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery6.jpg" alt="">
                    <p>It's not only a painting, it's a story.</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting7&img=gallery7">
                    <h3>Painting 7</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery7.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting8&img=gallery8">
                    <h3>Painting 8</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery8.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting9&img=gallery9">
                <h3>Painting 9</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery9.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
