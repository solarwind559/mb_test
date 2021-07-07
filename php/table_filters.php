<?php

if(isset($_POST['search'])){
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM emails WHERE CONCAT(`address`) LIKE '%"."@".$valueToSearch."%'"; 
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `emails`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query){
    $connect = mysqli_connect('localhost', 'root', '', 'emails_test');
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>DB search</title>
    <style>
    tr, th, td {
      border: 1px solid black;
      padding: 5px 10px;
      font-family: tahoma}
    </style>
  </head>
  <body>
        
        <form action="table_filters.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search for emails">
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr>
                    <th>Date</th>
                    <th>Address</th>
                </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['address'];?></td>                    
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>