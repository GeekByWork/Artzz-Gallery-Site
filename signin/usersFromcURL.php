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
    <div class='col-md-2'>Email : " . $user['Email'] . "</div></br><hr>";
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
    <div class='col-md-2'>Age : " . $user['age'] . "</div></br><hr>";
    }
    ?>

</div>
</html>