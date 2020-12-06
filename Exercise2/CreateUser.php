<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "nahathboonyasit", "umee4coh",
"nahathboonyasit");

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$query = "SELECT user_id FROM Users where user_id='".$username."'";

if($_POST["username"] != '' && $num_rows < 1)
{
    $query = "SELECT user_id FROM Users WHERE user_id='$username'";
    if($result = mysqli_query($mysqli,$query))
    {
        printf("You have entered an invalid or preexisting username.");
    }
    else if($mysqli->query($query) == TRUE)
    {
        printf("User has been saved.");
    }
    
}
else
{
    printf("You have entered an invalid or preexisting username.");
}

$query = "SELECT user_id";
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