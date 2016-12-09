<?php

$serverName = "localhost";
$username = "root";
$password = "mysql";

$dbName = "artzz";

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "mysql";



try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = (array) json_decode(file_get_contents("php://input"));
    foreach ($data as $key => $value)

    {
        $stmt = $conn->prepare("UPDATE products SET quantity= quantity-:order WHERE id= :value" );
        $stmt->bindParam(':value', $key);
        $stmt->bindParam(':order', $value);
        $stmt->execute();
    }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;