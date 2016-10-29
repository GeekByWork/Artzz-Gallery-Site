<?php
$title = "Sign In";

$content = "
<header class='clearfix'>
    <strong>Create a New User:</strong>
    <br />
    <br />    
    <form id='signup' action='./signinhandler.php' method='post'>
        <br />
        <div class='container'>
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-2' style='text-align: left'>
                    Choose a User Name:
                </div>
                <div class='col-md-2'>
                    <input name='userName' type='text' />
                </div>
            </div>
            <br />
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-2' style='text-align: left'>
                    First Name:
                </div>
                <div class='col-md-2'>
                    <input name='fName' type='text' />
                </div>
            </div>
            <br />
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-2' style='text-align: left'>
                    Last Name:
                </div>
                <div class='col-md-2'>
                    <input name='lName' type='text' />
                </div>
            </div>
            <br />
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-2' style='text-align: left'>
                    Choose a Password:
                </div>
                <div class='col-md-2'>
                    <input name='pass' type='text' />
                </div>
            </div>
            <br />
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-2' style='text-align: left'>
                    Age:
                </div>
                <div class='col-md-2'>
                    <input name='age' type='text' />
                </div>
            </div>
            <br />
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-2' style='text-align: left'>
                    Gender (M/F):
                </div>
                <div class='col-md-2'>
                    <input name='gender' type='text' />
                </div>
            </div>
        </div>
        <br />
        <br />
        <input type='hidden' name='sign' value='up' />        
        <button class='btn btn-danger' type='submit'>Sign Up</button>
    </form>
</header>";

include 'signingTemplate.php';