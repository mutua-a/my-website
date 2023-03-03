<?php 

    # Step 1: Include config file
    include_once "./config.php";

    # Step 2: Check if the submit button was clicked
if (isset($_POST['submit'])) {
    # Step 3: Retrieve form input data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    # Step 4: Sanitize and validate form input data
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    # Step 5: Insert the data into the database
    $sql = "INSERT INTO contacts (name, email, message)
            VALUES ('$name', '$email', '$message')";


    if (mysqli_query($conn, $sql)) 
    {
        echo "Data inserted successfully";
        header('Location: ../contact.html');
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

    
    # Step 8: Close the database connection
        mysqli_close($conn);

?>
