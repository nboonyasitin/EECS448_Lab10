<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "nahathboonyasit", "umee4coh",
"nahathboonyasit");

/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users;";
   
$result = $mysqli->query($query);
   while ($row = $result->fetch_assoc())
   {
       echo "" . $row["user_id"] . "<br>";
   }
printf("image of user and posts on SQL table also attached to the file.");

$result->free();
 /* free result set */
 
/* close connection */
$mysqli->close();
?> 