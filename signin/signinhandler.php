<?php

$id=$password=$idErr=$pErr="";

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "mysql";
$dbName = "artzz";
$dbPort = "3306";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_POST["sign"]=="in") {
        if (empty($_POST["id"])) {
            $idErr = "Login ID Required";
        } else {
            $id = extraction($_POST["id"]);
        }
        if (empty($_POST["password"])) {
            $pErr = "Password Required";
        } else {
            $password = extraction($_POST["password"]);
        }
        fileValidate($id, $password, $pErr, $idErr);
    }

    if($_POST["sign"]=="up")
    {
        if (empty($_POST["userName"])) {
            $idErr = "User ID Required";
        } else {
            $username = extraction($_POST["userName"]);
        }
        if (empty($_POST["pass"])) {
            $pErr = "Password Required";
        } else {
            $password = extraction($_POST["pass"]);
        }
        $lName = extraction($_POST["lName"]);
        $fName = extraction($_POST["fName"]);
        $age = extraction($_POST["age"]);
        $gender = extraction($_POST["gender"]);
        dbInsert($userName, $password, $age, $gender, $fName, $lName);
    }

    if($_POST["sign"]=="allUsers")
    {
        $criteria = extraction($_POST["searchCriteria"]);
        $search = extraction($_POST["searchText"]);
        dbSearch($criteria, $search);

    }
}


function extraction($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

function fileValidate($id,$pass, $pErr, $idErr)
{
    $file=fopen("admin.txt","r") or die("Can't open file");
    $line=fgets($file);
    $line=chop($line);
    $field=explode(",",$line,2);
    if($id==$field[0] && $pass==$field[1])
    {
        $file2=fopen("users.txt","r");
        echo "List of Users: <br /><br />";
        while(! feof($file2))
        {
            echo fgets($file2). "<br />";
        }
        fclose($file);
    }
    else
    {
        if(strlen($idErr)>0)
            echo $idErr;
        else
        {
            if(strlen($pErr)>0)
                echo $pErr;
            else
                echo ("Invalid Username or Password");
        }
    }
}

function dbValidate($id,$password, $pErr, $idErr)
{
    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "drop DATABASE alpha";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    $conn->close();
}

function dbInsert($userName, $password, $age, $gender, $fName, $lName){

    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "insert into users
            (username, firstname, lastname, age, gender, password)
            VALUES 
            ('" . $userName . "', '" . $fName . "', '" . $lName . "', " . $age . ",'" . $gender . "','" . $password."')";
    if ($conn->query($sql) === TRUE) {
        echo "User Successfully Added. Click Back Button.";
    } else {
        echo "Error : " . $conn->error;
    }
    $conn->close();
}

function dbSearch($criteria, $search)
{
    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from users where " . $criteria . " like '%" . $search ."%';";
    if ($conn->query($sql) === TRUE) {

    } else {
        echo "Error : " . $conn->error;
    }
    $conn->close();
}