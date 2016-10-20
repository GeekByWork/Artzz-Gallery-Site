<?php

$id=$password="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  if (empty($_POST["id"])) 
	{
	$idErr = "Login ID Required";
	}
  else
	{
	$id=validate($_POST["id"]);
	}
  if (empty($_POST["password"])) 
	{
    	$passErr = "Password Required";
	}
  else
	{
	$pass=validate($_POST["password"]);
	}
}

function validate($data)
  {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
  }
logger($id,$pass);
function logger($id,$pass)
{
    $file=fopen("admin.txt","r") or die("Can't open file");
    $line=fgets($file);
    $line=chop($line);
    $field=explode(",",$line,2);
if($id==$field[0] && $pass==$field[1])
	{
	 $file2=fopen("users.txt","r");
	 echo fread($file2,filesize("users.txt"));
	}
else 
	{
	 echo ("Invalid Username or Password");
	}
}
?>