<?php
//echo 'YUH';
$mysqli = new mysqli("mysql.eecs.ku.edu","m579w375","Pu3gith4","m579w375");

if($mysqli->connection_errno) {
    echo '<p>Connection failed</p>';
    exit();
}

$username = $_POST["user_id"];
echo '<h3>Posts for '. $username.'</h3>';
$query = "SELECT * FROM Posts WHERE author_id='$username'";

if($result = $mysqli->query($query)) {

    echo '<table style="border: 1px solid black;"><thead><tr>';
    echo '<th style="border: 1px solid black;">Posts</th>';
    echo '<th style="border: 1px solid black;">Post ID</th>';
    echo '<th style="border: 1px solid black;">Author</th>';
    echo '</tr></thead><tbody>';

    while($row = $result->fetch_assoc()) {
        $username = $row["post_id"];
        $Post = $row["content"];
	$Author = $row["author_id"];
        echo '<tr>';
        echo '<td style="border: 1px solid black;">'.$Post.'</td>';
        echo '<td style="border: 1px solid black;">'.$username.'</td>';
	echo '<td style="border: 1px solid black;">'.$Author.'</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
    $result->free();
}

$mysqli->close();




?>
