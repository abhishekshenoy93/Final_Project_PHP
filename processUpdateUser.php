<?php

require_once("config.php");

// print_r is to display the contents of an array() in PHP.
//print_r($_POST);

// Assigning $_POST values to individual variables for reuse.
$id = $_POST['id'];
$state = $_POST['state'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$hometype1 = $_POST['hometype1'];
$homeprice1 = $_POST['homeprice1'];
$hometype2 = $_POST['hometype2'];
$homeprice2 = $_POST['homeprice2'];
$hometype3 = $_POST['hometype3'];
$homeprice3 = $_POST['homeprice3'];

//Creating a variable to hold the "@return boolean value returned by function updateThisRecord - is boolean 1 with
//successfull and 0 when there is an error with executing the query .
$updatedRecord  = updateThisRecord($id, $state, $address, $zipcode, $hometype1,
    $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3);



//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//update is completed successfully.
echo $updatedRecord;
