<?php
error_reporting(0);
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "stdman";
$connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "delete from addition where stid ='$_POST[stid]'";

if ($connection->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $connection->error;
}
$connection->close();
?>