<?php

use App\Card;

require 'vendor/autoload.php';

$card = new Card();
$host = 'db';

// Database use name
$user = 'mariadb';

//database user password
$pass = 'mariadb';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
