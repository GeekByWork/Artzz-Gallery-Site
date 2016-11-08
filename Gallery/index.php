<?php
$title = "Artzz - Art at Best";
$content = "Artzz Gallery";
$paintings = ['Painting1', 'Painting2', 'Painting3', 'Painting4', 'Painting5', 'Painting6', 'Painting7', 'Painting8', 'Painting9'];

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
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</head>

<body>

<div class="header-wrap" name="home">
    <header class="clearfix">
        <p ><?php echo $content; ?></p>
    </header>
</div>

<div class="container">




    <div style="width: 500PX;" id="myCarousel" class="carousel slide" data-ride="carousel">
        <div style="text-align: center;">Most Visited</div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            arsort()
            ?>

            <div class="item active">
                <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/gallery1.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3>Most Visited (<?php echo "a" ?>)</h3>
                </div>
            </div>
            <div class="item">
                <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/gallery2.jpg" alt="Chania">
            </div>
            <div class="item">
                <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/gallery3.jpg" alt="Flower">
            </div>
            <div class="item">
                <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/gallery4.jpg" alt="Flower">
            </div>
        </div>

        <!-- Left and right controls -->
        <a style="background: #e6e6e6" class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a style="background: #e6e6e6" class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
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
</body>
</html>
