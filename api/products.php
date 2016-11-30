<?php
$title = "APIs";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "mysql";
$dbName = "artzz";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else
    {
        $id = -1;
    }
    echo get_products($id);
}

function get_products($id)
{
    $products = array();
    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "select id, name, quantity, image_url, price, description from products";
    if($id!=-1)
        $sql = $sql + "where id = " + $id;
    echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $i=1;
        // Fetch one and one row
        while ($row=$result->fetch_assoc())
        {
            $products[$i] = array('id' => $row['id'], 'name' => $row['name'], 'quantity' => $row['quantity'], 'image_url' => $row['image_url'], 'price' => $row['price'], 'description' => $row['description']);
            $i++;
        }
        // Free result set
        mysqli_free_result($result);
    }
    $conn->close();
    return json_encode(array_values($products), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}