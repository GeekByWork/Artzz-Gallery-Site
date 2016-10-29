<?php
$title = "All Users";
$link = "../signin/";
$linkText = "Sign In";
$searchResult = "";
$searchHTML = "";

$self = $_SERVER["PHP_SELF"];

$content = "
<header class='clearfix'>
    <strong>All Users:</strong>
    <br />
    <br />    
    <form id='allUsers' action='<?php echo htmlspecialchars(". $self . ");?>' method='post'>
        <br />
        <div class='row'>
                <div class='col-md-2'>
                </div>
                <div class='col-md-2' style='text-align: right;'>
                    Select Category:
                </div>
                <div class='col-md-2' style='font-weight: bold'>
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
                    <input name='searchText' style='float:left' type='text' />                    
                </div>
                <div class='col-md-2'>
                    <button class='btn btn-success' type='Submit' value='Go' style='float:left'>Go</button></div>
            </div>
        <br />
        <div class='container'>
            <div class='row' style='font-weight: bold'>
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
            " . $searchHTML . "
        </div>
        
        <input type='hidden' name='sign' value='allUsers' />        
    </form>
</header>";

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $criteria = test_input($_POST["searchCiteria"]);
    $searchText = test_input($_POST["searchText"]);
    dbSearch($criteria, $searchText);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function dbSearch($criteria, $search)
{
    //Connect to MySQL Server
    $conn = mysqli_connect($GLOBALS['dbHost'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select username, firstname, lastname, gender, age from users where " . $criteria . " like '%" . $search ."%';";

    if ($result = mysqli_fetch_row($conn, $sql))
    {
        $i=0;
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
        {
            $GLOBALS['searchHTML'] = $GLOBALS['searchHTML'] . "
            <div class='row' style='font-weight: bold'>
                <div class='col-md-2'>"
                    . $i .
                "</div>
                <div class='col-md-2' style='text-align: left'>
                    ". $row[0] . "
                </div>
                <div class='col-md-2'>
                    ". $row[1] ."
                </div>
                <div class='col-md-2'>
                    ". $row[2] ."
                </div>
                <div class='col-md-2'>
                    ". $row[3] ."
                </div>
                <div class='col-md-2'>
                    " .$row[4]. "
                </div>
            </div>";
        }
        // Free result set
        mysqli_free_result($result);
    }
    $conn->close();
}

include 'signingTemplate.php';