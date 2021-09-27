<?php
error_reporting(0);
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "stdman";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "update addition set stname='$_POST[stname]',gender='$_POST[gender]',dob='$_POST[dob]',class='$_POST[class]',sci='$_POST[sci]',soc='$_POST[soc]',math='$_POST[math]',kan='$_POST[kan]',eng='$_POST[eng]',hindi='$_POST[hindi]',marks='$_POST[marks]',grade='$_POST[grade]'";
  
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
?>
