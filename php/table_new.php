<?php
include "connection.php";
include "delete.php";
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
          font-family: tahoma;}
      </style>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Address</th>
        <th>Action</th>
      </tr>

<?php
//how many results per page
$results_per_page = 10;


//get the number of results in db
$query = "SELECT * from emails";
$delData = mysqli_query($conn, $query);
//ok don't echo it
$total = mysqli_num_rows($delData);


//calculate the number of pages available
$num_of_pages = ceil($total/$results_per_page);

//check which page user is on
if(!isset($_GET['page'])){
  $page = 1;
} else {
  $page = $_GET['page'];
}

//determine which page is being displayed
$page_first_results = ($page-1)*$results_per_page;


//determine the limit starting number to display on page
$query = "SELECT * from emails LIMIT " . $page_first_results . "," . $results_per_page;
$delData = mysqli_query($conn, $query);


//echo the data to a table
if ($total > 0){
  while($result = mysqli_fetch_assoc($delData)){
        $address = $result['address'];
        $time = $result['time'];
        $id = $result['id'];

    echo "
        <tr>
          <td>$id</td>
          <td>$time</td>
          <td>$address</td>
          <td><a href='table_new.php?del=$result[id]'>Delete</a></td>
        </tr>
      ";  
    }
} 
else {
  echo "No data found";
  }
?>

    </table>

<?php

//display page links
for($page=1;
    $page<=$num_of_pages;
    $page++){
  echo '<a style="font-size:20px; margin:10px; text-decoration:none;" href="table_new.php?page=' . $page . '">Page_' . $page . '</a>';
}

?>