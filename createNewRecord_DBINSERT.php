<?php


//print_r($_POST);

require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$state = $_POST['state'];
$address = $_POST['address'];
$zipcode = $_POST['zip'];
$hometype1 = $_POST['hometype1'];
$homeprice1 = $_POST['homeprice1'];
$hometype2 = $_POST['hometype2'];
$homeprice2 = $_POST['homeprice2'];
$hometype3 = $_POST['hometype3'];
$homeprice3 = $_POST['homeprice3'];

//print $fname;


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewUser($state, $address, $zipcode, $hometype1, $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
echo $newuser;
?>
