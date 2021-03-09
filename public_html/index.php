<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$db = 'test';
$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT test FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Query result: ".$row['test'];
  }
} else {
  echo "No results";
}

$conn->close();
?>