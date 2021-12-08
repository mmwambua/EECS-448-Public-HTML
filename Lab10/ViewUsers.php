<?php
$mysqli = new mysqli("mysql.eecs.ku.edu","m579w375","Pu3gith4","m579w375");
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_errno);
  exit();
}

$query = "SELECT * FROM Users";
if($result = $mysqli->query($query)){
  echo '<table style="border: 1px solid black;"><thead><tr>';
    echo '<th style="border: 1px solid black;">User_id</th>';
    echo '</tr></thead><tbody>';

    while($row = $result->fetch_assoc()) {
        $username = $row["user_id"];
        echo '<tr>';
        echo '<td style="border: 1px solid black;">'.$username.'</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
}
$mysqli->close();
 ?>
