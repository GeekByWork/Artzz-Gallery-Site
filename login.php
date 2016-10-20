<?php

$id=$password="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  if (empty($_POST["id"])) 
	{
	$idErr = "Login ID is required";
	}
  else
	{
	$id=check_input($_POST["id"]);
	}
  if (empty($_POST["password"])) 
	{
    	$passErr = "Password is required";
	}
  else
	{
	$pass=check_input($_POST["password"]);
	}
}
function check_input($data)
  {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
  }
logger($id,$pass);
function logger($id,$pass)
{
$file=fopen("admin.txt","r") or die("Not able to open file");
$line=fgets($file);
$line=chop($line);
$field=explode(",",$line,2);
if($id==$field[0] && $pass==$field[1])
	{
	 $file2=fopen("users.txt","r");
	 echo fread($file2,filesize("users.txt"));
	}
else # if($id!=$field[0] && $pass!=$field[1])
	{
	 echo ("Invalid Username or Password");
	}
}
?>