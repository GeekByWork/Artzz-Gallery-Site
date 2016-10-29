<?php

$id=$password=$idErr=$pErr="";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mysql";
$dbname = "alpha";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  if (empty($_POST["id"])) 
	{
	    $idErr = "Login ID Required";
	}
  else
	{
	$id=extraction($_POST["id"]);
	}
  if (empty($_POST["password"])) 
	{
    	$pErr = "Password Required";
	}
  else
	{
	    $pass = extraction($_POST["password"]);
	}
}

dbvalidate($id,$pass, $pErr, $idErr);

function extraction($data)
  {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
  }

function filevalidate($id,$pass, $pErr, $idErr)
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

function dbvalidate($id,$pass, $pErr, $idErr)
{
   //Connect to MySQL Server
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   if($conn){
       echo "Connected";
   } else{
       echo "Sorry";
   }
   
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
   
   
}

?>