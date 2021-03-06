<?php

?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>
    Display Records
  </title>
  <!-- Style -- Can also be included as a file usually style.css -->
  <style type="text/css">
	table.table-style-three {
      font-family: verdana, arial, sans-serif;
      font-size: 11px;
      color: #333333;
      border-width: 1px;
      border-color: #3A3A3A;
      border-collapse: collapse;
    }
    table.table-style-three th {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #D56A6A;
      color: #ffffff;
    }
    table.table-style-three a {
      color: blue;
      text-decoration: none;
    }

    table.table-style-three tr:hover td {
      cursor: pointer;
    }
    table.table-style-three tr:nth-child(even) td{
      background-color: #F7CFCF;
    }
    table.table-style-three td {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #FFA6A6;
      background-color: #ffffff;
    }
</style>

</head>
<body>

  <?php require_once("config.php");

  $allrecords = fetchAllUsers();

  ?>

  <!-- Table goes in the document BODY -->
  <table class="table-style-three">
      <thead>
        <!-- display user details header  -->
        <th>ID</th>
        <th>State</th>
        <th>Address</th>
        <th>Zip Code</th>
        <th>Home Type1</th>
        <th>Home Price1</th>
        <th>Home Type2</th>
        <th>Home Price2</th>
        <th>Home Type3</th>
        <th>Home Price3</th>
      </thead>
      <tbody>
      <?php
      foreach($allrecords as $displayRecords) { ?>
      <tr>
        <td> <?php print $displayRecords['id']; ?></td>
        <td><?php print $displayRecords['state']; ?></td>
        <td><?php print $displayRecords['address']; ?></td>
        <td><?php print $displayRecords['zip']; ?></td>
          <td><?php print $displayRecords['hometype1']; ?></td>
          <td><?php print $displayRecords['homeprice1']; ?></td>
          <td><?php print $displayRecords['hometype2']; ?></td>
          <td><?php print $displayRecords['homeprice2']; ?></td>
          <td><?php print $displayRecords['hometype3']; ?></td>
          <td><?php print $displayRecords['homeprice3']; ?></td>
      </tr>
      <?php } ?>
      </tbody>
  </table>

</body>
</html>
