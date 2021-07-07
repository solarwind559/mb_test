<?php
if(isset($_GET['order'])){
  $order = $_GET['order'];
} else {
  $order = 'time';
}

if(isset($_GET['sort'])){
  $sort = $_GET['sort'];
} else {
  $sort = 'ASC';
}

$data = $conn->query(
  "SELECT * FROM emails 
  ORDER BY $order $sort
  ");