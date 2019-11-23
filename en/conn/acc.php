<?php
$conn = mysqli_connect("89.46.111.89","Sql1322086","6j62e0l026","Sql1322086_1");



if (!$conn->set_charset("utf8")) {
      //printf("Error loading character set utf8: %s\n", $conn->error);
  } else {
      //printf("Current character set: %s\n", $conn->character_set_name());
  }
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
