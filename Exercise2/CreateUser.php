<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "nahathboonyasit", "umee4coh",
"nahathboonyasit");

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$username = $_POST ["username"];
// if($result = mysql_query($query))
// {
//     trigger_error('Username already in use.', E_USER_WARNING);
// }
// else
// {
//     if($_POST["username"] != '' && $num_rows < 1) {
//         $query = "INSERT INTO Users (user_id) VALUES (\"$username\");";
// }

if ($result = $mysqli->query($query)) {
 /* fetch associative array */
 while ($row = $result->fetch_assoc()) {
 printf ("%s (%s)\n", $row["Username"], $row["Password"]);
 }

 /* free result set */
 $result->free();
}
/* close connection */
$mysqli->close();
?>