<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "nahathboonyasit", "umee4coh",
"nahathboonyasit");

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$username = $_POST["userpost"];
$post = $_POST["usercontent"];

if($username == NULL || $post == NULL)
{
    printf("Must have a username and post content.");
}
else
{
    $query = "INSERT INTO Posts (content, author_id) VALUES (\'$post\', (SELECT user_id FROM Users WHERE user_id=\'$username\'));";
	if ($result = $mysqli->query($query)){
		printf("Content Posted!");
    }
    else
    {
        printf("Could not post content.");
    }
}

$result->free();
 /* free result set */
 
/* close connection */
$mysqli->close();
?>