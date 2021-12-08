<?php
$username = $_POST['username'];
$mysqli = new mysqli("mysql.eecs.ku.edu","m579w375","Pu3gith4","m579w375");
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_errno);
  exit();
}
if ($username=="") {
  echo "User was not created";
}
else{
  $query = "INSERT INTO Users(user_id) VALUES('$username')";
  if($mysqli->query($query)){
    echo "User was sucessfully created!";
  }
  else {
    echo "User was not created";
  }
}
$mysqli->close();
 ?>
