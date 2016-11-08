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

    $my_array = $_COOKIE['recentlyVisited'];
    if(array_search($paintingName, $my_array)==1)
    {
        $to_remove = array($paintingName);
        $result = array_diff($my_array, $to_remove);
    }
    array_unshift($result, $paintingName);
    setcookie('recentlyVisited', $result);
    $_COOKIE['recentlyVisited'] = $result;

foreach ($result as $x)
{
    echo $x;
}

include 'FullSizeViewTemplate.php';