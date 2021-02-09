<?php

//Retrieve information for all users
/**
 * @return array
 */
function fetchAllUsers() {
  global $mysqli, $db_table_prefix;
  $stmt = $mysqli->prepare("
     select
		id,
		state,
		address,
		zip,
		hometype1,
		homeprice1,
		hometype2,
		homeprice2,
		hometype3,
		homeprice3
		FROM " . $db_table_prefix . "state"
  );

  $stmt->execute();
  $stmt->bind_result(
    $id,
    $state,
    $address,
    $zipcode,
    $hometype1,
    $homeprice1,
    $hometype2,
    $homeprice2,
    $hometype3,
    $homeprice3
  );

  while ($stmt->fetch()) {
    $row [] = array(
        'id'                       => $id,
        'state'                    => $state,
        'address'                  => $address,
        'zip'                      => $zipcode,
        'hometype1'                => $hometype1,
        'homeprice1'               => $homeprice1,
        'hometype2'                => $hometype2,
        'homeprice2'               => $homeprice2,
        'hometype3'                => $hometype3,
        'homeprice3'               => $homeprice3
    );
  }
  $stmt->close();
  return ($row);
}


function createNewUser($state, $address, $zipcode, $hometype1, $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3)
{
  global $mysqli;

  $stmt = $mysqli->prepare(
    "INSERT INTO state (
		state,
		address,
		zip,
		hometype1,
		homeprice1,
		hometype2,
		homeprice2,
		hometype3,
		homeprice3
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
        ?,
        ?,
        ?
		)"
  );
  $stmt->bind_param("sssssssss", $state, $address, $zipcode, $hometype1, $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3);
  $result = $stmt->execute();
  $stmt->close();

  return $result;
}



//fetch particular users record

/**
 * @param $userid
 *
 * @return array
 */
function fetchThisUser($id)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
      "
    SELECT
    id,
    state,
    address,
    zip,
    hometype1,
    homeprice1,
    hometype2,
    homeprice2,
    hometype3,
    homeprice3

    FROM state
    WHERE
    id = ?
    "
    );
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($id, $state, $address, $zipcode, $hometype1, $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3);
    //$stmt->execute();

  while ($stmt->fetch()) {
    $row1[] = array(
      'id'                      => $id,
      'state'                   => $state,
      'address'                 => $address,
      'zip'                     => $zipcode,
      'hometype1'                => $hometype1,
      'homeprice1'               => $homeprice1,
      'hometype2'                => $hometype2,
      'homeprice2'               => $homeprice2,
      'hometype3'                => $hometype3,
      'homeprice3'               => $homeprice3
    );
  }

  //print_r($row);
  $stmt->close();
  return ($row1);
}

function fetchByZip($zipcode)
{
    global $mysqli;
    $stmt = $mysqli->prepare("
SELECT distinct id,
    state,
    address,
    zip,
    hometype1,
    homeprice1,
    hometype2,
    homeprice2,
    hometype3,
    homeprice3

    FROM state
    WHERE
    zip = ?
    "
    );
    $stmt->bind_param("i", $zipcode);
    $stmt->execute();
    $stmt->bind_result($id, $state, $address, $zipcode, $hometype1, $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3);

    while ($stmt->fetch()) {
        $row[] = array(
            'id' => $id,
            'state' => $state,
            'address' => $address,
            'zip' => $zipcode,
            'hometype1' => $hometype1,
            'homeprice1' => $homeprice1,
            'hometype2' => $hometype2,
            'homeprice2' => $homeprice2,
            'hometype3' => $hometype3,
            'homeprice3' => $homeprice3
        );
    }

    //print_r($row);
    $stmt->close();
    return ($row);
}

function updateThisRecord($id, $state, $address, $zipcode, $hometype1, $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3)
{
    global $mysqli, $db_table_prefix;


    echo $zipcode;
    echo $hometype2;
    echo $homeprice2;
    echo $hometype3;
    echo $homeprice3;

    $stmt = $mysqli->prepare(
      "UPDATE " . $db_table_prefix . "state
        SET
        state = ?,
        address = ?,
        zip = ?,
        hometype1 = ?,
        homeprice1 = ?,
        hometype2 = ?,
        homeprice2 = ?,
        hometype3 = ?,
        homeprice3 = ?

		WHERE
		id = ?
		LIMIT 1"
    );


    $stmt->bind_param("ssssssssss", $state, $address, $zipcode, $hometype1, $homeprice1, $hometype2, $homeprice2, $hometype3, $homeprice3, $id);


    echo $state;
    echo $zipcode;


    $result = $stmt->execute();
    $stmt->close();

    return $result;
}



