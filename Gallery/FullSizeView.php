<?php
$title = "Artzz - Art at Best";
$content = "Artworks you have never seen before.";
$paintingName = "";
$imgLink = "";
$cookieName = "";

if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $paintingName = $_GET["name"];
    $imgLink = $_GET["img"];
}

$cookieName = $paintingName;
if(isset($_COOKIE[$cookieName])) {
    $temp = $_COOKIE[$cookieName];
    $temp += 1;
    setcookie($cookieName, $temp);
    $_COOKIE[$cookieName] = $temp;
}
else
{
    setcookie($cookieName, 1);
    $_COOKIE[$cookieName] = 1;
}

$visitedCount = $_COOKIE[$cookieName];
include 'FullSizeViewTemplate.php';