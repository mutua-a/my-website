<?php

    define('SERVER', 'localhost'); # Database server
    define('USERNAME', 'root'); # Database username
    define('PASSWORD', ''); # Database password
    define('DBNAME', 'booking'); # Database name

    # connect to MySQL database 
    $conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DBNAME);
    
    # Check database connection == TRUE
    if($conn === false)
    {
        die("Error: connection error. " . mysqli_connect_error());
    }

?>