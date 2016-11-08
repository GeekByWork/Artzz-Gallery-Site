<?php
$cookieKey="visitedPage";
$nameArray=["Chevrolet Corvette Stingray Z51","Subaru Legacy 2.5i Special Edition","BMW Z4 3.0i","Mercedes-Benz C250 Sport","Porsche 911 Carrera S","BMW 545i Sedan","Lexus GX470 SUV","Audi A3","2016 Honda Acura tlx","2014 Lexus GX 460"];
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Car Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
<body>
    <header class="main__header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="collapse navbar-center navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="About.html">About</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <li><a href="LoginPage.php">Login</a></li>
                        <li><a href="user.php">Users</a></li>
                    </ul>
                </div>
                <div class="clr"></div>
            </nav>
        </div>
    </header>
    <div>
        <table align="center" border ="0"><tr><td></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp</td><td><a href="MostRecent.php"><button><font color="black">Most Recent Products</font></button></a></td></tr></table>
    </div>
    <br><br>
<?php
if(isset($_COOKIE[$cookieKey])){
    $array=array();
    $count=0;
    $values=$_COOKIE[$cookieKey];
    $items=explode('#',$values);
    for($i=0;$i<count($items);$i++){
        $KV=explode(':',$items[$i]);
        $array[substr($KV[0],1)]=$KV[1];
    }
    arsort($array);


    ?>
    <table cellpadding="0"  align="center" border="1" width="80%">
    <tr align="center">
        <th style="text-align:center"><font size=4 color = "#0">Serial No:</font></th>
        <th style="text-align:center"><font size=4 color = "#0">Model</font></th>
        <th style="text-align:center"><font size=4 color = "#0">Photo</font></th>
    </tr>
    <?php

    foreach ($array as $key =>$value){
        #echo $s[$i];?>
        <?php echo "<tr><th style=\"text-align:center\"><font size=4 color = \"#0\">".($count+1)."</font></th><th style=\"text-align:center\"><a href=".("Product".$key.".php")."><font size=3 color = \"blue\">".$nameArray[$key-1]."</font></a></th><th style=\"text-align:center\"><font size=4 color = \"#0\"><img src=".("image/".$key."_1.jpg")." height=\"100\" width=\"160\"></font></th></tr>";
        $count++;
        if($count>=5)
            break;

    }
}else{
    echo "<div align=\"center\">No Results Found</div>";
}


?>