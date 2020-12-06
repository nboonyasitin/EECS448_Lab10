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

if($content == "")
{
    printf("Cannot make an empty post.");
}
else
{
    $query = "SELECT user_id FROM Users WHERE user_id='$username'";
    $result = mysqli_query($mysqli,$query);

    if($result->num_rows != 0)
    {
        $sql = "INSERT INTO Posts (content, author_id) VALUES ('$content', '$username')";
        $result = mysqli_query($mysqli,$sql);
    }
    else
    {
        printf("Username does not exist on server.");
    }
}

if($result = $mysqli->query($query))
    {
        $result->free();
    }
 /* free result set */
 
/* close connection */
$mysqli->close();
?>