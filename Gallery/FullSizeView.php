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

    echo 0;
    if(count($_COOKIE['recentlyVisited'])==0)
        echo "Empty COOKIE['recentlyVisited']";
    $my_array = $_COOKIE['recentlyVisited'];
    echo 1;
    foreach ($my_array as $x)
    {
        echo $x;
    }
    echo 2;
        if(array_search($paintingName, $my_array)==1)
    {
        $to_remove = array($paintingName);
        $result = array_diff($my_array, $to_remove);
    }

    echo 3;
    foreach ($result as $x)
    {
        echo $x;
    }
    echo 4;
if(count($result)==0)
    $result = array($paintingName);
else
    array_unshift($result, $paintingName);

    setcookie('recentlyVisited', $result);
    $_COOKIE['recentlyVisited'] = $result;

    foreach ($_COOKIE['recentlyVisited'] as $x)
    {
        echo $x;
    }
if(isset($_COOKIE['recentlyVisited']))
    echo "true";
else
    echo "false";

include 'FullSizeViewTemplate.php';