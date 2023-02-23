<?php

//connect to database using existing db info
$host = "hostname";
$username = "username";
$password = "password";
$db = "database";

// set up a connection to database
$conn = mysqli_connect($host, $username, $password, $db);

//check if connection was successful
if (!$conn)
{
    die("Error: Connection failed")
}
echo "Success!";


mysqli_close($conn);

?>