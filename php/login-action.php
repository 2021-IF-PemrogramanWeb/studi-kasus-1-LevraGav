<?php
session_start();
// Connect to database
include 'config.php';

// Variables taken from form
$email = $_POST['email'];
$password = $_POST['password'];
$hour = time() + 3600;
setcookie('remember_me', $_POST['email'], $hour);

// Accessing account from database
$sql = "SELECT * FROM `identity` WHERE email='$email'";

// Getting result from database
$result = mysqli_query($db_connection, $sql);

// Counting amount of records
$count = mysqli_num_rows($result);

// If theres one record carry one
if ($count == 1) {
    // Convert DB result array into text
    while ($row = mysqli_fetch_array($result)) {

      // Assigning variable to password record
      $dbPass = $row['password'];
    }
    
    // Verifying password
    if (password_verify($password, $dbPass)==0) {
      $_SESSION['login'] = $email;
      header("location: page.php");
    } else {
      header("location: ../index.html");
    }
}
?>