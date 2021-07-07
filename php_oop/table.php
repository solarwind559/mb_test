<?php
include 'db.php';
include 'subscriber.php';
include 'viewsubscriber.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB data</title>
      <style>
        tr, th, td {
          font-family: tahoma;}
      </style>
</head>

<body>
  <?php

  $subscribers = new ViewSubscriber();
  $subscribers->showData();

  ?>
</body>
</html>