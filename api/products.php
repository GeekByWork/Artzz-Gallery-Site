<?php
$title = "APIs";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "mysql";
$dbName = "artzz";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo get_products();
}

function get_products()
{
    $products = array();
    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select productName, description from products";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $i=1;
        // Fetch one and one row
        while ($row=$result->fetch_assoc())
        {
            $products[$i] = array('$productName' => $row['productName'], 'description' => $row['description']);
            $i++;
        }
        // Free result set
        mysqli_free_result($result);
    }
    $conn->close();
    return json_encode(array_values($products), JSON_PRETTY_PRINT);
}