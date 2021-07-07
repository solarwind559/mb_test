<?php

$email = $_POST['email'];

$dbconnect=mysqli_connect('localhost', 'root', '', 'emails_test');

$sql = mysqli_query($dbconnect, "INSERT into emails(id,address,time) values('', '$email', '')");
if($sql){
  echo "Data inserted successfully";
} else {
  echo "Failed to insert data";
}