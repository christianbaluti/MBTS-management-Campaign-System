<?php
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'mbts');

    // Get the user's details from the database
    $user_id = $_POST['id'];
    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_array($result);

    // Display the user's details
    echo "Name: " . $user['lname'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
    //... and so on
?>