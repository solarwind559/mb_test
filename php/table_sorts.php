<?php 
include "connection.php";
include "sorting.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>DB data</title>
      <style>
        tr, th, td {
          border: 1px solid black;
          padding: 5px 10px;
          font-family: tahoma}
      </style>
  </head>
  <body>

<?php

//FETCH SORTING DATA
if ($data->num_rows > 0) {
  $sort =='DESC' ? $sort = 'ASC' : $sort = 'DESC';
?>

  <table>
    <tr>
      <th>Date</th>
      <th>Address</th>       
    </tr>
    <tr>
      <th><button name='bydate' type='submit' value=''><a href='?order=time&&sort='>Sort by date</a></button></th>
      <th><button name='byname' type='submit' value=''><a href='?order=address&&sort='>Sort by name</a></button></th>
    </tr>

<?php
  while($rows = $data->fetch_assoc()){
        $address = $rows['address'];
        $time = $rows['time'];
        $id = $rows['id'];

        
    echo "<tr>
          <td>$time</td>
          <td>$address</td>
        </tr>";
      }

  echo "</table>";

} else {
  echo "No data found";
  }
?>

  </body>
</html>