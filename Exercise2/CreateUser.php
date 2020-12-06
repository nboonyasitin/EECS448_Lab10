<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "nahathboonyasit", "umee4coh",
"nahathboonyasit");

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
$username = $_POST["username"];

$query = "SELECT user_id FROM Users where user_id='".$username."'";

if($_POST["username"] == "" || $result->$num_rows != 0) 
    {
        $query = "INSERT INTO Users (user_id) VALUES ('$username')";
        $result = mysqli_query($mysqli,$query);
        printf("Invalid or preexisting Username.");
        
    } 
else 
    {
        $query = "INSERT INTO Users (user_id) VALUES ('$username')";
        $result = mysqli_query($mysqli,$sql);
        printf("User saved.");
    }

if($result = $mysqli->query($query))
    {
        $result->free();
    }
 /* free result set */
 
/* close connection */
$mysqli->close();
?>