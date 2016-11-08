<?php
$title = "Artzz - Art at Best";
$content = "Artworks you have never seen before.";
$paintingName = "";
$imgLink = "";

if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $paintingName = $_GET["name"];
    $imgLink = $_GET["img"];
}

if(isset($_COOKIE[$paintingName])) {
    $temp = $_COOKIE[$paintingName];
    $temp += 1;
    setcookie($paintingName, $temp);
    $_COOKIE[$paintingName] = $temp;
}
else
{
    setcookie($paintingName, 1);
    $_COOKIE[$paintingName] = 1;
}

$visitedCount = $_COOKIE[$paintingName];

if(isset($_COOKIE["recentlyVisited"])) {
    $my_array = json_decode(stripslashes($_COOKIE["recentlyVisited"]), true);
    if(array_search($paintingName, $my_array)>=0) {
        $to_remove = array($paintingName);
        $my_array = array_diff($my_array, $to_remove);
        if (count($my_array) == 0)
            $my_array = array($paintingName);
        else
            array_unshift($my_array, $paintingName);
    }
    else
    {
        if (count($my_array) == 0)
            $my_array = array($paintingName);
        else
            array_unshift($my_array, $paintingName);
    }
}
else
{
    $my_array = array($paintingName);
}

setcookie("recentlyVisited", json_encode($my_array));
$_COOKIE["recentlyVisited"] = json_encode($my_array);

include 'FullSizeViewTemplate.php';