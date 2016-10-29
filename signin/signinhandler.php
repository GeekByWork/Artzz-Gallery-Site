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
            $pass = extraction($_POST["password"]);
        }

        fileValidate($id,$pass, $pErr, $idErr);
    }

    if($_POST["sign"]=="up")
    {
        if (empty($_POST["id"])) {
            $idErr = "User ID Required";
        } else {
            $id = extraction($_POST["id"]);
        }
        if (empty($_POST["password"])) {
            $pErr = "Password Required";
        } else {
            $pass = extraction($_POST["password"]);
        }
        if (!empty($_POST["lname"])) {
            $age = extraction($_POST["lname"]);
        }
        if (!empty($_POST["fname"])) {
            $age = extraction($_POST["fname"]);
        }
        if (!empty($_POST["age"])) {
            $age = extraction($_POST["age"]);
        }
        if (!empty($_POST["gender"])) {
            $gender = extraction($_POST["gender"]);
        }

        dbInsert($id, $pass, $age, $gender);
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

function dbValidate($id,$pass, $pErr, $idErr)
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

    /*
   //Select Database
   mysql_select_db($dbname) or die(mysql_error());

   //build query
   $query = "SELECT COUNT(*) FROM users WHERE loginId = '$id'";

   //Execute query
   $qry_result = mysql_query($query) or die(mysql_error());

   if($qry_result=0)
   {

   }
   else
   {

   }
   if(is_numeric($age))
   $query .= " AND age <= $age";

   if(is_numeric($wpm))
   $query .= " AND wpm <= $wpm";
   */

}

function dbInsert($id,$pass, $age, $gender){

    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "insert into users
(id, userName, firstName, lastName, age, gender, password
)
values 
(
1, 'alpha', 'alpha', 'alphaalpha', 20, 'm', 'alpha' 
);";
    if ($conn->query($sql) === TRUE) {
        echo "Successfully Done";
    } else {
        echo "Error : " . $conn->error;
    }

    $conn->close();
}