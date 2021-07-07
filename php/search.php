<?php
include "connection.php";

if(isset($_POST['search'])){
  $valueToSearch = $_POST['valueToSearch'];
  $query = "SELECT * FROM emails WHERE CONCAT(`address`) LIKE '%"."@".$valueToSearch."%'";
  $search_result = filterTable($query);
}

else {
  $query = "SELECT * FROM emails";
  $search_result = filterTable($query);
} 

function filterTable($query){
  $connect = mysqli_connect('localhost', 'root', '', 'emails_test');
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}