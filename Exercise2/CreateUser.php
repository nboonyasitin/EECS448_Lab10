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

if($_POST["username"] != '' && $num_rows < 1) 
{
    $query = "INSERT INTO Users (user_id) VALUES (\"$username\");";

    if ($mysqli->query($query) == TRUE) 
    {
        printf("Username saved.");
            
    } 
    else
    {
        printf("Username already in use.");
    }

} 
else 
{
    printf("Usernames cannot be empty.");
}
 
/* close connection */
$mysqli->close();
?>