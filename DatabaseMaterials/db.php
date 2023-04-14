<?php

date_default_timezone_set('America/Los_Angeles');
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("display_errors", 1);

// Starts a PHP session and gives the client a cookie :3
// Will be useful for other features, like staying logged in.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Establishes a connection to the MariaDB database 
function get_mysqli_connection() {
    static $connection;
    
    if (!isset($connection)) {
        $connection = mysqli_connect(
            'localhost', // the server address (don't change)
            'seniorpro23', // 
            'Ylom@6Jak', // 
            'seniorpro23' // 
        ) or die(mysqli_connect_error());
    }
    if ($connection === false) {
        echo "Unable to connect to database<br/>";
        echo mysqli_connect_error();
    }
    return $connection;
      
}

function sanitize($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
  
    return $data;
  }
  
  if ( ! isset($_SESSION['active'])) {
    $_SESSION['active'] = false;
  }


?>
