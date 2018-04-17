<?php
$mysqli_connection = new MySQLi('192.168.203.56', 'root', 'root', 'offerteBVDO');
if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}
?>