
<?php

// Create connection
$conn = new mysqli('localhost', 'my_table', '', 'crud');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully";
}


?>
