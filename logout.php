<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to another page after logout
header("Location: index.php"); // Replace "index.php" with the desired destination
exit();
?>
