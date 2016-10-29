<?php
$title = "All Users";

$content = "
<header class='clearfix'>
    <strong>All Users:</strong>
    <br />
    <br />    
    <form id='allUsers' action='./signinhandler.php' method='post'>
        <br />
        <div class='row'>
                <div class='col-md-2'>
                </div>
                <div class='col-md-2' style='text-align: right;'>
                    Select Category: 
                </div>
                <div class='col-md-2'>
                    <select id='searchCriteria' name='searchCriteria' style='width:175px;'>
                        <option value='username'>User Name</option>
                        <option value='firstname'>First Name</option>
                        <option value='lastname'>Last Name</option>
                        <option value='gender'>Gender</option>
                        <option value='age'>Age</option>                                        
                    </select>
                </div>
                <div class='col-md-2' style='text-align: right'>
                    Search:
                </div>
                <div class='col-md-2'>
                    <input name='searchText' type='text' />
                </div>
                <div class='col-md-2'></div>
            </div>
        <br />
        <div class='container'>
            <div class='row'>
                <div class='col-md-2'>
                    Serial no.
                </div>
                <div class='col-md-2' style='text-align: left'>
                    User Name
                </div>
                <div class='col-md-2'>
                    First Name
                </div>
                <div class='col-md-2'>
                    Last Name
                </div>
                <div class='col-md-2'>
                    Gender
                </div>
                <div class='col-md-2'>
                    Age
                </div>
            </div>
            <br />
        </div>
        <br />
        <br />
        <input type='hidden' name='sign' value='allUsers' />        
    </form>
</header>";

include 'signingTemplate.php';