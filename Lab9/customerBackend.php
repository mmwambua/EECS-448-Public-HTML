<?php
// define variables and set to empty values
$passErr = $emailErr = $shipErr = "";
$pass = $email = $comment = $ship = $totalLakers = $total76ers = $totalNets = $totalPrice= "";

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["pass"])) {
      $passErr = "Password is required";
    } else {
      $pass = test_input($_POST["pass"]);
      // check if pass only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$pass)) {
        $passErr = "Only letters and white space allowed";
      }
    }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["ship"])) {
    $shipErr = "Shipping is required";
  } else {
    $ship = test_input($_POST["ship"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$domdoc = new DOMDocument();
$domdoc->loadHTML($htmlele);
echo "<h2>Your Input:</h2>";
echo "Email: " . $email;
echo "<br>";
echo "Password: " . $pass;
echo "<br>";
// echo $domdoc->getElementById('numL')->nodeValue;
preg_match_all('!\d+!', $comment, $matches);
//print_r($matches);
$totalLakers = $matches[0][0];
$total76ers = $matches[0][2];
$totalNets = $matches[0][3];
$totalPrice = $matches[0][4]+($matches[0][5]*.01)+$ship;
echo "Number of Lakers Jerseys: " . $totalLakers;
echo "<br>";
echo "Number of 76ers Jerseys: " . $total76ers;
echo "<br>";
echo "Number of Nets Jerseys: " . $totalNets;
echo "<br>";
echo "Total Price is: " . $totalPrice;
echo "<br>";
?>
