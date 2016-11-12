<?php
// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://juranet.tech/php/curl/user_list.php");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$users1 = curl_exec($ch);


curl_setopt($ch, CURLOPT_URL, "http://geekbabu.com/api/users.php");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$users2 = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

$users1 = json_decode($users1, true);
$users2 = json_decode($users2, true);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link href="../assets/css/animate-custom.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>
    <style>
        hr:before{
            content: " ";
            position: absolute;
            top: 0;
            left: 0 !important;
            width: 100% !important;
            height: 2px;
            background: #ccc;
        }
    </style>
</head>
<body>
    <a href='./'><button style='float:left; margin-left: 50px;' class='btn btn-danger'>Back</button></a>
    <div class="container">
        <div class='row' style='font-weight: bold'>
        </br>
        <div style="text-align: center">Data from API : 'https://juranet.tech/php/curl/user_list.php'</div>
        </br>
        <hr>
        <?php

        foreach ($users1 as $user)
        {
            echo "
        <div class='col-md-2'>First Name : " . $user['Firstname'] . "</div>
        <div class='col-md-2'>Last Name : " . $user['LastName'] . "</div>
        <div class='col-md-2'>Home Address : " . $user['HomeAddr'] . "</div>
        <div class='col-md-2'>Home Phone : " . $user['Homephone'] . "</div>
        <div class='col-md-2'>Cell Phone : " . $user['Cellphone'] . "</div>
        <div class='col-md-2'>Email : " . $user['Email'] . "</div></br></br><hr>";
        }

        echo "
        </br>
            <div style=\"text-align: center\">Data from API : 'http://geekbabu.com/api/users.php'</div>
        </br>
        <hr>";
        foreach ($users2 as $user)
        {
            echo "
        <div class='col-md-2'>User Name : " . $user['username'] . "</div>
        <div class='col-md-2'>First Name : " . $user['firstname'] . "</div>
        <div class='col-md-2'>Last Name : " . $user['lastName'] . "</div>
        <div class='col-md-2'>Gender : " . $user['gender'] . "</div>
        <div class='col-md-2'>Age : " . $user['age'] . "</div></br></br><hr>";
        }
        ?>

    </div>
    </div>
</body>
</html>