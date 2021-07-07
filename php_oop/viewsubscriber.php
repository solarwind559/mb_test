<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB data</title>
</head>
<body>

  
<?php

class ViewSubscriber extends Subscriber {

  public function showData(){
    $datas = $this->getData();
    foreach($datas as $data){
      ?>
  <table>
      <tr>
      <td><?php echo $data['time'];?>
      </td><br>
      <td><?php echo $data['address'];?> 
      </td>
    </tr>
  </table>
    <?php
    }
  }
  
}
?>


</body>
</html>

