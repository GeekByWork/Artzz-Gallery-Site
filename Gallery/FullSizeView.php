<?php
$title = "Artzz - Art at Best";
$content = "Artworks you have never seen before.";
$paintingName = "";
$imgLink = "";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "mysql";
$dbName = "artzz";

if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $paintingName = $_GET["name"];
    $imgLink = $_GET["img"];
    $id = getId($paintingName);
    postToParent($id);
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

function getId($name)
{
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "select id from products name = " . $name;

    $result = $conn->query($sql);
    $id = 0;
    if ($result->num_rows > 0) {
        $row=$result->fetch_assoc();
        $id = $row['id'];
        // Free result set
        mysqli_free_result($result);
    }
    $conn->close();
    return $id;
}

function postToParent($id)
{
    $site_url = "https://merkato.herokuapp.com/sellers/5/products/$id/track";
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        // return web page
        CURLOPT_HEADER         => false,// don't return headers
        CURLOPT_POST           => 1,
        CURLOPT_FOLLOWLOCATION => true,   // follow redirects
        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
        CURLOPT_ENCODING       => "",     // handle compressed
        CURLOPT_USERAGENT      => "test", // name of client
        CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
        CURLOPT_TIMEOUT        => 120,    // time-out on response
    );
    $ch = curl_init($site_url);
    curl_setopt_array($ch, $options);

    $contentFromParent  = curl_exec($ch);

    curl_close($ch);
}

include 'FullSizeViewTemplate.php';