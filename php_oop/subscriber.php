<?php

class Subscriber extends DataBase {

  protected function getData(){
    $sql = "SELECT * FROM emails LIMIT 10";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if($numRows > 0){
      while($row = $result->fetch_assoc()){
        $data[] = $row;
      }
      return $data;
    }
  }
  
}