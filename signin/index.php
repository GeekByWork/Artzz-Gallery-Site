<?php
$title = "Sign In";

$link = "./allUsers.php";
$linkText = "All Users";

$content = "<header class='clearfix'>    <strong>ADMINISTRATOR LOGIN:</strong><br />    <br />    
<form id='signin' action='./signinhandler.php' method='post'>User ID:<br />
        <input name='id' type='text' /><br />
        <span class='error'>
                  Invalid UserID
                </span>
        <br />
        Password:<br />
        <input name='password' type='password' /><br />
        <span class='error'>
                  Invalid Password
                </span>
        <br />
        <br />
        <input type='hidden' name='sign' value='in' />
        <button type='button' onclick='signUp()' class='btn btn-danger' style='margin-right:10px'> Sign Up </button>
        <button class='btn btn-success' type='submit' value='Submit' style='margin-left:10px;'> Sign In </button>
    </form>
</header>";

include 'signingTemplate.php';