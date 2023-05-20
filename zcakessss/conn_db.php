<?php

    // Connect to the database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'zcakes';


    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Create a connection to the database
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    define("LOGGED_IMG_FOLDER","../img");
    define("CONN",$conn);
    define("CURRENCY","Php ");


    // Include func.php file
    include_once "func.php";

    // Start a new session
    session_start();

    // Include sql_utilities.php file
    include_once "sql_utilities.php";

?>