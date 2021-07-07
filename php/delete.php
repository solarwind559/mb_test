<?php
include "connection.php";
error_reporting(0);

$id = $_GET['del'];

$query = "DELETE FROM emails WHERE id = '$id'";
$data = mysqli_query($conn, $query);

if($data){
    // echo "All good";
} else {
    echo "Cannot delete";
}