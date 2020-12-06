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

if ($result = mysql_query($query)) 
{
    trigger_error('Exists.', E_USER_WARNING);
} 
else
{
    if($_POST["username"] != '' && $num_rows < 1) 
    {
        $query = "INSERT INTO Users (user_id) VALUES (\"$username\");";

        if ($mysqli->query($query) == TRUE) 
        {
            printf("User saved.");
        }
        else 
        {
            printf("Username is in use.");
        }

    } 
    else 
    {
        printf("Invalid Username.");
    }
}


 /* free result set */
 $result->free();

/* close connection */
$mysqli->close();
?>