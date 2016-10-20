<?php

$id=$password=$idErr=$pErr="";
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

validate($id,$pass, $pErr, $idErr);

function extraction($data)
  {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
  }

function validate($id,$pass, $pErr, $idErr)
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
?>