<?php
$mysqli = new mysqli("mysql.eecs.ku.edu","m579w375","Pu3gith4","m579w375");


if($mysqli->connection_errno) {
    echo '<p>Connection failed</p>';
    exit();
}

$query = "SELECT * FROM Posts";

if($result = $mysqli->query($query)) {
    while($row = $result->fetch_assoc()) {
        if(!empty($_POST['ID'])) {
            foreach($_POST['ID'] as $Post_ID) {
                if($row['post_id'] == $Post_ID) {
                    $query2 = "DELETE FROM Posts WHERE post_id=$Post_ID";
                    echo '<p>Deleted post '.$Post_ID.'</p>';
                    $mysqli->query($query2);
                }
            }
        }

    }
    $result->free();
}
$mysqli->close();




?>
