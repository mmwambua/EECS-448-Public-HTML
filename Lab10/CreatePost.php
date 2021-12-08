<?php
$username = $_POST['username'];
$comment = $_POST['comment'];
$mysqli = new mysqli("mysql.eecs.ku.edu","m579w375","Pu3gith4","m579w375");
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_errno);
  exit();
}

//$query = "INSERT INTO Users(user_id) VALUES('$username')";
$query = "SELECT user_id FROM Users";
$query2 = "INSERT INTO Posts (content,author_id) VALUES ('$comment','$username')";
//$query = "SELECT EXISTS(SELECT * FROM Users WHERE user_id='$username')";
$switch1 = 0;
if ($comment=="") {
  echo "post not created";
}
else {
  if($result = $mysqli->query($query)){
    while($row = $result->fetch_assoc()){
      $temp = $row["user_id"];
      if($temp==$username){
        $switch1=1;
      }
    }
    if ($switch1==1) {
      if($result2=$mysqli->query($query2)){
          echo "Post created";
      }
      else{
        echo "Post not created";
      }
    }
    else{
      echo "User not found";
    }
  }
}
// if($comment!=""){
//   if($result = $mysqli->query($query)){
//     while($row = $result->fetch_assoc()){
//       $temp = $row["user_id"];
//       if($temp==$username){
//         $switch1=1;
//       }
//     }
//     if($switch1!=1){
//       echo "User not found";
//     }
//   }
// }
// if($result2=$mysqli->query($query2)){
//   if($switch1==1){
//     echo "Post created";
//   }
// }
// else{
//   echo "Post not created";
// }

$mysqli->close();
 ?>
