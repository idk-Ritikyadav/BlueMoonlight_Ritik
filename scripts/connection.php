<?php 
$conn = mysqli_connect("localhost", "root", "", "school");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//  function is used to close the connection to the database. It is used to free up the resources used by the connection.
$current_count = 0;// code to retrieve the current count

// Increment the visit count by 1
$new_count = $current_count + 1;
?>