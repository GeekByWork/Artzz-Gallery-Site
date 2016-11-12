<?php
$title = "APIs";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "mysql";
$dbName = "artzz";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "hello";
    return get_users();
}

function get_users()
{
    $users = array();
    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select username, firstname, lastname, gender, age from users ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $i=1;
        // Fetch one and one row
        while ($row=$result->fetch_assoc())
        {
            $users[$i] = array('username' => $row['username'], 'username' => $row['firstname'], 'lastname' => $row['lastname'], 'gender' => $row['gender'], 'age' => $row['age']);
            $i++;
        }
        // Free result set
        mysqli_free_result($result);
    }
    $conn->close();
    return json_encode(array_values($users), JSON_PRETTY_PRINT);
}