<?php
// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://juranet.tech/php/curl/user_list.php");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$users = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

$users = json_decode($users, true);
?>

<!DOCTYPE html>
<html>
<div class='row' style='font-weight: bold'>
    <?php

    foreach ($users as $user)
    {
        echo "
    <div class='col-md-2'>" . $user['Firstname'] . "</div>
    <div class='col-md-2'>" . $user['LastName'] . "</div>
    <div class='col-md-2'>" . $user['HomeAddr'] . "</div>
    <div class='col-md-2'>" . $user['Homephone'] . "</div>
    <div class='col-md-2'>" . $user['Cellphone'] . "</div>
    <div class='col-md-2'>" . $user['Email'] . "</div>";
    }
    ?>

</div>
</html>